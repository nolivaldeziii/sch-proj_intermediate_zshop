<?php

/* /var/www/next/output/xcart/src/skins/customer/order/search/parts/summary.twig */
class __TwigTemplate_39e76bb1d4fb27f1f953341a76384dc472da66c2a6061a085fdec7f1b8067548 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTotalCount", array(), "method") != 0)) {
            // line 7
            echo "  <div class=\"order-search-title head-h2\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("X orders", array("count" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTotalCount", array(), "method"))));
            echo "</div>
";
        }
        // line 9
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTotalCount", array(), "method") == 0)) {
            // line 10
            echo "  <div class=\"order-search-title head-h2\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("No orders")), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/search/parts/summary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 10,  27 => 9,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Orders search summary*/
/*  #*/
/*  # @ListChild (list="orders.search.base", weight="10")*/
/*  #}*/
/* {% if this.getTotalCount() != 0 %}*/
/*   <div class="order-search-title head-h2">{{ t('X orders', {'count': this.getTotalCount()})|raw }}</div>*/
/* {% endif %}*/
/* {% if this.getTotalCount() == 0 %}*/
/*   <div class="order-search-title head-h2">{{ t('No orders') }}</div>*/
/* {% endif %}*/
/* */
