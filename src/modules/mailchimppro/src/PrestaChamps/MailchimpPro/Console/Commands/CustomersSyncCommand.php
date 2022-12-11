<?php
/**
 * MailChimp
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Commercial License
 * you can't distribute, modify or sell this code
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file
 * If you need help please contact leo@prestachamps.com
 *
 * @author    Mailchimp
 * @copyright Mailchimp
 * @license   commercial
 */

namespace PrestaChamps\MailchimpPro\Console\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * CLI Customer sync
 */
class CustomersSyncCommand extends Command
{
    protected function configure()
    {
        $this->setName('mailchimp:sync:customers');
        $this->setDescription("Sync your customers to Mailchimp");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $ids = array_column(\Customer::getCustomers(true), 'id_customer');
        $progressBar = new ProgressBar($output, count($ids));
        $progressBar->setFormat(
            "%current%/%max% [%bar%] %percent:3s%%\n 🏁  %estimated:-21s% %memory:21s%"
        );
        $progressBar->setBarCharacter('<fg=green>⚬</>');
        $progressBar->setEmptyBarCharacter("<fg=red>⚬</>");
        $progressBar->setProgressCharacter("<fg=green>➤</>");
        $progressBar->start();

        $context = \Context::getContext();
        $apiClient = \Module::getInstanceByName('mailchimppro')->getApiClient();
        foreach ($ids as $customerId) {
            $command = new \PrestaChamps\MailchimpPro\Commands\CustomerSyncCommand(
                $context,
                $apiClient,
                [$customerId]
            );
            $command->execute();
            $progressBar->advance();
        }
        $progressBar->finish();

        $output->writeln(PHP_EOL . 'Sync done!');
    }
}
