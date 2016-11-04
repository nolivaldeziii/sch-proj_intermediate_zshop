<?php

/* /var/www/next/output/xcart/src/skins/customer/order/list/parts/view_all_items_link.twig */
class __TwigTemplate_c358dc43a7f7e42f988b4a3a854832ea6214dee531a0144e7a8b10b10c772f2a extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isMoreLinkVisible", array(), "method")) {
            // line 8
            echo "  <div class=\"view-all-items-link\">
    <a href=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "order", "", array("order_number" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getOrderNumber", array(), "method")))), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("View all ordered items")), "html", null, true);
            echo "</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/list/parts/view_all_items_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Orders list items block*/
/*  #*/
/*  # @ListChild (list="orders.children.view_all_items_link", weight="10")*/
/*  #}*/
/* */
/* {% if this.isMoreLinkVisible() %}*/
/*   <div class="view-all-items-link">*/
/*     <a href="{{ url('order', '', {'order_number': this.order.getOrderNumber()}) }}">{{ t('View all ordered items') }}</a>*/
/*   </div>*/
/* {% endif %}*/
