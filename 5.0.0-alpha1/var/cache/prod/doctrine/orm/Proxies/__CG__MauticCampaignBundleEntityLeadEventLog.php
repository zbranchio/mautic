<?php

namespace Proxies\__CG__\Mautic\CampaignBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class LeadEventLog extends \Mautic\CampaignBundle\Entity\LeadEventLog implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'id', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'event', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'lead', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'campaign', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'dateTriggered', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'isScheduled', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'triggerDate', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'systemTriggered', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'metadata', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'nonActionPathTaken', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'channel', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'channelId', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'previousScheduledState', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'rotation', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'failedLog', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'rescheduleInterval'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'id', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'event', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'lead', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'campaign', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'ipAddress', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'dateTriggered', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'isScheduled', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'triggerDate', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'systemTriggered', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'metadata', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'nonActionPathTaken', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'channel', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'channelId', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'previousScheduledState', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'rotation', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'failedLog', '' . "\0" . 'Mautic\\CampaignBundle\\Entity\\LeadEventLog' . "\0" . 'rescheduleInterval'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (LeadEventLog $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateTriggered()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateTriggered', []);

        return parent::getDateTriggered();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateTriggered(\DateTimeInterface $dateTriggered = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateTriggered', [$dateTriggered]);

        return parent::setDateTriggered($dateTriggered);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpAddress', []);

        return parent::getIpAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpAddress(\Mautic\CoreBundle\Entity\IpAddress $ipAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpAddress', [$ipAddress]);

        return parent::setIpAddress($ipAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getLead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLead', []);

        return parent::getLead();
    }

    /**
     * {@inheritDoc}
     */
    public function setLead(\Mautic\LeadBundle\Entity\Lead $lead)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLead', [$lead]);

        return parent::setLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvent', []);

        return parent::getEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setEvent(\Mautic\CampaignBundle\Entity\Event $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEvent', [$event]);

        return parent::setEvent($event);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsScheduled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsScheduled', []);

        return parent::getIsScheduled();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsScheduled($isScheduled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsScheduled', [$isScheduled]);

        return parent::setIsScheduled($isScheduled);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreviousScheduledState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreviousScheduledState', []);

        return parent::getPreviousScheduledState();
    }

    /**
     * {@inheritDoc}
     */
    public function getTriggerDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTriggerDate', []);

        return parent::getTriggerDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setTriggerDate(\DateTimeInterface $triggerDate = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTriggerDate', [$triggerDate]);

        return parent::setTriggerDate($triggerDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getCampaign()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCampaign', []);

        return parent::getCampaign();
    }

    /**
     * {@inheritDoc}
     */
    public function setCampaign(\Mautic\CampaignBundle\Entity\Campaign $campaign)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCampaign', [$campaign]);

        return parent::setCampaign($campaign);
    }

    /**
     * {@inheritDoc}
     */
    public function getSystemTriggered()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSystemTriggered', []);

        return parent::getSystemTriggered();
    }

    /**
     * {@inheritDoc}
     */
    public function setSystemTriggered($systemTriggered)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSystemTriggered', [$systemTriggered]);

        return parent::setSystemTriggered($systemTriggered);
    }

    /**
     * {@inheritDoc}
     */
    public function getNonActionPathTaken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNonActionPathTaken', []);

        return parent::getNonActionPathTaken();
    }

    /**
     * {@inheritDoc}
     */
    public function setNonActionPathTaken($nonActionPathTaken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNonActionPathTaken', [$nonActionPathTaken]);

        return parent::setNonActionPathTaken($nonActionPathTaken);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadata()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetadata', []);

        return parent::getMetadata();
    }

    /**
     * {@inheritDoc}
     */
    public function appendToMetadata($metadata)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'appendToMetadata', [$metadata]);

        return parent::appendToMetadata($metadata);
    }

    /**
     * {@inheritDoc}
     */
    public function setMetadata($metadata)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetadata', [$metadata]);

        return parent::setMetadata($metadata);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannel', []);

        return parent::getChannel();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannel($channel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannel', [$channel]);

        return parent::setChannel($channel);
    }

    /**
     * {@inheritDoc}
     */
    public function getChannelId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChannelId', []);

        return parent::getChannelId();
    }

    /**
     * {@inheritDoc}
     */
    public function setChannelId($channelId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChannelId', [$channelId]);

        return parent::setChannelId($channelId);
    }

    /**
     * {@inheritDoc}
     */
    public function getRotation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRotation', []);

        return parent::getRotation();
    }

    /**
     * {@inheritDoc}
     */
    public function setRotation($rotation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRotation', [$rotation]);

        return parent::setRotation($rotation);
    }

    /**
     * {@inheritDoc}
     */
    public function getFailedLog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFailedLog', []);

        return parent::getFailedLog();
    }

    /**
     * {@inheritDoc}
     */
    public function setFailedLog(\Mautic\CampaignBundle\Entity\FailedLeadEventLog $log = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFailedLog', [$log]);

        return parent::setFailedLog($log);
    }

    /**
     * {@inheritDoc}
     */
    public function isFailed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isFailed', []);

        return parent::isFailed();
    }

    /**
     * {@inheritDoc}
     */
    public function isSuccess()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSuccess', []);

        return parent::isSuccess();
    }

    /**
     * {@inheritDoc}
     */
    public function setRescheduleInterval(?\DateInterval $interval): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRescheduleInterval', [$interval]);

        parent::setRescheduleInterval($interval);
    }

    /**
     * {@inheritDoc}
     */
    public function getRescheduleInterval(): ?\DateInterval
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRescheduleInterval', []);

        return parent::getRescheduleInterval();
    }

}
