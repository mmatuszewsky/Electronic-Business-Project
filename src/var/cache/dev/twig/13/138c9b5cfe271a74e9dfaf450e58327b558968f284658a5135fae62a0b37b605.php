<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__ca48ca3c58d05238ab60685ffd401700fa1b43006571b54f89bf7a7aeef232ba */
class __TwigTemplate_eee82b1bd563d06a3a9901e4bb8784f57da73ec9c259a4911a49456475002b24 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__ca48ca3c58d05238ab60685ffd401700fa1b43006571b54f89bf7a7aeef232ba"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__ca48ca3c58d05238ab60685ffd401700fa1b43006571b54f89bf7a7aeef232ba"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Produkty • be</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.6.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Złożono nowe zamówienie w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'Nowy klient zarejestrował się w Twoim sklepie.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'Nowa wiadomość pojawiła się w Twoim sklepie.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = '5962a8b9bfd4ee3c117b6f0be33b5110';
    var token_admin_orders = '1b79d7aec7937abc95da017e7541a148';
    var token_admin_customers = '6d26d4b4d9eda41d4ff80df1a8cf80af';
    var token_admin_customer_threads = 'ef166cd5570cb8101aae6424d2e8932f';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'd802d94950419f183d22e1caeab016d1';
    var choose_language_translate = 'Wybierz język';
    var default_language = '1';
    var admin_modules_link = '/admin136tuw7qq/index.php/improve/modules/catalog/recommended?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ';
    var admin_notification_get_link = '/admin136tuw7qq/index.php/common/notifications?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ';
    var admin_notification_push_link = '/admin136tuw7qq/index.php/common/notifications/ack?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Aktualizacja powiodła się';
    var errorLogin = 'PrestaShop nie mógł zalogować się do Dodatków, sprawdź swoje uprawnienia i połączenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin136tuw7qq/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin136tuw7qq/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin136tuw7qq\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin136tuw7qq\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/admin136tuw7qq/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.5\"></script>
<script type=\"text/javascript\" src=\"/admin136tuw7qq/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.5\"></script>
<script type=\"text/javascript\" src=\"/admin136tuw7qq/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin136tuw7qq/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/admin136tuw7qq/themes/default/js/bundle/module/module_card.js?v=1.7.6.5\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"http://localhost/admin136tuw7qq/index.php?controller=AdminAjaxFaviconBO&amp;token=95fd1214bc80e55a7fc3324ba74efea0\";
</script>

<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/admin136tuw7qq\\/index.php?controller=AdminGamification&token=876d6c9aa42e2c146e1d5f5356bb8590\";
            var current_id_tab = 10;
        </script>

