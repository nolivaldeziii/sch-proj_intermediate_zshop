<?php

/* /var/www/next/output/xcart/src/skins/customer/order/search/parts/condition.button.twig */
class __TwigTemplate_a57e89c2439c796b9a01deeb14dc582912a31e13c8fb37cabf37735e303d89d1 extends \XLite\Core\Templating\Twig\Template
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
        echo "<tr class=\"buttons\">
  <td class=\"clear-all\">

  ";
        // line 12
        echo "
  </td>
  <td class=\"button-cell\">";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => "Apply filters"))), "html", null, true);
        echo "</td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/search/parts/condition.button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 14,  24 => 12,  19 => 6,);
    }
}
/* {##*/
/*  # Orders search buttons*/
/*  #*/
/*  # @ListChild (list="orders.search.conditions", weight="40")*/
/*  #}*/
/* <tr class="buttons">*/
/*   <td class="clear-all">*/
/* */
/*   {# TODO Restore*/
/*   <a href="javascript:void(0);" onclick="javascript:">{t(#Clear all fields#)}</a>*/
/*   #}*/
/* */
/*   </td>*/
/*   <td class="button-cell">{{ widget('\\XLite\\View\\Button\\Submit', label='Apply filters') }}</td>*/
/* </tr>*/
/* */
