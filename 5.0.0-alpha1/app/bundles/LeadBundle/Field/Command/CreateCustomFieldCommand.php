<?php

declare(strict_types=1);

namespace Mautic\LeadBundle\Field\Command;

use Doctrine\DBAL\Exception\DriverException;
use Doctrine\DBAL\Schema\SchemaException;
use Mautic\CoreBundle\Command\ModeratedCommand;
use Mautic\CoreBundle\Helper\CoreParametersHelper;
use Mautic\CoreBundle\Helper\PathsHelper;
use Mautic\LeadBundle\Entity\LeadFieldRepository;
use Mautic\LeadBundle\Field\BackgroundService;
use Mautic\LeadBundle\Field\Exception\AbortColumnCreateException;
use Mautic\LeadBundle\Field\Exception\ColumnAlreadyCreatedException;
use Mautic\LeadBundle\Field\Exception\CustomFieldLimitException;
use Mautic\LeadBundle\Field\Exception\LeadFieldWasNotFoundException;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class CreateCustomFieldCommand extends ModeratedCommand
{
    public const COMMAND_NAME = 'mautic:custom-field:create-column';

    private BackgroundService $backgroundService;
    private TranslatorInterface $translator;
    private LeadFieldRepository $leadFieldRepository;

    public function __construct(
        BackgroundService $backgroundService,
        TranslatorInterface $translator,
        LeadFieldRepository $leadFieldRepository,
        PathsHelper $pathsHelper,
        CoreParametersHelper $coreParametersHelper
    ) {
        parent::__construct($pathsHelper, $coreParametersHelper);
        $this->backgroundService   = $backgroundService;
        $this->translator          = $translator;
        $this->leadFieldRepository = $leadFieldRepository;
    }

    public function configure(): void
    {
        parent::configure();

        $this->setName(self::COMMAND_NAME)
            ->addOption('--id', '-i', InputOption::VALUE_REQUIRED, 'LeadField ID.')
            ->addOption('--user', '-u', InputOption::VALUE_OPTIONAL, 'User ID - User which receives a notification.')
            ->setHelp(
                <<<'EOT'
The <info>%command.name%</info> command will create a column in a lead_fields table if the process should run in background.

<info>php %command.full_name%</info>
EOT
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $leadFieldId = (int) $input->getOption('id');
        $userId      = (int) $input->getOption('user');

        $moderationKey = sprintf('%s-%s-%s', self::COMMAND_NAME, $leadFieldId, $userId);

        if (!$this->checkRunStatus($input, $output, $moderationKey)) {
            return \Symfony\Component\Console\Command\Command::SUCCESS;
        }
        if (!$leadFieldId) {
            $leadField = $this->leadFieldRepository->getFieldThatIsMissingColumn();

            if (!$leadField) {
                $output->writeln('<info>'.$this->translator->trans('mautic.lead.field.all_fields_have_columns').'</info>');

                return \Symfony\Component\Console\Command\Command::SUCCESS;
            }

            $leadFieldId = $leadField->getId();
            $userId      = $leadField->getCreatedBy();
        }

        try {
            $this->backgroundService->addColumn($leadFieldId, $userId);
        } catch (LeadFieldWasNotFoundException $e) {
            $output->writeln('<error>'.$this->translator->trans('mautic.lead.field.notfound').'</error>');

            return \Symfony\Component\Console\Command\Command::FAILURE;
        } catch (ColumnAlreadyCreatedException $e) {
            $output->writeln('<error>'.$this->translator->trans('mautic.lead.field.column_already_created').'</error>');

            return \Symfony\Component\Console\Command\Command::SUCCESS;
        } catch (AbortColumnCreateException $e) {
            $output->writeln('<error>'.$this->translator->trans('mautic.lead.field.column_creation_aborted').'</error>');

            return \Symfony\Component\Console\Command\Command::SUCCESS;
        } catch (CustomFieldLimitException $e) {
            $output->writeln('<error>'.$this->translator->trans($e->getMessage()).'</error>');

            return \Symfony\Component\Console\Command\Command::FAILURE;
        } catch (DriverException $e) {
            $output->writeln('<error>'.$this->translator->trans($e->getMessage()).'</error>');

            return \Symfony\Component\Console\Command\Command::FAILURE;
        } catch (SchemaException $e) {
            $output->writeln('<error>'.$this->translator->trans($e->getMessage()).'</error>');

            return \Symfony\Component\Console\Command\Command::FAILURE;
        } catch (\Doctrine\DBAL\Exception $e) {
            $output->writeln('<error>'.$this->translator->trans($e->getMessage()).'</error>');

            return \Symfony\Component\Console\Command\Command::FAILURE;
        } catch (\Mautic\CoreBundle\Exception\SchemaException $e) {
            $output->writeln('<error>'.$this->translator->trans($e->getMessage()).'</error>');

            return \Symfony\Component\Console\Command\Command::FAILURE;
        }

        $output->writeln('');
        $output->writeln('<info>'.$this->translator->trans('mautic.lead.field.column_was_created', ['%id%' => $leadFieldId]).'</info>');
        $this->completeRun();

        return \Symfony\Component\Console\Command\Command::SUCCESS;
    }
    protected static $defaultDescription = 'Create custom field column in the background';
}
