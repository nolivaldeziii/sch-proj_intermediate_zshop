<?php

/* /var/www/next/output/xcart/src/skins/customer/order/list/parts/items.twig */
class __TwigTemplate_cc29b5c5490497b8be198db8975f6492bdd5258ac113d09ed8ee7e37cf506257 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageData", array(), "method")) {
            // line 7
            echo "  <ul class=\"list\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageData", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 9
                echo "      <li class=\"order-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["order"], "order_id", array()), "html", null, true);
                echo "\">
        ";
                // line 10
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\OrderList\\OrderListItem", "order" => $context["order"]))), "html", null, true);
                echo "
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/list/parts/items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  33 => 10,  28 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Orders list items block*/
/*  #*/
/*  # @ListChild (list="orders.children", weight="20")*/
/*  #}*/
/* {% if this.getPageData() %}*/
/*   <ul class="list">*/
/*     {% for order in this.getPageData() %}*/
/*       <li class="order-{{ order.order_id }}">*/
/*         {{ widget('\\XLite\\View\\OrderList\\OrderListItem', order=order) }}*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endif %}*/
/* */
