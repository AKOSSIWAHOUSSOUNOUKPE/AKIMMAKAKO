<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__7397dd7c97211bc95e63e4a488e3a1072a11103db5eda4029b4a247d45e979ab */
class __TwigTemplate_819f6229df4d3ea7b2c7a3b41b3a3684c2d47378a0ad19ef825b1909d37dc7c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Accueil • AKIMMAKAKO</title>

  <script type=\"text/javascript\">
    var help_class_name = 'HOME';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr-fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'TG';
    var _PS_VERSION_ = '8.1.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique.';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '62875bc3286fa660fa214a082f50c2db';
    var currentIndex = 'index.php?controller=HOME';
    var employee_token = '2028397179737d09dba6893b3d1594fc';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin674dldcimkalnq6chmj/index.php/improve/modules/manage?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8';
    var admin_notification_get_link = '/prestashop/admin674dldcimkalnq6chmj/index.php/common/notifications?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin674dldcimkalnq6chmj/index.php/common/notifications/ack?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8'";
        // line 40
        echo ";
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin674dldcimkalnq6chmj/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin674dldcimkalnq6chmj/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin674dldcimkalnq6chmj/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin674dldcimkalnq6chmj/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.f8a9f5f9.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin674dldcimkalnq6chmj\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin674dldcimkalnq6chmj\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\";
var conte";
        // line 70
        echo "xtPsAccounts = {\"currentContext\":{\"type\":1,\"id\":1},\"psxName\":\"ps_edition_basic\",\"psIs17\":true,\"psAccountsVersion\":\"7.0.3\",\"psAccountsIsInstalled\":true,\"psAccountsInstallLink\":null,\"psAccountsIsEnabled\":true,\"psAccountsEnableLink\":\"http:\\/\\/localhost\\/prestashop\\/admin674dldcimkalnq6chmj\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_accounts?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\",\"psAccountsIsUptodate\":true,\"psAccountsUpdateLink\":null,\"user\":{\"uuid\":null,\"email\":null,\"emailIsValidated\":false,\"isSuperAdmin\":true},\"backendUser\":{\"email\":\"aimeehoussounoukpe32@gmail.com\",\"employeeId\":1,\"isSuperAdmin\":true},\"currentShop\":{\"id\":\"1\",\"name\":\"AKIMMAKAKO\",\"domain\":\"localhost\",\"domainSsl\":\"localhost\",\"physicalUri\":\"\\/prestashop\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/localhost\\/prestashop\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAKvZBv9JybF1QdWmy0CB98MF6y8bAMCQjPRqzyVibUMtXETI0t4xt6RG\\r\\nxOEHD\\/BUiud5MV4C4X\\/M7Lvw0eVcy39It1g8mccx1lT\\/OaAeoSEi2nuQWkV6EjTF\\r\\nvA2njxc\\/thqcVnhqCj8yycbacgqvNXWWTig\\/BxLZ5xjRfnGqnAaJAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/localhost\\/prestashop\\/admin674dldcimkalnq6chmj\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=460d892f7990ae05a0d228d92e1bc1a1\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.0\"},\"isShopContext\":true,\"superAdminEmail\":\"aimeehoussounoukpe32@gmail.com\",\"onboardingLink\":\"https:\\/\\/accounts.distribution.prestashop.net?shops=W3siaWQiOiIxIiwibmFtZSI6IkFLSU1NQUtBS08iLCJkb21haW4iOiJsb2NhbGhvc3QiLCJkb21haW5Tc2wiOiJsb2NhbGhvc3QiLCJwaHlzaWNhbFVyaSI6IlwvcHJlc3Rhc2hvcFwvIiwidmlydHVhbFVyaSI6IiIsImZyb250VXJsIjoiaHR0cHM6XC9cL2xvY2FsaG9zdFwvcHJlc3Rhc2hvcFwvIiwidXVpZCI6bnVsbCwicHVibGljS2V5IjoiLS0tLS1CRUdJTiBSU0EgUFVCTElDIEtFWS0tLS0tXHJcbk1JR0pBb0dCQUt2WkJ2OUp5YkYxUWRXbXkwQ0I5OE1GNnk4YkFNQ1FqUFJxenlWaWJVTX";
        echo "RYRVRJMHQ0eHQ2UkdcclxueE9FSERcL0JVaXVkNU1WNEM0WFwvTTdMdncwZVZjeTM5SXQxZzhtY2N4MWxUXC9PYUFlb1NFaTJudVFXa1Y2RWpURlxyXG52QTJuanhjXC90aHFjVm5ocUNqOHl5Y2JhY2dxdk5YV1dUaWdcL0J4TFo1eGpSZm5HcW5BYUpBZ01CQUFFPVxyXG4tLS0tLUVORCBSU0EgUFVCTElDIEtFWS0tLS0tIiwiZW1wbG95ZWVJZCI6IjEiLCJ1c2VyIjp7ImVtYWlsIjpudWxsLCJlbWFpbElzVmFsaWRhdGVkIjpmYWxzZSwidXVpZCI6bnVsbH0sInVybCI6Imh0dHA6XC9cL2xvY2FsaG9zdFwvcHJlc3Rhc2hvcFwvYWRtaW42NzRkbGRjaW1rYWxucTZjaG1qXC9pbmRleC5waHA\\/Y29udHJvbGxlcj1BZG1pbk1vZHVsZXMmY29uZmlndXJlPXBzX2VkaXRpb25fYmFzaWMmc2V0U2hvcENvbnRleHQ9cy0xJnRva2VuPTQ2MGQ4OTJmNzk5MGFlMDVhMGQyMjhkOTJlMWJjMWExIiwiaXNMaW5rZWRWNCI6ZmFsc2UsInVubGlua2VkQXV0byI6ZmFsc2UsIm11bHRpc2hvcCI6ZmFsc2UsIm1vZHVsZU5hbWUiOiJwc19lZGl0aW9uX2Jhc2ljIiwicHNWZXJzaW9uIjoiOC4xLjAifV0=\",\"ssoResendVerificationEmail\":\"https:\\/\\/auth.prestashop.com\\/account\\/send-verification-email\",\"manageAccountLink\":\"https:\\/\\/auth.prestashop.com\\/login?lang=fr\",\"isOnboardedV4\":false,\"shops\":[{\"id\":\"1\",\"name\":\"Default\",\"shops\":[{\"id\":\"1\",\"name\":\"AKIMMAKAKO\",\"domain\":\"localhost\",\"domainSsl\":\"localhost\",\"physicalUri\":\"\\/prestashop\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/localhost\\/prestashop\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAKvZBv9JybF1QdWmy0CB98MF6y8bAMCQjPRqzyVibUMtXETI0t4xt6RG\\r\\nxOEHD\\/BUiud5MV4C4X\\/M7Lvw0eVcy39It1g8mccx1lT\\/OaAeoSEi2nuQWkV6EjTF\\r\\nvA2njxc\\/thqcVnhqCj8yycbacgqvNXWWTig\\/BxLZ5xjRfnGqnAaJAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/localhost\\/prestashop\\/admin674dldcimkalnq6chmj\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=460d892f7990ae05a0d228d92e1bc1a1\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.0\",\"moduleVersion\":\"7.0.3\"}],\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.0\"}],\"adminAjaxLink\":\"http:\\/\\/localhost\\/prestashop\\/admin674dldcimkalnq6chmj\\/index.php?controll";
        echo "er=AdminAjaxPsAccounts&ajax=1&token=692af6db8e0c88a925138a4a53691b63\",\"accountsUiUrl\":\"https:\\/\\/accounts.distribution.prestashop.net\",\"dependencies\":{\"ps_eventbus\":{\"isInstalled\":true,\"installLink\":\"http:\\/\\/localhost\\/prestashop\\/admin674dldcimkalnq6chmj\\/index.php\\/improve\\/modules\\/manage\\/action\\/install\\/ps_eventbus?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\",\"isEnabled\":true,\"enableLink\":\"http:\\/\\/localhost\\/prestashop\\/admin674dldcimkalnq6chmj\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_eventbus?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\"}}};
