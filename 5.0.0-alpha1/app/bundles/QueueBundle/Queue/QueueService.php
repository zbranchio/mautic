<?php

namespace Mautic\QueueBundle\Queue;

use Mautic\CoreBundle\Helper\CoreParametersHelper;
use Mautic\QueueBundle\Event\QueueConsumerEvent;
use Mautic\QueueBundle\Event\QueueEvent;
use Mautic\QueueBundle\Helper\QueueRequestHelper;
use Mautic\QueueBundle\QueueEvents;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class QueueService.
 */
class QueueService
{
    /**
     * @var CoreParametersHelper
     */
    private $coreParametersHelper;

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * QueueService constructor.
     */
    public function __construct(CoreParametersHelper $coreParametersHelper, EventDispatcherInterface $eventDispatcher, LoggerInterface $logger)
    {
        $this->coreParametersHelper = $coreParametersHelper;
        $this->eventDispatcher      = $eventDispatcher;
        $this->logger               = $logger;
    }

    /**
     * @param string $queueName
     */
    public function publishToQueue($queueName, array $payload = [])
    {
        if (isset($payload['request']) && $payload['request'] instanceof Request) {
            $payload['request'] = QueueRequestHelper::flattenRequest($payload['request']);
        }

        $logPayload = $payload;
        unset($logPayload['request']);
        $this->logger->debug('QUEUE: Queuing job for '.$queueName, $logPayload);

        $protocol                   = $this->coreParametersHelper->get('queue_protocol');
        $payload['mauticQueueName'] = $queueName;
        $event                      = new QueueEvent($protocol, $queueName, $payload);
        $this->eventDispatcher->dispatch($event, QueueEvents::PUBLISH_MESSAGE);
    }

    /**
     * @param string   $queueName
     * @param int|null $messages
     * @param int|null $timeout
     */
    public function consumeFromQueue($queueName, $messages = null, $timeout = null)
    {
        $protocol = $this->coreParametersHelper->get('queue_protocol');
        $event    = new QueueEvent($protocol, $queueName, [], $messages, $timeout);
        $this->eventDispatcher->dispatch($event, QueueEvents::CONSUME_MESSAGE);
    }

    /**
     * @return QueueConsumerEvent
     */
    public function dispatchConsumerEventFromPayload($payload)
    {
        $payload    = json_decode($payload, true);
        $logPayload = $payload;
        unset($logPayload['request']);

        if (isset($payload['request'])) {
            $payload['request'] = QueueRequestHelper::buildRequest($payload['request']);
        }

        // This is needed since OldSound RabbitMqBundle consumers don't know what their queue is
        $queueName = $payload['mauticQueueName'];
        unset($payload['mauticQueueName']);
        $eventName = "mautic.queue_{$queueName}";

        $this->logger->debug('QUEUE: Consuming job for '.$queueName, $logPayload);

        $event = new QueueConsumerEvent($payload);
        $this->eventDispatcher->dispatch($event, $eventName);

        return $event;
    }

    /**
     * @return bool
     */
    public function isQueueEnabled()
    {
        return '' != $this->coreParametersHelper->get('queue_protocol');
    }
}
