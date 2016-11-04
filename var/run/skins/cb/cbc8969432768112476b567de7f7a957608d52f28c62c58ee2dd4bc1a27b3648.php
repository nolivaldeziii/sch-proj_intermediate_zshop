<?php

/* /var/www/next/output/xcart/src/skins/customer/order/search/parts/condition.date.twig */
class __TwigTemplate_519e5a94c7b95ca6d0346b5578ec606d713f793b1be0709ca92b345908fd85c1 extends \XLite\Core\Templating\Twig\Template
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
        echo "<tr class=\"date\">
  <td class=\"title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Date range")), "html", null, true);
        echo ":</td>
  <td>

    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\DatePicker", "field" => "startDate", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCondition", array(0 => "startDate"), "method")))), "html", null, true);
        echo "
    &ndash;
    ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\DatePicker", "field" => "endDate", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCondition", array(0 => "endDate"), "method")))), "html", null, true);
        echo "

    <br />

";
        // line 25
        echo "
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/search/parts/condition.date.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 25,  33 => 12,  28 => 10,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Orders search Order ID condition*/
/*  #*/
/*  # @ListChild (list="orders.search.conditions", weight="20")*/
/*  #}*/
/* <tr class="date">*/
/*   <td class="title">{{ t('Date range') }}:</td>*/
/*   <td>*/
/* */
/*     {{ widget('\\XLite\\View\\DatePicker', field='startDate', value=this.getCondition('startDate')) }}*/
/*     &ndash;*/
/*     {{ widget('\\XLite\\View\\DatePicker', field='endDate', value=this.getCondition('endDate')) }}*/
/* */
/*     <br />*/
/* */
/* {# TODO Restore*/
/* */
/*     <ul class="date-buttons">*/
/*       <li><a href="javascript:void(0);" onclick="javascript:">{t(#This week#)}</a></li>*/
/*       <li><a href="javascript:void(0);" onclick="javascript:">{t(#This month#)}</a></li>*/
/*       <li><a href="javascript:void(0);" onclick="javascript:">{t(#This year#)}</a></li>*/
/*     </ul>*/
/* */
/* #}*/
/* */
/*   </td>*/
/* </tr>*/
/* */
