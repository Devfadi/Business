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

/* modules/custom/business_workflow/templates/custom-register-form.html.twig */
class __TwigTemplate_be9016cfade4210a14b656ca31a7055a26372714873cba4273ad0908b4b27c49 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["macro" => 798, "for" => 801];
        $filters = ["escape" => 48, "without" => 795, "keys" => 801];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'for'],
                ['escape', 'without', 'keys'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 22
        echo "
";
        // line 33
        echo "

<!-- Step 1 -->
<div class=\"custom-register registration-from register-step-container\">

\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"register-step\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"featured-imagebox \">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"ttm-box-view-content-inner\">
\t\t\t\t\t\t\t<!-- featured-thumbnail -->
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<img class=\"img-fluid img-cont\" src=\"";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/Group.png\" alt=\"image\"><br>
\t\t\t\t\t\t\t\t<div style=\"margin-left: 20px;\">
\t\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t\t<b>Business Account</b>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>As a business account you’ll get</p><br>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp; &#10004; &nbsp;&nbsp;Account in your business’ name</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp; &#10004;&nbsp;&nbsp;Unlimited company cards for employees</p>
\t\t\t\t\t\t\t\t\t<p>&nbsp; &nbsp;&#10004;&nbsp;&nbsp;Unlimited users and permissions</p>
\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t<p>In the next steps, we’ll ask for information about your company, like business name, address, registration, leadership and ownership.<br>
\t\t\t\t\t\t\t\t\t\tpayouts.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- featured-thumbnail end-->
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- featured-imagebox end-->

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<h1 class=\"heading-register\" style=\" font-size: 30px;\">Let’s create your account</h1>
\t\t\t\t\t<p class=\"text-muted\">Signing up for JazzCash business is fast and free</p>
\t\t\t\t\t<div class=\"h-divider\"></div>
\t\t\t\t\t<p class=\"text-muted\">To begin this journey please tell us what type of account
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tyou’d be opening.</p>

\t\t\t\t\t<div data-target=\"#next\" class=\"registration-link\">
\t\t\t\t\t\t<div class=\"container business-container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12 custom-business\">
\t\t\t\t\t\t\t\t\t<div class=\"card\" style=\"border-radius: 1em; width: 30em; height: 8em; margin-top: 7%;\">
\t\t\t\t\t\t\t\t\t\t<label class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\"><img class=\"img-fluid\" src=\"";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/business.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 style=\"margin-top: -4px; font-size: 18px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Business</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-secondary\" style=\"font-size: 13px;\">Own or belong to a business</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"register-checkbox\"></span>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<br>
\t\t\t\t\t<div data-target=\"https://www.google.com\" class=\"registration-link\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12 custom-business\">
\t\t\t\t\t\t\t\t\t<div class=\"card\" style=\"border-radius: 1em; width: 30em; height: 8em;\">
\t\t\t\t\t\t\t\t\t\t<label class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\"><img class=\"img-fluid\" src=\"";
        // line 115
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/developer.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 style=\"margin-top: -3px; font-size: 18px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Developer</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-secondary\" style=\"font-size: 13px;\">Account to manage all your activities</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 125
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"register-checkbox\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<br>
\t\t\t\t\t<br>
\t\t\t\t\t<div data-target=\"https://www.youtube.com\" class=\"registration-link\">
\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-12 custom-business\">
\t\t\t\t\t\t\t\t\t<div class=\"card\" style=\"border-radius: 1em; width: 30em; height: 8em; \">
\t\t\t\t\t\t\t\t\t\t<label class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-2\"><img class=\"img-fluid\" src=\"";
        // line 144
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/developer.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h1 style=\"margin-top: -4px; font-size: 18px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Don’t have a business yet?</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-secondary\" style=\"font-size: 12px;\">Your company is not yet registered or you want to learn more about JazzCash Business</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\t\t\tclass=\"col-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 154
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"register-checkbox\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<!-- Step 2 -->


\t\t\t<div
\t\t\t\tclass=\"container step-two-regis\"><!-- featured-imagebox end-->

\t\t\t</div>

\t\t\t<div class=\"register-step\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"featured-imagebox \">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"ttm-box-view-content-inner\">
\t\t\t\t\t\t\t<!-- featured-thumbnail -->
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<img class=\"img-fluid img-cont\" src=\"";
        // line 183
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/Group.png\" alt=\"image\"><br>
\t\t\t\t\t\t\t\t<div style=\"margin-left: 20px;\">
\t\t\t\t\t\t\t\t\t<h2>
\t\t\t\t\t\t\t\t\t\t<b>Business Account</b>
\t\t\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t\t\t<p>As a business account you’ll get</p><br>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp; ✔ &nbsp;&nbsp;Account in your business’ name</p>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t&nbsp;&nbsp; ✔&nbsp;&nbsp;Unlimited company cards for employees</p>
\t\t\t\t\t\t\t\t\t<p>&nbsp; &nbsp;✔&nbsp;&nbsp;Unlimited users and permissions</p>
\t\t\t\t\t\t\t\t\t<br>

\t\t\t\t\t\t\t\t\t<p>In the next steps, we’ll ask for information about your company, like business name, address, registration, leadership and ownership.<br>
\t\t\t\t\t\t\t\t\t\tpayouts.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- featured-thumbnail end-->
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"header-title\">
\t\t\t\t\t\t<h1 class=\"wv-heading--title heading-register\" style=\"font-size: 30px; margin-right: 20px;\">
\t\t\t\t\t\t\tLet’s create your account
\t\t\t\t\t\t</h1>
\t\t\t\t\t\t<p>Please enter the details below to complete your signup process</p>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"myform form\" style=\"width: 50%\">
\t\t\t\t\t\t<form action=\"\" method=\"post\" name=\"login\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 219
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_full_name", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t";
        // line 220
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "captcha_response", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 224
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_name_of_business_company", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 228
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_mobile_number", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 232
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["form"] ?? null), "account", [], "array"), "name", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 236
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["form"] ?? null), "account", [], "array"), "mail", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 240
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["form"] ?? null), "account", [], "array"), "pass", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Step 3-->
\t\t\t<div class=\"register-step\">
\t\t\t\t<h1 style=\"font-size: 30px; margin-left: 6%;\">Products to make your life easier</h1>
\t\t\t\t<p style=\"margin-left: 6%;\">Please select the products you would like to purchase</p>

