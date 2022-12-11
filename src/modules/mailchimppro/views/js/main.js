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
$(document).ready(function () {
  var x = $('#configuration_form_submit_btn').text();
  if(x.indexOf('Disconnect') !== -1) {
    $('#configuration_form').submit(function() {
      return confirm("This will disable your MailChimp store and break any existing automations, are you sure?");
     });
  }
});
