<?php

/* items_list/model/table/order/cell.payment_status.twig */
class __TwigTemplate_c9b43bee18e8be9dbe9efb15c646198480303cdf1cd25fb7c23353ec5fd9d719 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "paymentStatus", array()), "code", array()), "html", null, true);
        echo "\"><a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "order", "", array("order_number" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getOrderNumber", array(), "method")))), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "paymentStatus", array()), "name", array()), "html", null, true);
        echo "</a></span>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/order/cell.payment_status.twig";
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
/*  # Payment status cell*/
/*  #}*/
/* */
/* <span class="status-{{ this.entity.paymentStatus.code }}"><a href="{{ url('order', '', {'order_number': this.entity.getOrderNumber()}) }}">{{ this.entity.paymentStatus.name }}</a></span>*/
/* */