\t\t\t\t<div class=\"container ml-5 container-cus-width\" style=\"margin-top: 70px;\">
\t\t\t\t\t<div class=\"row\" style=\"margin-top: 30px;\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"card card-default\" style=\"width: 20em; border-radius: 1em;\">
\t\t\t\t\t\t\t\t<div class=\"card-body card-7-5\">

\t\t\t\t\t\t\t\t\t<div class=\"card-right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Online Payment Gateway</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 266
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/icon.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class='product-wrapper'>
\t\t\t\t\t\t\t\t\t\t<div class='product-selection'>
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 272
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array"), "#icon", [], "array")), "html", null, true);
        echo "' style=\"boder-radius: 1em;\"/>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn rounded-pill select-product\" style=\"width: 80%; border: 1px solid #393939;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                       box-sizing: border-box; border-radius: 100px; margin-top: 8%; margin-left: 10%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSelect this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 282
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/arrow.png\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class='p-1 product-form'>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 293
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"card card-default\" style=\"width: 20em; border-radius: 1em;\">
\t\t\t\t\t\t\t\t<div class=\"card-body card-7-5\">

\t\t\t\t\t\t\t\t\t<div class=\"card-right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Payroll</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 312
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/icon.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class='product-wrapper'>

\t\t\t\t\t\t\t\t\t\t<div class='product-selection'>
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 319
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array"), "#icon", [], "array")), "html", null, true);
        echo "' style=\"border-radius: 1em;\"/>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn rounded-pill select-product\" style=\"width: 80%; border: 1px solid #393939;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                       box-sizing: border-box; border-radius: 100px; margin-top: 8%; margin-left: 10%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSelect this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 329
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/arrow.png\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class='p-1 product-form'>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 341
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"container ml-5 container-cus-width\" style=\"margin-top: 70px;\">
\t\t\t\t\t<div class=\"row\" style=\"margin-top: 30px;\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"card card-default\" style=\"width: 20em; border-radius: 1em;\">
\t\t\t\t\t\t\t\t<div class=\"card-body card-7-5\">

