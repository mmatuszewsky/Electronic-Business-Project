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
{foreach $responses as $key => $response}
    <div class="panel {if $response->status_code == 200}panel-success{else}panel-warning{/if}" id="panel-{$key|escape:'htmlall':'UTF-8'}">
        <div class="panel-heading">
            <a data-toggle="collapse" data-target="#collapse-{$key|escape:'htmlall':'UTF-8'}" href="#collapse-{$key|escape:'htmlall':'UTF-8'}">
                {$response->operation_id|escape:'htmlall':'UTF-8'}
            </a>
        </div>
        <div id="collapse-{$key|escape:'htmlall':'UTF-8'}" class="panel-collapse collapse">
            <div class="panel-body">
                {* HTML, no need for escape*}
            <pre>{var_export($response->response)}</pre>
            </div>
        </div>
    </div>
{/foreach}