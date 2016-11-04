<?php

/* items_list/model/table/order/cell.shipping_status.twig */
class __TwigTemplate_afbfb3c5b17e79899e359276d29a61d478b35490e22472b8e30672dfd3565fd5 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<span class=\"status-";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "shippingStatus", array()), "code", array()), "html", null, true);
        echo "\"><a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "order", "", array("order_number" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getOrderNumber", array(), "method")))), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "shippingStatus", array()), "name", array()), "html", null, true);
        echo "</a></span>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/order/cell.shipping_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Shipping status cell*/
/*  #}*/
/* */
/* <span class="status-{{ this.entity.shippingStatus.code }}"><a href="{{ url('order', '', {'order_number': this.entity.getOrderNumber()}) }}">{{ this.entity.shippingStatus.name }}</a></span>*/
/* */