";
        // line 179
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-pl adminproducts\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminDashboard&amp;token=a4afe7dceaa5a5bcc34a9ce75eef93d0\"></a>
      <span id=\"shop_version\">1.7.6.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin136tuw7qq/index.php/sell/catalog/categories/new?token=a5cf08d11fe55bf6fcbcd1bf70b15806\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=93dbdb0c0ee638d0a8bcf56761c6cfb8\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin136tuw7qq/index.php/sell/catalog/products/new?token=a5cf08d11fe55bf6fcbcd1bf70b15806\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=af964d01fcfa1f438c0f0aef96f23eae\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin136tuw7qq/index.php/improve/modules/manage?token=a5cf08d11fe55bf6fcbcd1bf70b15806\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminOrders&amp;token=1b79d7aec7937abc95da017e7541a148\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"81\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products?-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\"
        data-post-link=\"http://localhost/admin136tuw7qq/index.php?controller=AdminQuickAccesses&token=496c0b0692f67fbf9a3a1e3ef5bb4ccd\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Produkty - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj bieżącą stronę do zakładki
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminQuickAccesses&token=496c0b0692f67fbf9a3a1e3ef5bb4ccd\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj szybkim dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin136tuw7qq/index.php?controller=AdminSearch&amp;token=bdc060161cedaf53c199f1199eb8df36\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, SKU, odniesienie...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nazwisko...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Twój sklep jest w trybie debugowania.</strong></p><p class='text-left'>Wyświetlane są wszystkie błędy i komunikaty PHP. Gdy nie jest już potrzebny, <strong>wyłącz</strong> ten tryb.</p>\"
             href=\"/admin136tuw7qq/index.php/configure/advanced/performance/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Tryb debugowania</span>
          </a>
        </div>
      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Zobacz sklep
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=ed3b3e9203fef1d09390fe5a9ea2e980\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy bierzesz pod uwagę sprzedaż na platformach handlowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              To więcej, czasu na coś innego!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/admin%40admin.pl.jpg\" /></span>
      <span class=\"employee_profile\">Witaj ponownie X</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin136tuw7qq/index.php/configure/advanced/employees/1/edit?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\">
      <i class=\"material-icons\">settings</i>
      Twój profil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/zasoby/dokumentacja\" target=\"_blank\"><i class=\"material-icons\">book</i> Materiały</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Trening</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/eksperci\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Znajdź eksperta</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/pl/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centrum pomocy</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminLogin&amp;logout=1&amp;token=3c4ec193b7d9a99dc00241f491883ee7\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin136tuw7qq/index.php/configure/advanced/employees/toggle-navigation?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminDashboard&amp;token=a4afe7dceaa5a5bcc34a9ce75eef93d0\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Sprzedaż</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminOrders&amp;token=1b79d7aec7937abc95da017e7541a148\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Zamówienia
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminOrders&amp;token=1b79d7aec7937abc95da017e7541a148\" class=\"link\"> Zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin136tuw7qq/index.php/sell/orders/invoices/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Faktury
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminSlip&amp;token=b65eefd2d2a2fec56876f4d6d6de2f84\" class=\"link\"> Druki kredytowe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin136tuw7qq/index.php/sell/orders/delivery-slips/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Druk wysyłki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCarts&amp;token=ed3b3e9203fef1d09390fe5a9ea2e980\" class=\"link\"> Koszyki zakupowe
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin136tuw7qq/index.php/sell/catalog/products?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Katalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin136tuw7qq/index.php/sell/catalog/products?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Produkty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/admin136tuw7qq/index.php/sell/catalog/categories?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Kategorie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminTracking&amp;token=e813f1649800d36acc4d2a8be486e78b\" class=\"link\"> Monitorowanie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminAttributesGroups&amp;token=c2d82a0596edd606971fda643c374e5c\" class=\"link\"> Atrybuty &amp; Cechy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/admin136tuw7qq/index.php/sell/catalog/brands/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Marki &amp; Dostawcy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminAttachments&amp;token=d39d2164d11046f727e92206ce470a34\" class=\"link\"> Pliki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCartRules&amp;token=93dbdb0c0ee638d0a8bcf56761c6cfb8\" class=\"link\"> Rabaty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin136tuw7qq/index.php/sell/stocks/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/admin136tuw7qq/index.php/sell/customers/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Klienci
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/admin136tuw7qq/index.php/sell/customers/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Klienci
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminAddresses&amp;token=f6ae2f75ae8473a251c7849758caeb96\" class=\"link\"> Adresy
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCustomerThreads&amp;token=ef166cd5570cb8101aae6424d2e8932f\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Obsługa klienta
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCustomerThreads&amp;token=ef166cd5570cb8101aae6424d2e8932f\" class=\"link\"> Obsługa klienta
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminOrderMessage&amp;token=05ddc97d62301535223cc508d640ff37\" class=\"link\"> Wiadomości zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminReturn&amp;token=cd1b4b8c8b0efb66e3b494e44f9e1b98\" class=\"link\"> Zwroty produktów
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"/admin136tuw7qq/index.php/modules/metrics/legacy/stats?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statystyki
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"140\" id=\"subtab-AdminMetricsLegacyStatsController\">
                              <a href=\"/admin136tuw7qq/index.php/modules/metrics/legacy/stats?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Statystyki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"141\" id=\"subtab-AdminMetricsController\">
                              <a href=\"/admin136tuw7qq/index.php/modules/metrics?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> PrestaShop Metrics
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Ulepszenia</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin136tuw7qq/index.php/improve/modules/manage?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Moduły
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin136tuw7qq/index.php/improve/modules/manage?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/admin136tuw7qq/index.php/modules/addons/modules/catalog?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Katalog
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/admin136tuw7qq/index.php/improve/design/themes/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Wygląd
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/admin136tuw7qq/index.php/improve/design/themes/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Szablony
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/admin136tuw7qq/index.php/modules/addons/themes/catalog?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Katalog
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/admin136tuw7qq/index.php/improve/design/mail_theme/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Szablon maila
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/admin136tuw7qq/index.php/improve/design/cms-pages/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Strony
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin136tuw7qq/index.php/improve/design/modules/positions/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Pozycje
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminImages&amp;token=3b8ffd90725f9464de027f237431dbd4\" class=\"link\"> Zdjęcia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/admin136tuw7qq/index.php/modules/link-widget/list?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCarriers&amp;token=1d0bb7d2e1ae7db4999126820b1d013a\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Wysyłka
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCarriers&amp;token=1d0bb7d2e1ae7db4999126820b1d013a\" class=\"link\"> Przewoźnicy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin136tuw7qq/index.php/improve/shipping/preferences?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Preferencje
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin136tuw7qq/index.php/improve/payment/payment_methods?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Płatność
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin136tuw7qq/index.php/improve/payment/payment_methods?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Płatności
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin136tuw7qq/index.php/improve/payment/preferences?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Preferencje
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin136tuw7qq/index.php/improve/international/localization/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Międzynarodowy
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin136tuw7qq/index.php/improve/international/localization/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Lokalizacja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminZones&amp;token=310f286add95fe83621e0766942be6c1\" class=\"link\"> Położenie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/admin136tuw7qq/index.php/improve/international/taxes/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Podatki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin136tuw7qq/index.php/improve/international/translations/settings?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Tłumaczenia
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Konfiguruj</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin136tuw7qq/index.php/configure/shop/preferences/preferences?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Preferencje
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin136tuw7qq/index.php/configure/shop/preferences/preferences?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Ogólny
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin136tuw7qq/index.php/configure/shop/order-preferences/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin136tuw7qq/index.php/configure/shop/product-preferences/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Produkty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin136tuw7qq/index.php/configure/shop/customer-preferences/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Klienci
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/admin136tuw7qq/index.php/configure/shop/contacts/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Kontakt
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin136tuw7qq/index.php/configure/shop/seo-urls/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Ruch
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminSearchConf&amp;token=6803190f0ffccdf4d449c6764b3e87b2\" class=\"link\"> Szukaj
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminGamification&amp;token=876d6c9aa42e2c146e1d5f5356bb8590\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin136tuw7qq/index.php/configure/advanced/system-information/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Zaawansowane
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/system-information/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Informacja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/performance/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Wydajność
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/administration/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Administracja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/emails/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Adres e-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/import/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Importuj
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/employees/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Zespół
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/sql-requests/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Baza danych
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/logs/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Logi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/webservice-keys/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> API
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Uruchomienie sklepu!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Wznów</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Zakończ wprowadzanie</a>
  </div>
</div>

