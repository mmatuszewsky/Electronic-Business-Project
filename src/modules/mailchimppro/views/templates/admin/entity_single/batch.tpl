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
<div class="panel">
    <div class="panel-heading">
        {l s='Batch operation' mod='mailchimppro'} #{$entity.id|escape:'htmlall':'UTF-8'}
    </div>
    <div class="panel-body">
        <table class="table table-striped table-bordered">
            <thead>
            <tbody>
                <tr>
                    <td>{l s='ID' mod='mailchimppro'}</td>
                    <td>{$entity.id|escape:'htmlall':'UTF-8'}</td>
                </tr>
                <tr>
                    <td>{l s='Status' mod='mailchimppro'}</td>
                    <td>{$entity.status|escape:'htmlall':'UTF-8'}</td>
                </tr>
                <tr>
                    <td>{l s='Total operations' mod='mailchimppro'}</td>
                    <td>{$entity.total_operations|escape:'htmlall':'UTF-8'}</td>
                </tr>
                <tr>
                    <td>{l s='Finished operations' mod='mailchimppro'}</td>
                    <td>{$entity.finished_operations|escape:'htmlall':'UTF-8'}</td>
                </tr>
                <tr>
                    <td>{l s='Errored operations' mod='mailchimppro'}</td>
                    <td>{$entity.errored_operations|escape:'htmlall':'UTF-8'}</td>
                </tr>
                <tr>
                    <td>{l s='Submitted at' mod='mailchimppro'}</td>
                    <td>{$entity.submitted_at|escape:'htmlall':'UTF-8'}</td>
                </tr>
                <tr>
                    <td>{l s='Completed at' mod='mailchimppro'}</td>
                    <td>{$entity.completed_at|escape:'htmlall':'UTF-8'}</td>
                </tr>
                <tr>
                    <td>{l s='Response body url' mod='mailchimppro'}</td>
                    <td>{$entity.response_body_url|escape:'htmlall':'UTF-8'}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
