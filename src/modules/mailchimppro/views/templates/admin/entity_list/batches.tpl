{*
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
 *}
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>{l s='ID' mod='mailchimppro'}</th>
            <th>{l s='Status' mod='mailchimppro'}</th>
            <th>{l s='Total operations' mod='mailchimppro'}</th>
            <th>{l s='Finished operations' mod='mailchimppro'}</th>
            <th>{l s='Failed operations' mod='mailchimppro'}</th>
            <th>{l s='Submitted at' mod='mailchimppro'}</th>
            <th>{l s='Completed at' mod='mailchimppro'}</th>
            <th>#</th>
        </tr>
        </thead>
        <tbody>
        {foreach $batches as $batch}
            <tr>
                <td>
                    <a href="{LinkHelper::getAdminLink('AdminMailchimpProBatches', true, [], ['action' => 'single', 'entity_id' => $batch.id])|escape:'htmlall':'UTF-8'}">
                        {$batch.id|escape:'htmlall':'UTF-8'}
                    </a>
                </td>
                <td>{$batch.status|escape:'htmlall':'UTF-8'}</td>
                <td>{$batch.total_operations|escape:'htmlall':'UTF-8'}</td>
                <td>{$batch.finished_operations|escape:'htmlall':'UTF-8'}</td>
                <td>{$batch.errored_operations|escape:'htmlall':'UTF-8'}</td>
                <td>{$batch.submitted_at|escape:'htmlall':'UTF-8'}</td>
                <td>{$batch.completed_at|escape:'htmlall':'UTF-8'}</td>
                <td>
                    <a href="{LinkHelper::getAdminLink('AdminMailchimpProBatches', true, [], ['action' => 'entitydelete', 'entity_id' => $batch.id])|escape:'htmlall':'UTF-8'}">
                        Delete
                    </a>
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>
</div>