</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Katalog</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin136tuw7qq/index.php/sell/catalog/products?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" aria-current=\"page\">Produkty</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Produkty          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin136tuw7qq/index.php/sell/catalog/products/new?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\"                  title=\"Utwórz nowy produkt: CTRL+P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Nowy produkt
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin136tuw7qq/index.php/improve/modules/catalog?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\"                title=\"Rekomendowane moduły\"
                              >
                Rekomendowane moduły
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin136tuw7qq/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminProducts%253Fversion%253D1.7.6.5%2526country%253Dpl/Pomoc?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    <!-- begin /var/www/html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Zalecane moduły i usługi',
        'Close': 'Zamknij',
      },
      recommendedModulesUrl: '/admin136tuw7qq/index.php/modules/addons/modules/recommended?tabClassName=AdminProducts&_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end /var/www/html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>
      
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Dalej</button>
  <a class=\"onboarding-button-shut-down\">Pomiń ten poradnik</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Zapraszamy do sklepu!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Cze\\u015b\\u0107! Nazywam si\\u0119 Preston i jestem tutaj Twoim przewodnikiem.<\\/p>\\n    <p>Poznasz kilka podstawowych krok\\u00f3w, zanim b\\u0119dzie mo\\u017cna uruchomi\\u0107 sklep:\\n    Utworzysz sw\\u00f3j pierwszy produkt, dostosujesz sw\\u00f3j sklep, skonfigurujesz wysy\\u0142k\\u0119 i p\\u0142atno\\u015bci...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Zaczynajmy!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Po\\u017aniej<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Ropocznij<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/admin136tuw7qq\\/index.php?controller=AdminDashboard&token=a4afe7dceaa5a5bcc34a9ce75eef93d0\"}]},{\"title\":\"Utw\\u00f3rz sw\\u00f3j pierwszy produkt\",\"subtitle\":{\"1\":\"Jak chcesz go opisa\\u0107? Pomy\\u015bl co Twoi klienci chcieliby o nim wiedzie\\u0107.\",\"2\":\"Dodaj jasne i atrakcyjne informacje. Nie martw si\\u0119, mo\\u017cesz je p\\u00f3\\u017aniej edytowa\\u0107 :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Nadaj produktowi chwytliw\\u0105 nazw\\u0119.\",\"options\":[\"savepoint\"],\"page\":[\"\\/admin136tuw7qq\\/index.php\\/sell\\/catalog\\/products\\/new?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\",\"admin136tuw7qq\\/index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Wype\\u0142nij niezb\\u0119dne informacje w tej karcie. Pozosta\\u0142e karty s\\u0105 dla bardziej zaawansowanych informacji.\",\"page\":\"admin136tuw7qq\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Dodaj jedno lub wi\\u0119cej zdj\\u0119\\u0107, dzi\\u0119ki temu produkt wygl\\u0105da kusz\\u0105co!\",\"page\":\"admin136tuw7qq\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Po ile chcesz go sprzedawa\\u0107?\",\"page\":\"admin136tuw7qq\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Hurra! W\\u0142a\\u015bnie zosta\\u0142 utworzony pierwszy produkt. Wygl\\u0105da dobrze, prawda?\",\"page\":\"admin136tuw7qq\\/index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Daj sklepowi w\\u0142asn\\u0105 to\\u017csamo\\u015b\\u0107\",\"subtitle\":{\"1\":\"Jak ma wygl\\u0105da\\u0107 tw\\u00f3j sklep? Co zrobi\\u0107 aby by\\u0142 wyj\\u0105tkowym?\",\"2\":\"Dostosuj sw\\u00f3j szablon lub wybierz najlepszy projekt z katalogu szablon\\u00f3w.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Dobrym sposobem na rozpocz\\u0119cie jest aby doda\\u0107 tutaj w\\u0142asne logo!\",\"options\":[\"savepoint\"],\"page\":\"\\/admin136tuw7qq\\/index.php\\/improve\\/design\\/themes\\/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\",\"selector\":\"#form_shop_logos_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Je\\u015bli chcesz co\\u015b naprawd\\u0119 specjalnego, obejrzyj ten katalog szablon\\u00f3w!\",\"page\":\"\\/admin136tuw7qq\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Przygotuj sw\\u00f3j sklep do dokonywania p\\u0142atno\\u015bci\",\"subtitle\":{\"1\":\"W jaki spos\\u00f3b klienci maj\\u0105 dokona\\u0107 p\\u0142atno\\u015bci?\",\"2\":\"Dostosuj swoj\\u0105 ofert\\u0119 do rynku: dodaj dla klient\\u00f3w najpopularniejsze metody p\\u0142atno\\u015bci!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Te metody p\\u0142atno\\u015bci s\\u0105 ju\\u017c dost\\u0119pne dla Twoich klient\\u00f3w.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin136tuw7qq\\/index.php\\/improve\\/payment\\/payment_methods?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Tutaj mo\\u017cesz doda\\u0107 wi\\u0119cej sposob\\u00f3w p\\u0142atno\\u015bci!\",\"page\":\"\\/admin136tuw7qq\\/index.php\\/improve\\/payment\\/payment_methods?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1), .card:eq(1) .module-item-list div:eq(0) div:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Wybierz swoje sposoby wysy\\u0142ki\",\"subtitle\":{\"1\":\"Jak chcesz dostarcza\\u0107 swoje produkty?\",\"2\":\"Wybierz rozwi\\u0105zania wysy\\u0142ki najodpowiedniejsze dla klient\\u00f3w! Stw\\u00f3rz swojego w\\u0142asnego przewo\\u017anika lub dodaj gotowy modu\\u0142.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Tutaj s\\u0105 metody wysy\\u0142ki dost\\u0119pne dzi\\u015b w sklepie.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/admin136tuw7qq\\/index.php?controller=AdminCarriers&token=1d0bb7d2e1ae7db4999126820b1d013a\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Mo\\u017cesz zaoferowa\\u0107 wi\\u0119cej opcji dostawy poprzez utworzenie dodatkowych przewo\\u017anik\\u00f3w\",\"page\":\"http:\\/\\/localhost\\/admin136tuw7qq\\/index.php?controller=AdminCarriers&token=1d0bb7d2e1ae7db4999126820b1d013a\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Ulepsz sw\\u00f3j sklep za pomoc\\u0105 modu\\u0142\\u00f3w\",\"subtitle\":{\"1\":\"Dodaj dodatkowe funkcje i zarz\\u0105dzaj istniej\\u0105cymi dzi\\u0119ki modu\\u0142om.\",\"2\":\"Niekt\\u00f3re modu\\u0142y s\\u0105 ju\\u017c wst\\u0119pnie zainstalowane, inne mog\\u0105 by\\u0107 darmowe lub p\\u0142atne - przegl\\u0105daj nasz\\u0105 ofert\\u0119, aby zobaczy\\u0107 co jest dost\\u0119pne!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Sprawd\\u017a nasz wyb\\u00f3r modu\\u0142\\u00f3w w pierwszej karcie. Zarz\\u0105dzaj modu\\u0142ami na drugiej i b\\u0105d\\u017a informowany o aktualizacjach w zak\\u0142adce trzeciej.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin136tuw7qq\\/index.php\\/improve\\/modules\\/catalog?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Dodatkowo dla Ciebie!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Widzieli\\u015bcie tylko podstawy, ale jest o wiele wi\\u0119cej do poznania.<br \\/>\\n          Oto zasoby kt\\u00f3re mog\\u0105 pom\\u00f3c wi\\u0119cej:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Poradnik dla pocz\\u0105tkuj\\u0105cych<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum angielskie<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Trening<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Poradnik wideo<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Jestem gotowy<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"admin136tuw7qq\\/index.php\\/improve\\/modules\\/catalog\"}]}]}, 1, \"http://localhost/admin136tuw7qq/index.php?controller=AdminWelcome&token=501b391fb5453d0996941fe4d8908bd9\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hej! Nie możesz się odnaleźć?</p>    <p>Aby kontynuować, kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Dalej</button>    </div>    <p>Jeśli chcesz zakończyć ten poradnik - kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Zamknij powitalny samouczek</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Krok <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Następny</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1305
        $this->displayBlock('content_header', $context, $blocks);
        // line 1306
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1307
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1308
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1309
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminDashboard&amp;token=a4afe7dceaa5a5bcc34a9ce75eef93d0\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=admin%40admin.pl&amp;firstname=X&amp;lastname=X&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin136tuw7qq/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Połącz swój sklep z rynkiem PrestaShop, żeby automatycznie importować wszystkie zakupione dodatki.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Odkryj siłę PrestaShop Addons! Przeglądaj Oficjalny Rynek PrestaShop i znajdź ponad 3500 innowacyjnych modułów i szablonów, które optymalizują stopnie konwersji, zwiększają ruch, budują lojalność klientów i zwiększają Twoją produktywność</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Połącz się z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=admin%40admin.pl&amp;firstname=X&amp;lastname=X&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtwórz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj się
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1416
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 179
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1305
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1306
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1307
    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1308
    public function block_sidebar_right($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1416
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__ca48ca3c58d05238ab60685ffd401700fa1b43006571b54f89bf7a7aeef232ba";
    }

    public function getDebugInfo()
    {
        return array (  1590 => 1416,  1573 => 1308,  1556 => 1307,  1539 => 1306,  1522 => 1305,  1489 => 179,  1475 => 1416,  1366 => 1309,  1363 => 1308,  1360 => 1307,  1357 => 1306,  1355 => 1305,  225 => 179,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pl\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Produkty • be</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'pl';
    var lang_is_rtl = '0';
    var full_language_code = 'pl';
    var full_cldr_language_code = 'pl-PL';
    var country_iso_code = 'PL';
    var _PS_VERSION_ = '1.7.6.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Złożono nowe zamówienie w Twoim sklepie.';
    var order_number_msg = 'Numer zamówienia: ';
    var total_msg = 'Razem: ';
    var from_msg = 'Od: ';
    var see_order_msg = 'Zobacz to zamówienie';
    var new_customer_msg = 'Nowy klient zarejestrował się w Twoim sklepie.';
    var customer_name_msg = 'Nazwa klienta: ';
    var new_msg = 'Nowa wiadomość pojawiła się w Twoim sklepie.';
    var see_msg = 'Przeczytaj tą wiadomość';
    var token = '5962a8b9bfd4ee3c117b6f0be33b5110';
    var token_admin_orders = '1b79d7aec7937abc95da017e7541a148';
    var token_admin_customers = '6d26d4b4d9eda41d4ff80df1a8cf80af';
    var token_admin_customer_threads = 'ef166cd5570cb8101aae6424d2e8932f';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = 'd802d94950419f183d22e1caeab016d1';
    var choose_language_translate = 'Wybierz język';
    var default_language = '1';
    var admin_modules_link = '/admin136tuw7qq/index.php/improve/modules/catalog/recommended?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ';
    var admin_notification_get_link = '/admin136tuw7qq/index.php/common/notifications?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ';
    var admin_notification_push_link = '/admin136tuw7qq/index.php/common/notifications/ack?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = 'Aktualizacja powiodła się';
    var errorLogin = 'PrestaShop nie mógł zalogować się do Dodatków, sprawdź swoje uprawnienia i połączenie internetowe.';
    var search_product_msg = 'Szukaj produktu';
  </script>

      <link href=\"/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin136tuw7qq/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin136tuw7qq/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin136tuw7qq\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin136tuw7qq\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\";
var currency = {\"iso_code\":\"PLN\",\"sign\":\"z\\u0142\",\"name\":\"Z\\u0142oty polski\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PLN\",\"currencySymbol\":\"z\\u0142\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/admin136tuw7qq/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.6.5\"></script>
<script type=\"text/javascript\" src=\"/admin136tuw7qq/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.6.5\"></script>
<script type=\"text/javascript\" src=\"/admin136tuw7qq/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin136tuw7qq/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/admin136tuw7qq/themes/default/js/bundle/module/module_card.js?v=1.7.6.5\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"http://localhost/admin136tuw7qq/index.php?controller=AdminAjaxFaviconBO&amp;token=95fd1214bc80e55a7fc3324ba74efea0\";
</script>

<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/admin136tuw7qq\\/index.php?controller=AdminGamification&token=876d6c9aa42e2c146e1d5f5356bb8590\";
            var current_id_tab = 10;
        </script>

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>

<body class=\"lang-pl adminproducts\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminDashboard&amp;token=a4afe7dceaa5a5bcc34a9ce75eef93d0\"></a>
      <span id=\"shop_version\">1.7.6.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Szybki dostęp
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin136tuw7qq/index.php/sell/catalog/categories/new?token=a5cf08d11fe55bf6fcbcd1bf70b15806\"
                 data-item=\"Nowa kategoria\"
      >Nowa kategoria</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=93dbdb0c0ee638d0a8bcf56761c6cfb8\"
                 data-item=\"Nowy kupon\"
      >Nowy kupon</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin136tuw7qq/index.php/sell/catalog/products/new?token=a5cf08d11fe55bf6fcbcd1bf70b15806\"
                 data-item=\"Nowy produkt\"
      >Nowy produkt</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=af964d01fcfa1f438c0f0aef96f23eae\"
                 data-item=\"Ocena katalogu\"
      >Ocena katalogu</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin136tuw7qq/index.php/improve/modules/manage?token=a5cf08d11fe55bf6fcbcd1bf70b15806\"
                 data-item=\"Zainstalowane moduły\"
      >Zainstalowane moduły</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminOrders&amp;token=1b79d7aec7937abc95da017e7541a148\"
                 data-item=\"Zamówienia\"
      >Zamówienia</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"81\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products?-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\"
        data-post-link=\"http://localhost/admin136tuw7qq/index.php?controller=AdminQuickAccesses&token=496c0b0692f67fbf9a3a1e3ef5bb4ccd\"
        data-prompt-text=\"Proszę podać nazwę tego skrótu:\"
        data-link=\"Produkty - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Dodaj bieżącą stronę do zakładki
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminQuickAccesses&token=496c0b0692f67fbf9a3a1e3ef5bb4ccd\">
      <i class=\"material-icons\">settings</i>
      Zarządzaj szybkim dostępem
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin136tuw7qq/index.php?controller=AdminSearch&amp;token=bdc060161cedaf53c199f1199eb8df36\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Szukaj (np.: indeks produktu, nazwa klienta...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Wszędzie
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Wszędzie\" href=\"#\" data-value=\"0\" data-placeholder=\"Czego szukasz?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Wszędzie</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Katalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Nazwa produktu, SKU, odniesienie...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Katalog</a>
        <a class=\"dropdown-item\" data-item=\"Klienci Wg nazwy\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nazwisko...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Klienci Wg nazwy</a>
        <a class=\"dropdown-item\" data-item=\"Klienci wg adresu IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Klienci wg adresu IP</a>
        <a class=\"dropdown-item\" data-item=\"Zamówienia\" href=\"#\" data-value=\"3\" data-placeholder=\"ID zamówienia\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Zamówienia</a>
        <a class=\"dropdown-item\" data-item=\"Faktury\" href=\"#\" data-value=\"4\" data-placeholder=\"Numer faktury\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faktury</a>
        <a class=\"dropdown-item\" data-item=\"Koszyki\" href=\"#\" data-value=\"5\" data-placeholder=\"ID Koszyka\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Koszyki</a>
        <a class=\"dropdown-item\" data-item=\"Moduły\" href=\"#\" data-value=\"7\" data-placeholder=\"Nazwa modułu\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduły</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">WYSZUKIWANIE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Twój sklep jest w trybie debugowania.</strong></p><p class='text-left'>Wyświetlane są wszystkie błędy i komunikaty PHP. Gdy nie jest już potrzebny, <strong>wyłącz</strong> ten tryb.</p>\"
             href=\"/admin136tuw7qq/index.php/configure/advanced/performance/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Tryb debugowania</span>
          </a>
        </div>
      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Zobacz sklep
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Zamówienia<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Klienci<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Wiadomości<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych zamówień :(<br>
              Czy sprawdziłeś <strong><a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=ed3b3e9203fef1d09390fe5a9ea2e980\">porzucone koszyki</a></strong>?<br>Może znajdziesz tam swoje następne zamówienie!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych klientów :(<br>
              Czy bierzesz pod uwagę sprzedaż na platformach handlowych?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Obecnie brak nowych wiadomości.<br>
              To więcej, czasu na coś innego!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      od <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - zarejestrowany <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/admin%40admin.pl.jpg\" /></span>
      <span class=\"employee_profile\">Witaj ponownie X</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin136tuw7qq/index.php/configure/advanced/employees/1/edit?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\">
      <i class=\"material-icons\">settings</i>
      Twój profil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/zasoby/dokumentacja\" target=\"_blank\"><i class=\"material-icons\">book</i> Materiały</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Trening</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/pl/eksperci\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Znajdź eksperta</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/pl/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Centrum pomocy</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminLogin&amp;logout=1&amp;token=3c4ec193b7d9a99dc00241f491883ee7\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Wyloguj się</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin136tuw7qq/index.php/configure/advanced/employees/toggle-navigation?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminDashboard&amp;token=a4afe7dceaa5a5bcc34a9ce75eef93d0\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Pulpit</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Sprzedaż</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminOrders&amp;token=1b79d7aec7937abc95da017e7541a148\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Zamówienia
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminOrders&amp;token=1b79d7aec7937abc95da017e7541a148\" class=\"link\"> Zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/admin136tuw7qq/index.php/sell/orders/invoices/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Faktury
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminSlip&amp;token=b65eefd2d2a2fec56876f4d6d6de2f84\" class=\"link\"> Druki kredytowe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/admin136tuw7qq/index.php/sell/orders/delivery-slips/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Druk wysyłki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCarts&amp;token=ed3b3e9203fef1d09390fe5a9ea2e980\" class=\"link\"> Koszyki zakupowe
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin136tuw7qq/index.php/sell/catalog/products?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Katalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin136tuw7qq/index.php/sell/catalog/products?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Produkty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/admin136tuw7qq/index.php/sell/catalog/categories?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Kategorie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminTracking&amp;token=e813f1649800d36acc4d2a8be486e78b\" class=\"link\"> Monitorowanie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminAttributesGroups&amp;token=c2d82a0596edd606971fda643c374e5c\" class=\"link\"> Atrybuty &amp; Cechy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/admin136tuw7qq/index.php/sell/catalog/brands/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Marki &amp; Dostawcy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminAttachments&amp;token=d39d2164d11046f727e92206ce470a34\" class=\"link\"> Pliki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCartRules&amp;token=93dbdb0c0ee638d0a8bcf56761c6cfb8\" class=\"link\"> Rabaty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin136tuw7qq/index.php/sell/stocks/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/admin136tuw7qq/index.php/sell/customers/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Klienci
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/admin136tuw7qq/index.php/sell/customers/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Klienci
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminAddresses&amp;token=f6ae2f75ae8473a251c7849758caeb96\" class=\"link\"> Adresy
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCustomerThreads&amp;token=ef166cd5570cb8101aae6424d2e8932f\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Obsługa klienta
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCustomerThreads&amp;token=ef166cd5570cb8101aae6424d2e8932f\" class=\"link\"> Obsługa klienta
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminOrderMessage&amp;token=05ddc97d62301535223cc508d640ff37\" class=\"link\"> Wiadomości zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminReturn&amp;token=cd1b4b8c8b0efb66e3b494e44f9e1b98\" class=\"link\"> Zwroty produktów
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"/admin136tuw7qq/index.php/modules/metrics/legacy/stats?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statystyki
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"140\" id=\"subtab-AdminMetricsLegacyStatsController\">
                              <a href=\"/admin136tuw7qq/index.php/modules/metrics/legacy/stats?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Statystyki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"141\" id=\"subtab-AdminMetricsController\">
                              <a href=\"/admin136tuw7qq/index.php/modules/metrics?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> PrestaShop Metrics
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Ulepszenia</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin136tuw7qq/index.php/improve/modules/manage?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Moduły
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin136tuw7qq/index.php/improve/modules/manage?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/admin136tuw7qq/index.php/modules/addons/modules/catalog?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Katalog
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/admin136tuw7qq/index.php/improve/design/themes/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Wygląd
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/admin136tuw7qq/index.php/improve/design/themes/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Szablony
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"136\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/admin136tuw7qq/index.php/modules/addons/themes/catalog?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Katalog
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/admin136tuw7qq/index.php/improve/design/mail_theme/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Szablon maila
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/admin136tuw7qq/index.php/improve/design/cms-pages/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Strony
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/admin136tuw7qq/index.php/improve/design/modules/positions/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Pozycje
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminImages&amp;token=3b8ffd90725f9464de027f237431dbd4\" class=\"link\"> Zdjęcia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/admin136tuw7qq/index.php/modules/link-widget/list?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCarriers&amp;token=1d0bb7d2e1ae7db4999126820b1d013a\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Wysyłka
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminCarriers&amp;token=1d0bb7d2e1ae7db4999126820b1d013a\" class=\"link\"> Przewoźnicy
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/admin136tuw7qq/index.php/improve/shipping/preferences?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Preferencje
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/admin136tuw7qq/index.php/improve/payment/payment_methods?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Płatność
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/admin136tuw7qq/index.php/improve/payment/payment_methods?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Płatności
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/admin136tuw7qq/index.php/improve/payment/preferences?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Preferencje
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/admin136tuw7qq/index.php/improve/international/localization/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Międzynarodowy
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/admin136tuw7qq/index.php/improve/international/localization/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Lokalizacja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminZones&amp;token=310f286add95fe83621e0766942be6c1\" class=\"link\"> Położenie
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/admin136tuw7qq/index.php/improve/international/taxes/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Podatki
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/admin136tuw7qq/index.php/improve/international/translations/settings?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Tłumaczenia
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Konfiguruj</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin136tuw7qq/index.php/configure/shop/preferences/preferences?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Preferencje
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin136tuw7qq/index.php/configure/shop/preferences/preferences?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Ogólny
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/admin136tuw7qq/index.php/configure/shop/order-preferences/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Zamówienia
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin136tuw7qq/index.php/configure/shop/product-preferences/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Produkty
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin136tuw7qq/index.php/configure/shop/customer-preferences/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Klienci
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/admin136tuw7qq/index.php/configure/shop/contacts/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Kontakt
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/admin136tuw7qq/index.php/configure/shop/seo-urls/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Ruch
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminSearchConf&amp;token=6803190f0ffccdf4d449c6764b3e87b2\" class=\"link\"> Szukaj
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminGamification&amp;token=876d6c9aa42e2c146e1d5f5356bb8590\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin136tuw7qq/index.php/configure/advanced/system-information/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Zaawansowane
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/system-information/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Informacja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/performance/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Wydajność
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/administration/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Administracja
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/emails/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Adres e-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/import/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Importuj
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/employees/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Zespół
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/sql-requests/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Baza danych
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/logs/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> Logi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/admin136tuw7qq/index.php/configure/advanced/webservice-keys/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" class=\"link\"> API
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Uruchomienie sklepu!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Wznów</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Zakończ wprowadzanie</a>
  </div>
</div>

</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Katalog</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin136tuw7qq/index.php/sell/catalog/products?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\" aria-current=\"page\">Produkty</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Produkty          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin136tuw7qq/index.php/sell/catalog/products/new?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\"                  title=\"Utwórz nowy produkt: CTRL+P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Nowy produkt
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin136tuw7qq/index.php/improve/modules/catalog?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\"                title=\"Rekomendowane moduły\"
                              >
                Rekomendowane moduły
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Pomoc\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin136tuw7qq/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpl%252Fdoc%252FAdminProducts%253Fversion%253D1.7.6.5%2526country%253Dpl/Pomoc?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\"
                   id=\"product_form_open_help\"
                >
                  Pomoc
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    <!-- begin /var/www/html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Zalecane moduły i usługi',
        'Close': 'Zamknij',
      },
      recommendedModulesUrl: '/admin136tuw7qq/index.php/modules/addons/modules/recommended?tabClassName=AdminProducts&_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end /var/www/html/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>
      
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Dalej</button>
  <a class=\"onboarding-button-shut-down\">Pomiń ten poradnik</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Zapraszamy do sklepu!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Cze\\u015b\\u0107! Nazywam si\\u0119 Preston i jestem tutaj Twoim przewodnikiem.<\\/p>\\n    <p>Poznasz kilka podstawowych krok\\u00f3w, zanim b\\u0119dzie mo\\u017cna uruchomi\\u0107 sklep:\\n    Utworzysz sw\\u00f3j pierwszy produkt, dostosujesz sw\\u00f3j sklep, skonfigurujesz wysy\\u0142k\\u0119 i p\\u0142atno\\u015bci...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Zaczynajmy!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Po\\u017aniej<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Ropocznij<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/admin136tuw7qq\\/index.php?controller=AdminDashboard&token=a4afe7dceaa5a5bcc34a9ce75eef93d0\"}]},{\"title\":\"Utw\\u00f3rz sw\\u00f3j pierwszy produkt\",\"subtitle\":{\"1\":\"Jak chcesz go opisa\\u0107? Pomy\\u015bl co Twoi klienci chcieliby o nim wiedzie\\u0107.\",\"2\":\"Dodaj jasne i atrakcyjne informacje. Nie martw si\\u0119, mo\\u017cesz je p\\u00f3\\u017aniej edytowa\\u0107 :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Nadaj produktowi chwytliw\\u0105 nazw\\u0119.\",\"options\":[\"savepoint\"],\"page\":[\"\\/admin136tuw7qq\\/index.php\\/sell\\/catalog\\/products\\/new?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\",\"admin136tuw7qq\\/index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Wype\\u0142nij niezb\\u0119dne informacje w tej karcie. Pozosta\\u0142e karty s\\u0105 dla bardziej zaawansowanych informacji.\",\"page\":\"admin136tuw7qq\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Dodaj jedno lub wi\\u0119cej zdj\\u0119\\u0107, dzi\\u0119ki temu produkt wygl\\u0105da kusz\\u0105co!\",\"page\":\"admin136tuw7qq\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Po ile chcesz go sprzedawa\\u0107?\",\"page\":\"admin136tuw7qq\\/index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Hurra! W\\u0142a\\u015bnie zosta\\u0142 utworzony pierwszy produkt. Wygl\\u0105da dobrze, prawda?\",\"page\":\"admin136tuw7qq\\/index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"Daj sklepowi w\\u0142asn\\u0105 to\\u017csamo\\u015b\\u0107\",\"subtitle\":{\"1\":\"Jak ma wygl\\u0105da\\u0107 tw\\u00f3j sklep? Co zrobi\\u0107 aby by\\u0142 wyj\\u0105tkowym?\",\"2\":\"Dostosuj sw\\u00f3j szablon lub wybierz najlepszy projekt z katalogu szablon\\u00f3w.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Dobrym sposobem na rozpocz\\u0119cie jest aby doda\\u0107 tutaj w\\u0142asne logo!\",\"options\":[\"savepoint\"],\"page\":\"\\/admin136tuw7qq\\/index.php\\/improve\\/design\\/themes\\/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\",\"selector\":\"#form_shop_logos_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Je\\u015bli chcesz co\\u015b naprawd\\u0119 specjalnego, obejrzyj ten katalog szablon\\u00f3w!\",\"page\":\"\\/admin136tuw7qq\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Przygotuj sw\\u00f3j sklep do dokonywania p\\u0142atno\\u015bci\",\"subtitle\":{\"1\":\"W jaki spos\\u00f3b klienci maj\\u0105 dokona\\u0107 p\\u0142atno\\u015bci?\",\"2\":\"Dostosuj swoj\\u0105 ofert\\u0119 do rynku: dodaj dla klient\\u00f3w najpopularniejsze metody p\\u0142atno\\u015bci!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Te metody p\\u0142atno\\u015bci s\\u0105 ju\\u017c dost\\u0119pne dla Twoich klient\\u00f3w.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin136tuw7qq\\/index.php\\/improve\\/payment\\/payment_methods?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Tutaj mo\\u017cesz doda\\u0107 wi\\u0119cej sposob\\u00f3w p\\u0142atno\\u015bci!\",\"page\":\"\\/admin136tuw7qq\\/index.php\\/improve\\/payment\\/payment_methods?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1), .card:eq(1) .module-item-list div:eq(0) div:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Wybierz swoje sposoby wysy\\u0142ki\",\"subtitle\":{\"1\":\"Jak chcesz dostarcza\\u0107 swoje produkty?\",\"2\":\"Wybierz rozwi\\u0105zania wysy\\u0142ki najodpowiedniejsze dla klient\\u00f3w! Stw\\u00f3rz swojego w\\u0142asnego przewo\\u017anika lub dodaj gotowy modu\\u0142.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Tutaj s\\u0105 metody wysy\\u0142ki dost\\u0119pne dzi\\u015b w sklepie.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/admin136tuw7qq\\/index.php?controller=AdminCarriers&token=1d0bb7d2e1ae7db4999126820b1d013a\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Mo\\u017cesz zaoferowa\\u0107 wi\\u0119cej opcji dostawy poprzez utworzenie dodatkowych przewo\\u017anik\\u00f3w\",\"page\":\"http:\\/\\/localhost\\/admin136tuw7qq\\/index.php?controller=AdminCarriers&token=1d0bb7d2e1ae7db4999126820b1d013a\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Ulepsz sw\\u00f3j sklep za pomoc\\u0105 modu\\u0142\\u00f3w\",\"subtitle\":{\"1\":\"Dodaj dodatkowe funkcje i zarz\\u0105dzaj istniej\\u0105cymi dzi\\u0119ki modu\\u0142om.\",\"2\":\"Niekt\\u00f3re modu\\u0142y s\\u0105 ju\\u017c wst\\u0119pnie zainstalowane, inne mog\\u0105 by\\u0107 darmowe lub p\\u0142atne - przegl\\u0105daj nasz\\u0105 ofert\\u0119, aby zobaczy\\u0107 co jest dost\\u0119pne!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Sprawd\\u017a nasz wyb\\u00f3r modu\\u0142\\u00f3w w pierwszej karcie. Zarz\\u0105dzaj modu\\u0142ami na drugiej i b\\u0105d\\u017a informowany o aktualizacjach w zak\\u0142adce trzeciej.\",\"options\":[\"savepoint\"],\"page\":\"\\/admin136tuw7qq\\/index.php\\/improve\\/modules\\/catalog?_token=w1LyccfEn_x-_qGUPHmzYachcftzxtoVJUfCBNo7IgQ\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Dodatkowo dla Ciebie!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Widzieli\\u015bcie tylko podstawy, ale jest o wiele wi\\u0119cej do poznania.<br \\/>\\n          Oto zasoby kt\\u00f3re mog\\u0105 pom\\u00f3c wi\\u0119cej:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Poradnik dla pocz\\u0105tkuj\\u0105cych<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum angielskie<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Trening<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Poradnik wideo<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Jestem gotowy<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"admin136tuw7qq\\/index.php\\/improve\\/modules\\/catalog\"}]}]}, 1, \"http://localhost/admin136tuw7qq/index.php?controller=AdminWelcome&token=501b391fb5453d0996941fe4d8908bd9\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Hej! Nie możesz się odnaleźć?</p>    <p>Aby kontynuować, kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Dalej</button>    </div>    <p>Jeśli chcesz zakończyć ten poradnik - kliknij tutaj:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Zamknij powitalny samouczek</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Krok <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Następny</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  {% block content_header %}{% endblock %}
                 {% block content %}{% endblock %}
                 {% block content_footer %}{% endblock %}
                 {% block sidebar_right %}{% endblock %}

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>O nie!</h1>
  <p class=\"mt-3\">
    Wersja mobilna tej strony nie jest jeszcze dostępna.
  </p>
  <p class=\"mt-2\">
    Prosimy korzystać z komputera stacjonarnego, aby uzyskać dostęp do tej strony, dopóki nie zostanie zoptymalizowana pod kątem urządzeń mobilnych.
  </p>
  <p class=\"mt-2\">
    Dziękujemy.
  </p>
  <a href=\"http://localhost/admin136tuw7qq/index.php?controller=AdminDashboard&amp;token=a4afe7dceaa5a5bcc34a9ce75eef93d0\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Wstecz
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PL&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pl/login?email=admin%40admin.pl&amp;firstname=X&amp;lastname=X&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin136tuw7qq/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Połącz swój sklep z rynkiem PrestaShop, żeby automatycznie importować wszystkie zakupione dodatki.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Nie masz konta ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Odkryj siłę PrestaShop Addons! Przeglądaj Oficjalny Rynek PrestaShop i znajdź ponad 3500 innowacyjnych modułów i szablonów, które optymalizują stopnie konwersji, zwiększają ruch, budują lojalność klientów i zwiększają Twoją produktywność</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Połącz się z PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pl/forgot-your-password\">Zapomniałem hasła</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pl/login?email=admin%40admin.pl&amp;firstname=X&amp;lastname=X&amp;website=http%3A%2F%2Flocalhost%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PL&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tUtwórz konto
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Zaloguj się
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>
</html>", "__string_template__ca48ca3c58d05238ab60685ffd401700fa1b43006571b54f89bf7a7aeef232ba", "");
    }
}