\t\t\t\t\t\t\t\t\t<div class=\"card-right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>QR Payments</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 366
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/icon.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class='product-wrapper'>
\t\t\t\t\t\t\t\t\t\t<div class='product-selection'>
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 372
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array"), "#icon", [], "array")), "html", null, true);
        echo "' style=\"boder-radius: 1em;\"/>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn rounded-pill select-product\" style=\"width: 80%; border: 1px solid #393939;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                       box-sizing: border-box; border-radius: 100px; margin-top: 8%; margin-left: 10%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSelect this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 382
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/arrow.png\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class='p-1 product-form'>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 393
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"card card-default\" style=\"width: 20em; border-radius: 1em;\">
\t\t\t\t\t\t\t\t<div class=\"card-body card-7-5\">

\t\t\t\t\t\t\t\t\t<div class=\"card-right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Corporate Collections</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 412
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/icon.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class='product-wrapper'>

\t\t\t\t\t\t\t\t\t\t<div class='product-selection'>
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 419
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array"), "#icon", [], "array")), "html", null, true);
        echo "' style=\"border-radius: 1em;\"/>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn rounded-pill select-product\" style=\"width: 80%; border: 1px solid #393939;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                       box-sizing: border-box; border-radius: 100px; margin-top: 8%; margin-left: 10%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSelect this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 429
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/arrow.png\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class='p-1 product-form'>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 441
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>


\t\t\t<!-- Step 4-->

\t\t\t<div class=\"register-step\">
\t\t\t\t<h1 class=\"ml-2\" style=\"font-size: 30px;\">Select the Type of your Company</h1>
\t\t\t\t<p class=\"ml-2\">Click on the card to select your company type</p>

\t\t\t\t<div class=\"container\" style=\"margin-top: 70px;\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t\t<label class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 471
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/company.png\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-3\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 476
        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"company-type-checkbox\" data-value=\"58\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t\t\t";
        // line 481
        echo "\t\t\t\t\t\t\t\t\t\t<h4>Partnerships</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">The partners in a partnership may be individuals, businesses,interest-based organizations, schools, or governments.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<div class=\"card h-100\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t\t<label class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 495
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/company.png\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-3\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 500
        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"company-type-checkbox\" data-value=\"59\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t\t\t<h4>Sole Properitor</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Enterprise owned and run by one person and in which there is no legal distinction between the owner</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<div class=\"card h-100\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t\t<label class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 517
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/company.png\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-3\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 522
        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"company-type-checkbox\" data-value=\"60\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t\t\t<h4>Private & Public Limited Companies</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Interest-based organizations, schools, or governments.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"informations\">
