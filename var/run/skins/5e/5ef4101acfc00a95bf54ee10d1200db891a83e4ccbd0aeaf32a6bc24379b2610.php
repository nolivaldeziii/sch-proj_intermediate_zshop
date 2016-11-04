<?php

/* /var/www/next/output/xcart/src/skins/customer/order/list/parts/spec.number.twig */
class __TwigTemplate_bc850c785a983ce3f049bd68ee77f64e2ffdee6f16b9f45ffd1adad19454b5e0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"order-number\"><a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "order", "", array("order_number" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getOrderNumber", array(), "method")))), "html", null, true);
        echo "\">#";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getOrderNumber", array(), "method"), "html", null, true);
        echo "</a></li>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/list/parts/spec.number.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Orders list item : spec : number*/
/*  #*/
/*  # @ListChild (list="orders.children.spec", weight="200")*/
/*  #}*/
/* <li class="order-number"><a href="{{ url('order', '', {'order_number': this.order.getOrderNumber()}) }}">#{{ this.order.getOrderNumber() }}</a></li>*/
