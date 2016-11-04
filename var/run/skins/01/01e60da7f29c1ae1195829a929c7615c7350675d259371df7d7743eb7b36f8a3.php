<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/address/forms.twig */
class __TwigTemplate_9f657fbf6773753638a656f476abe8552a49f28dcae2207a42578a48d071dcae extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"checkout_fastlane_address_forms\">
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.sections.address.forms"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/address/forms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout address section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.address.left", weight="10")*/
/*  #}*/
/* */
/* <div class="checkout_fastlane_address_forms">*/
/* 	{{ widget_list('checkout_fastlane.sections.address.forms') }}*/
/* </div>*/
/* */