var currency = {\"iso_code\":\"XOF\",\"sign\":\"CFA\",\"name\":\"Franc CFA (BCEAO)\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"XOF\",\"currencySymbol\":\"CFA\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin674dldcimkalnq6chmj/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\">";
        // line 82
        echo "</script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin674dldcimkalnq6chmj/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.1.0\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin674dldcimkalnq6chmj/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin674dldcimkalnq6chmj/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.11.3\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/admin674dldcimkalnq6chmj\\/index.php?controller=AdminGamification&token=feaae8def28607159d81b218ec7af1cf\";
            var current_id_tab = 134;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin674dldcimkalnq6chmj/index.php/common/notifications?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8',
      CHECKBOX_ORDER: 1,
      CHEC";
        // line 107
        echo "KBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
    <script>
        window.userLocale  = 'fr';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script type=\"module\" src=\"/prestashop/modules/psxdesign/views/js/upgrade-notification.js\"></script>


";
        // line 120
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr home\"
  data-base-url=\"/prestashop/admin674dldcimkalnq6chmj/index.php\"  data-token=\"t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/pseditionbasic/homepage?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\"></a>
      <span id=\"shop_version\">8.1.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php/sell/orders?token=93ad19834ab194ceee2b5b1fc625a8d6\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=6158ef7fa6c4b6ac17b572ca96375f51\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php/improve/modules/manage?token=93ad19834ab194ceee2b5b1fc625a8d6\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=0d3ba6a24ed3d5f43ffa26ed6bf58a46\"
        ";
        // line 155
        echo "         data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php/sell/catalog/products-v2/create?token=93ad19834ab194ceee2b5b1fc625a8d6\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php/sell/catalog/categories/new?token=93ad19834ab194ceee2b5b1fc625a8d6\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"158\"
        data-icon=\"\"
        data-method=\"add\"
        data-url=\"index.php/modules/pseditionbasic/homepage\"
        data-post-link=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminQuickAccesses&token=34a801307fbb0eb2dda6b2bf3433db09\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Bienvenue - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminQuickAccesses&token=34a801307fbb0eb2dda6b2bf3433db09\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminSearch&amp;token=cb4df97";
        // line 193
        echo "19e7420cf4591425c1c5df406\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder";
        // line 210
        echo "=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php/sell/orders?token=93ad19834ab194ceee2b5b1fc625a8d6\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=6158ef7fa6c4b6ac17b572ca96375f51\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php/improve/modules/manage?token=93ad19834ab194ceee2b5b1fc625a8d6\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=0d3ba6a24ed3d5f43ffa26ed6bf58a46\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http:/";
        // line 247
        echo "/localhost/prestashop/admin674dldcimkalnq6chmj/index.php/sell/catalog/products-v2/create?token=93ad19834ab194ceee2b5b1fc625a8d6\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php/sell/catalog/categories/new?token=93ad19834ab194ceee2b5b1fc625a8d6\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"78\"
      data-icon=\"\"
      data-method=\"add\"
      data-url=\"index.php/modules/pseditionbasic/homepage\"
      data-post-link=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminQuickAccesses&token=34a801307fbb0eb2dda6b2bf3433db09\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Bienvenue - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminQuickAccesses&token=34a801307fbb0eb2dda6b2bf3433db09\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Votre boutique est en mode maintenance.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Vos visiteurs et clients ne peuve";
        // line 290
        echo "nt pas accéder à votre boutique lorsque le mode maintenance est activé.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Pour gérer les paramètres de maintenance, rendez-vous sur la page Paramètres de la boutique &amp;gt; Paramètres généraux &amp;gt; Maintenance.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Les administrateurs peuvent accéder au front-office de la boutique sans que leur adresse IP ne soit enregistrée.
            &lt;/p&gt;
                  \"
             href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/shop/maintenance/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
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
              dat";
        // line 331
        echo "a-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
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
              Clients<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=64c1db356695e5860bb45d8ffcd3bb83\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          ";
        // line 379
        echo "</div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
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
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/img/pr/default.jpg\" alt=\"AKOSSIWA\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir AKOSSIWA</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin674dld";
        // line 428
        echo "cimkalnq6chmj/index.php/configure/advanced/employees/1/edit?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminLogin&amp;logout=1&amp;token=f6b06ba66fa959950b105f32eaff8fa1\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/advanced/employees/toggle-navigation?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/pseditionbasic/homepage?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.0</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"134\" id=\"tab-HOME\">
                <span clas";
        // line 470
        echo "s=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"135\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/pseditionbasic/homepage?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Accueil
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminDashboard&amp;token=7b1c0b41f2ecd2d436b0f9cc54fcb91c\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tableau de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
               ";
        // line 507
        echo "     
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/orders/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/orders/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/orders/invoices/?_token=";
        // line 540
        echo "t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/orders/credit-slips/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/orders/delivery-slips/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminCarts&amp;token=64c1db356695e5860bb45d8ffcd3bb83\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                       ";
        // line 572
        echo "               
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/catalog/products?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/catalog/products?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/catalog/categories?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                  ";
        // line 602
        echo "            
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/catalog/monitoring/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminAttributesGroups&amp;token=3f182fe491a8cd5d2e7632f8aa905697\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/catalog/brands/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/attachments/?_token=t2W3KBW4cmbs3vJxYXR7l";
        // line 629
        echo "YhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminCartRules&amp;token=0d3ba6a24ed3d5f43ffa26ed6bf58a46\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/stocks/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/customers/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-ta";
        // line 661
        echo "bs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/customers/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/addresses/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminCustomerThreads&amp;token=8b32309fc8bd6d48f3f193a4eea8ea5f\" class=\"link\">
                      <i class=\"mater";
        // line 690
        echo "ial-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminCustomerThreads&amp;token=8b32309fc8bd6d48f3f193a4eea8ea5f\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/sell/customer-service/order-messages/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminRet";
        // line 719
        echo "urn&amp;token=2aac705c0c90b60ba45935b23e7b0251\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/metrics/legacy/stats?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/metrics/legacy/stats?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Statistiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                            ";
        // line 751
        echo "  <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/metrics?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/mbo/modules/catalog/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                ";
        // line 786
        echo "              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/mbo/modules/catalog/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/improve/modules/manage?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/improve/design/themes?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                ";
        // line 815
        echo "                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/improve/design/themes?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/mbo/themes/catalog/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=ec9c5833e7086422c24884bf1e058576\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" i";
        // line 843
        echo "d=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/improve/design/mail_theme/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/improve/design/cms-pages/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/improve/design/modules/positions/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminImages&amp;token=b9a9201c5b2755cdd5ac11ce5fb3335f\" class=\"link\"> Images
                                </a>
                              </li>

                                                         ";
        // line 872
        echo "                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/link-widget/list?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminCarriers&amp;token=e12158dd58b1b34a1f0438ef90e7461d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminCarriers&amp;token=";
        // line 901
        echo "e12158dd58b1b34a1f0438ef90e7461d\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/improve/shipping/preferences/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/improve/payment/payment_methods?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-su";
        // line 933
        echo "bmenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/improve/payment/payment_methods?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/improve/payment/preferences?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/improve/international/localization/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
           ";
        // line 963
        echo "                                           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/improve/international/localization/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/improve/international/zones/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/improve/international/taxes/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/impro";
        // line 991
        echo "ve/international/translations/settings?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"149\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=b284027bfa7922c7af173a071007a423\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-149\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=b284027bfa7922c7af173a071007a423\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                              ";
        // line 1022
        echo "                              
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminPsfacebookModule&amp;token=327f3d3ad5ab4d73019212788bb6b995\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"136\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/pseditionbasic/settings?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-";
        // line 1059
        echo "ShopParameters\">
                    <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/shop/preferences/preferences?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/shop/preferences/preferences?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/shop/order-preferences/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
   ";
        // line 1088
        echo "                                                         
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/shop/product-preferences/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/shop/customer-preferences/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/shop/contacts/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/shop/seo-urls/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> ";
        // line 1114
        echo "Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminSearchConf&amp;token=9af946aebc3677f9ef31a16e511318c7\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/advanced/system-information/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-lev";
        // line 1146
        echo "eltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/advanced/system-information/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/advanced/performance/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/advanced/administration/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/advanced/emails/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> E-mail
                                </a>
                              </li>

               ";
        // line 1175
        echo "                                                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/advanced/import/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/advanced/employees/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/advanced/sql-requests/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/conf";
        // line 1203
        echo "igure/advanced/logs/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/advanced/webservice-keys/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/advanced/feature-flags/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/configure/advanced/security/?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"link\"> Sécurité
                                </a>
                ";
        // line 1229
        echo "              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"126\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminPsAssistantSettings&amp;token=18a06e8930a68f92b23287824d3d7993\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"154\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/admin674dldcimkalnq6chmj/index.php?controller=AdminKlaviyoPsConfig&amp;token=5cc79993d1c2e426e4e165f69f2a8405\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                ";
        // line 1262
        echo "                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/pseditionbasic/homepage?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" aria-current=\"page\">Bienvenue</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Accueil          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"https://help.prestashop-project.org/fr/doc/HOME?version=8.1.0&amp;country=fr\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"https://help.prestashop-project.org/fr/doc/HOME?version=8.1.0&amp;country=fr\"
            >
              ";
        // line 1330
        echo "Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1349
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"/prestashop/admin674dldcimkalnq6chmj/index.php/modules/pseditionbasic/homepage?_token=t2W3KBW4cmbs3vJxYXR7lYhMBZBdoYSdv4Ugfcrq8L8\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1383
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 120
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1349
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1383
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__7397dd7c97211bc95e63e4a488e3a1072a11103db5eda4029b4a247d45e979ab";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1564 => 1383,  1543 => 1349,  1532 => 120,  1523 => 1383,  1483 => 1349,  1462 => 1330,  1392 => 1262,  1357 => 1229,  1329 => 1203,  1299 => 1175,  1268 => 1146,  1234 => 1114,  1206 => 1088,  1175 => 1059,  1136 => 1022,  1103 => 991,  1073 => 963,  1041 => 933,  1007 => 901,  976 => 872,  945 => 843,  915 => 815,  884 => 786,  847 => 751,  813 => 719,  782 => 690,  751 => 661,  717 => 629,  688 => 602,  656 => 572,  622 => 540,  587 => 507,  548 => 470,  504 => 428,  453 => 379,  403 => 331,  360 => 290,  315 => 247,  276 => 210,  257 => 193,  217 => 155,  177 => 120,  162 => 107,  135 => 82,  119 => 70,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7397dd7c97211bc95e63e4a488e3a1072a11103db5eda4029b4a247d45e979ab", "");
    }
}