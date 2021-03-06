<?php

/* /var/www/next/output/xcart/src/skins/admin/address/order/parts/shipping.twig */
class __TwigTemplate_0c58802894d3376ffb676d1fa28fb6572ed0401115b0fab857a5b358d7580492 extends \XLite\Core\Templating\Twig\Template
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
<div ";
        // line 7
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getShippingContainerAttributes", array(), "method")), "method");
        echo ">
  <h3>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Shipping address")), "html", null, true);
        echo "</h2>
  <div class=\"expander\"><a href=\"#\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Show")), "html", null, true);
        echo "</a></div>
  <div class=\"collapser\"><a href=\"#\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Hide")), "html", null, true);
        echo "</a></div>
  ";
        // line 11
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayAddressButton", array(), "method")) {
            // line 12
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "order", "", array("order_number" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "orderNumber", array()), "atype" => "s", "widget" => "XLite\\View\\SelectAddressOrder"))), "html", null, true);
            echo "\" class=\"btn btn-default address-book\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Address book")), "html", null, true);
            echo "</a>
  ";
        }
        // line 14
        echo "  <div class=\"same-note\">
    <span>";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Order will be delivered to the billing address.")), "html", null, true);
        echo "</span>
    <a href=\"#\">";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Change")), "html", null, true);
        echo "</a>
  </div>
  ";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Model\\Address\\Order", "template" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModelTemplate", array(), "method"), "addressType" => "shipping"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/address/order/parts/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  55 => 16,  51 => 15,  48 => 14,  40 => 12,  38 => 11,  34 => 10,  30 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order address : shipping*/
/*  #*/
/*  # @ListChild (list="address.order.main", weight="300")*/
/*  #}*/
/* */
/* <div {{ this.printTagAttributes(this.getShippingContainerAttributes())|raw }}>*/
/*   <h3>{{ t('Shipping address') }}</h2>*/
/*   <div class="expander"><a href="#">{{ t('Show') }}</a></div>*/
/*   <div class="collapser"><a href="#">{{ t('Hide') }}</a></div>*/
/*   {% if this.isDisplayAddressButton() %}*/
/*     <a href="{{ url('order', '', {'order_number': this.order.orderNumber, 'atype': 's', 'widget': 'XLite\\View\\SelectAddressOrder'}) }}" class="btn btn-default address-book">{{ t('Address book') }}</a>*/
/*   {% endif %}*/
/*   <div class="same-note">*/
/*     <span>{{ t('Order will be delivered to the billing address.') }}</span>*/
/*     <a href="#">{{ t('Change') }}</a>*/
/*   </div>*/
/*   {{ widget('XLite\\View\\Model\\Address\\Order', template=this.getModelTemplate(), addressType='shipping') }}*/
/* </div>*/
/* */
