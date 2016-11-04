<?php

/* /var/www/next/output/xcart/src/skins/customer/order/search/parts/condition.payment_status.twig */
class __TwigTemplate_facadeaebecab02bd92d1e78eb9d5b9d9c5679ab6827359bcf4e1e4c528b7038 extends \XLite\Core\Templating\Twig\Template
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
        echo "<tr class=\"payment-status\">
  <td class=\"title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Payment status")), "html", null, true);
        echo ":</td>
  <td height=\"10\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\OrderStatus\\Payment", "fieldOnly" => "true", "fieldName" => "status", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCondition", array(0 => "paymentStatus"), "method"), "allOption" => "1"))), "html", null, true);
        echo "
  </td>
  <td>&nbsp;</td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/search/parts/condition.payment_status.twig";
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
/*  # @ListChild (list="orders.search.conditions", weight="30")*/
/*  #}*/
/* <tr class="payment-status">*/
/*   <td class="title">{{ t('Payment status') }}:</td>*/
/*   <td height="10">*/
/*     {{ widget('\\XLite\\View\\FormField\\Select\\OrderStatus\\Payment', fieldOnly='true', fieldName='status', value=this.getCondition('paymentStatus'), allOption='1') }}*/
/*   </td>*/
/*   <td>&nbsp;</td>*/
/* </tr>*/
/* */
