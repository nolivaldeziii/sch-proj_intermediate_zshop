<?php

/* /var/www/next/output/xcart/src/skins/customer/order/search/parts/condition.shipping_status.twig */
class __TwigTemplate_9b62de2b5c088f3fa7c699fe0e7004eac4ddf6fd2471c09d3848b3a3b3e4a457 extends \XLite\Core\Templating\Twig\Template
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
        echo "<tr class=\"shipping-status\">
  <td class=\"title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Shipping status")), "html", null, true);
        echo ":</td>
  <td height=\"10\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\OrderStatus\\Shipping", "fieldOnly" => "true", "fieldName" => "status", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCondition", array(0 => "shippingStatus"), "method"), "allOption" => "1"))), "html", null, true);
        echo "
  </td>
  <td>&nbsp;</td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/search/parts/condition.shipping_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Orders search condition*/
/*  #*/
/*  # @ListChild (list="orders.search.conditions", weight="35")*/
/*  #}*/
/* <tr class="shipping-status">*/
/*   <td class="title">{{ t('Shipping status') }}:</td>*/
/*   <td height="10">*/
/*     {{ widget('\\XLite\\View\\FormField\\Select\\OrderStatus\\Shipping', fieldOnly='true', fieldName='status', value=this.getCondition('shippingStatus'), allOption='1') }}*/
/*   </td>*/
/*   <td>&nbsp;</td>*/
/* </tr>*/
/* */