\t\t\t\t\t\t<h1>Enter Details of your Company</h1>
\t\t\t\t\t\t<div class='company-detail'>
\t\t\t\t\t\t\t<ul class='company-detail-sidebar'>
\t\t\t\t\t\t\t\t<li id='business-info' class='company-detail-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div>Business Information</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id='directors-info' class='company-detail-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div>Directors Information</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id='authorise-details' class='company-detail-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div>Authorise Personnel Details</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id='technology-contact' class='company-detail-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div>Technology Person of contact</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id='jazzcash-consumer' class='company-detail-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div>Jazzcash consumer app</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id='settlement-details' class='company-detail-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div>Settlement Details</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id='terms-conditions' class='company-detail-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div>Terms and Conditions</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class='company-detail-body'>
\t\t\t\t\t\t\t\t<div class=\"company-detail-item\">
\t\t\t\t\t\t\t\t\t<div data-item-name=\"business-info\">
\t\t\t\t\t\t\t\t\t\t";
        // line 567
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_business_information", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"company-detail-item\">
\t\t\t\t\t\t\t\t\t<div data-item-name=\"directors-info\">
\t\t\t\t\t\t\t\t\t\t";
        // line 572
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_directors_information", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"company-detail-item\">
\t\t\t\t\t\t\t\t\t<div data-item-name=\"authorise-details\">
\t\t\t\t\t\t\t\t\t\t";
        // line 577
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_authorize_personnel_detail", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"company-detail-item\">
\t\t\t\t\t\t\t\t\t<div data-item-name=\"technology-contact\">
\t\t\t\t\t\t\t\t\t\t";
        // line 582
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_technology_person_of_conta", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"company-detail-item\">
\t\t\t\t\t\t\t\t\t<div data-item-name=\"jazzcash-consumer\">
\t\t\t\t\t\t\t\t\t\t";
        // line 587
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_jazzcash_consumer_app", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"company-detail-item\">
\t\t\t\t\t\t\t\t\t<div data-item-name=\"settlement-details\">
\t\t\t\t\t\t\t\t\t\t";
        // line 592
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_settlement_details", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"company-detail-item\">
\t\t\t\t\t\t\t\t\t<div data-item-name=\"terms-conditions\">
\t\t\t\t\t\t\t\t\t\t<h1>Please read and accept the terms and conditions</h1>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consec tetur adipiscing elit. Nam condimentum tempus diam, ultricies sollicitudin erat facilisis eget. Vestibulum rhoncus dui vel eros laoreet consectetur. Vivamus eget elementum ligula, vitae pharetra quam. Nullam at ligula
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                sed metu. Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Nam condimentum tempus diam, ultricies sollicitudin erat facilisis eget. Vestibulum rhoncus dui vel eros laoreet consectetur. Vivamus eget elementum ligula,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                vitae pharetra quam. Nullam at ligula sed metu Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Nam condimentum tempus diam, ultricies sollicitudin erat facilisis eget. Vestibulum rhoncus dui vel eros laoreet consectetur.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                Vivamus eget elementum ligula, vitae pharetra quam. Nullam at ligula sed metu. Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Nam condimentum tempus diam, ultricies sollicitudin erat facilisis eget. Vestibulum
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                rhoncus dui vel eros laoreet consectetur. Vivamus eget elementum ligula, vitae pharetra quam. Nullam at ligula sed metu
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
        // line 605
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_agreement", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- STEP 5 -->

