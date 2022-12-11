<?php
/**
 * PrestaChamps
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
 * @copyright PrestaChamps
 * @license   commercial
 */

/**
 * Class AdminMailchimpProBatchesController
 */
class AdminMailchimpProBatchesController extends \PrestaChamps\MailchimpPro\Controllers\BaseMCObjectController
{
    public $entityPlural   = 'batches';
    public $entitySingular = 'batch';

    protected function getListApiEndpointUrl()
    {
        return '/batches';
    }

    protected function getSingleApiEndpointUrl($entityId)
    {
        return "batches/{$entityId}";
    }

    protected function deleteEntity($id)
    {
        $this->mailchimp->delete($this->getSingleApiEndpointUrl($id));

        if ($this->mailchimp->success()) {
            return true;
        }

        return false;
    }

    /**
     * @throws \SmartyException
     * @throws Exception
     */
    public function processSingle()
    {
        parent::processSingle();
        try {
            $tempFilename = tempnam(sys_get_temp_dir(), 'TMP_');
            $destinationPath = $tempFilename . '_extracted';
            $zipName = $tempFilename . '.zip';
            copy($this->entity['response_body_url'], $tempFilename . '.tar.gz');
            $p = new PharData($tempFilename . '.tar.gz');
            $p->convertToData(Phar::ZIP);
            $zip = new ZipArchive;
            $res = $zip->open($zipName);
            if ($res === true) {
                $zip->extractTo($destinationPath);
                $zip->close();
            }
            $it = new RecursiveDirectoryIterator($destinationPath);
            $responses = [];
            foreach (new RecursiveIteratorIterator($it) as $file) {
                if ($file->getExtension() === 'json') {
                    $items = json_decode(Tools::file_get_contents($file), true);
                    foreach ($items as $item) {
                        $responses[] = \PrestaChamps\MailchimpPro\Models\BatchResponse::fromArray($item);
                    }
                }
            }
            $this->context->smarty->assign([
                'responses' => $responses,
            ]);
            $this->content .= $this->context->smarty->fetch(
                $this->module->getLocalPath() . 'views/templates/admin/entity_single/batch-responses.tpl'
            );
            @Tools::deleteDirectory($destinationPath, true);
            @Tools::deleteFile($zipName);
            @Tools::deleteFile($tempFilename . '.tar.gz');
            @Tools::deleteFile($tempFilename . '.tar');
            @Tools::deleteFile($tempFilename);
        } catch (Exception $exception) {
            $this->errors[] = $this->l("Can't decode response");
        }
    }
}
