<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/details/address.twig */
class __TwigTemplate_d65acb4f9e075a8595a5d5ca1df3b7583cc2952320e8ce3333e59ffcbd305b0e extends \XLite\Core\Templating\Twig\Template
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
<div class=\"checkout_fastlane_address\">
  <div class=\"checkout_fastlane_address_wrapper\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\Address\\Shipping"))), "html", null, true);
        echo "
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\Address\\Billing"))), "html", null, true);
        echo "

    <a class=\"checkout_fastlane_address_edit_link\" href=\"#\" v-on:click.prevent=\"switchTo('address')\">";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Edit")), "html", null, true);
        echo "</a>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/details/address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout payment right section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.details", weight="30")*/
/*  #}*/
/* */
/* <div class="checkout_fastlane_address">*/
/*   <div class="checkout_fastlane_address_wrapper">*/
/*     {{ widget('XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\Address\\Shipping') }}*/
/*     {{ widget('XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\Address\\Billing') }}*/
/* */
/*     <a class="checkout_fastlane_address_edit_link" href="#" v-on:click.prevent="switchTo('address')">{{ t('Edit') }}</a>*/
/*   </div>*/
/* </div>*/
/* */
