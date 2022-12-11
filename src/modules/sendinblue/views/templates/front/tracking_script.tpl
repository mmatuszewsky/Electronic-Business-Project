{**
* 2007-2022 Sendinblue
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to contact@sendinblue.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    Sendinblue <contact@sendinblue.com>
* @copyright 2007-2022 Sendinblue
* @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
* International Registered Trademark & Property of Sendinblue
*}
<script type="text/javascript">
    (function() {
        window.sib = {
            equeue: [],
            client_key: "{$marketingAutomationKey}"
        };

    {if ($email)}
        window.sib.email_id = '{$email}';
    {/if}

        window.sendinblue = { } ;
        for (var j = ['track', 'identify', 'trackLink', 'page'], i = 0; i < j.length; i++) {
            (function(k) {
                window.sendinblue[k] = function() {
                    var arg = Array.prototype.slice.call(arguments);
                    (window.sib[k] || function() {
                        var t = { } ;
                        t[k] = arg;
                        window.sib.equeue.push(t);
                    })(arg[0], arg[1], arg[2]);
                };
            })(j[i]);
        }
        var n = document.createElement("script"),
            i = document.getElementsByTagName("script")[0];
        n.type = "text/javascript", n.id = "sendinblue-js", n.async = !0, n.src = "https://sibautomation.com/sa.js?plugin=prestashop&key=" + window.sib.client_key, i.parentNode.insertBefore(n, i), window.sendinblue.page();
    })();
</script>
