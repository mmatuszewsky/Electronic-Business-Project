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
 * CLI Order sync
 */
class OrdersSyncCommand extends Command
{
    protected function configure()
    {
        $this->setName('mailchimp:sync:orders');
        $this->setDescription("Sync your orders to Mailchimp");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $ids = [1];//$this->getOrderIds();
        $progressBar = new ProgressBar($output, count($ids));
//        $progressBar->setFormat(
//            "%current%/%max% [%bar%] %percent:3s%%\n 🏁  %estimated:-21s% %memory:21s%"
//        );
//        $progressBar->setBarCharacter('<fg=green>⚬</>');
//        $progressBar->setEmptyBarCharacter("<fg=red>⚬</>");
//        $progressBar->setProgressCharacter("<fg=green>➤</>");
        $progressBar->start();

        $context = \Context::getContext();
        $apiClient = new \DrewM\MailChimp\MailChimp(\Configuration::get(\MailchimpProConfig::MAILCHIMP_API_KEY));;
        foreach ($ids as $orderId) {
            try {
                $command = new \PrestaChamps\MailchimpPro\Commands\OrderSyncCommand(
                    $context,
                    $apiClient,
                    [$orderId]
                );

//                $command->execute();
            } catch (\Exception $exception) {
                $output->writeln($exception->getMessage());die();
            }
            $progressBar->advance();
        }
        $progressBar->finish();

        $output->writeln(PHP_EOL . 'Sync done!');
    }

    protected function getOrderIds()
    {
        $shopId = 1;
        $query = new \DbQuery();
        $query->from('orders');
        $query->select('id_order');
        if ($shopId) {
            $query->where("id_shop = {$shopId}");
        }

        return array_column(\Db::getInstance()->executeS($query), 'id_order');
    }
}