\t\t\t<div class=\"register-step\">
\t\t\t\t<h1 style=\"font-size: 30px;\">Please Upload the following documents</h1>
\t\t\t\t<p>Upload the certified copies of the following</p>
\t\t\t\t<div class='resolution-board'>
\t\t\t\t\t<ul class='resolution-board-sidebar list-unstyled'>
\t\t\t\t\t\t<div class=\"card mr-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='Resolution' class='resolution-board-sidebar-item list-style-none'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 627
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/one.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>Resolution of Board of Directors
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card mr-2 my-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='Memorandum' class='resolution-board-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 643
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/two.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>Memorandum and Articles of Association</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card mr-2 my-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='Incorporation' class='resolution-board-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 658
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/three.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>Certificate of Incorporation</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card mr-2 my-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='Photocopies' class='resolution-board-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 673
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/four.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>Photocopies of CNIC of all the directors and persons authorized</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card mr-2 my-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='Directors' class='resolution-board-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 688
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/four.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>List of Directors on ‘Form-A/Form-B’</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card mr-2 my-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='Business' class='resolution-board-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 703
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/three.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>Certificate of Commencement of Business</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card mr-2 my-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='NTN' class='resolution-board-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 718
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/four.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>NTN Certificate</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card mr-2 my-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='Branchless' class='resolution-board-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 732
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/two.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>Level 2 Branchless Banking Account Form</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class='resolution-boardl-body'>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"Resolution\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 745
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_resolution_of_board_of_dir", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"Memorandum\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 751
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_memorandum_and_articles_of", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"Incorporation\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 757
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_certificate_of_incorporati", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"Photocopies\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 763
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_photocopies_of_cnic_of_all", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"Directors\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 769
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_list_of_directors_on_form_", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"Business\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 775
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_certificate_of_commencemen", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"NTN\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 781
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_ntn_certificate", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"Branchless\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 787
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_level_2_branchless_banking", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 795
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null)), "field_level_2_branchless_banking", "field_ntn_certificate", "field_certificate_of_commencemen", "field_list_of_directors_on_form_", "field_photocopies_of_cnic_of_all", "field_certificate_of_incorporati", "field_memorandum_and_articles_of", "field_resolution_of_board_of_dir", "field_agreement", "field_settlement_details", "field_technology_person_of_conta", "field_jazzcash_consumer_app", "field_authorize_personnel_detail", "field_directors_information", "field_business_information", "field_company_type", "field_corporate_collections", "field_online_payment_gateway", "field_full_name", "field_name_of_business_company", "field_mobile_number", "email", "password", "account"), "html", null, true);
        // line 797
        echo "
\t\t";
    }

    // line 798
    public function getdumpIt($__params__ = null, $__prefix__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "params" => $__params__,
            "prefix" => $__prefix__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 799
            echo "\t\t\t<details>
\t\t\t\t<summary>";
            // line 800
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (("{{ " . $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null))) . " }}"), "html", null, true);
            echo "</summary>
\t\t\t\t";
            // line 801
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["params"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 802
                echo "\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<b>";
                // line 804
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((("{{ " . $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null))) . "[\"") . $this->sandbox->ensureToStringAllowed($context["n"])) . "\"] }}"), "html", null, true);
                echo "</b>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 808
            echo "\t\t\t</details>
\t\t";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modules/custom/business_workflow/templates/custom-register-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1035 => 808,  1025 => 804,  1021 => 802,  1017 => 801,  1013 => 800,  1010 => 799,  997 => 798,  992 => 797,  990 => 795,  979 => 787,  970 => 781,  961 => 775,  952 => 769,  943 => 763,  934 => 757,  925 => 751,  916 => 745,  900 => 732,  883 => 718,  865 => 703,  847 => 688,  829 => 673,  811 => 658,  793 => 643,  774 => 627,  749 => 605,  733 => 592,  725 => 587,  717 => 582,  709 => 577,  701 => 572,  693 => 567,  646 => 522,  639 => 517,  620 => 500,  613 => 495,  597 => 481,  591 => 476,  584 => 471,  551 => 441,  536 => 429,  523 => 419,  513 => 412,  491 => 393,  477 => 382,  464 => 372,  455 => 366,  427 => 341,  412 => 329,  399 => 319,  389 => 312,  367 => 293,  353 => 282,  340 => 272,  331 => 266,  302 => 240,  295 => 236,  288 => 232,  281 => 228,  274 => 224,  267 => 220,  263 => 219,  224 => 183,  193 => 154,  181 => 144,  160 => 125,  148 => 115,  117 => 87,  75 => 48,  58 => 33,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/business_workflow/templates/custom-register-form.html.twig", "E:\\xampp\\htdocs\\islamabad\\onboarding_18-03_22\\modules\\custom\\business_workflow\\templates\\custom-register-form.html.twig");
    }
}
