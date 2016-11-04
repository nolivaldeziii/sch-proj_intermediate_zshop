<?php

/* items_list/model/table/order/cell.orderNumber_with_date.twig */
class __TwigTemplate_d12dcb5ccbfc4f20e9fa0bcd778a8fff168e920ac995564fca742464aa258600 extends \XLite\Core\Templating\Twig\Template
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
        $this->loadTemplate("items_list/model/table/field.twig", "items_list/model/table/order/cell.orderNumber_with_date.twig", 4)->display($context);
        // line 5
        echo "<span class=\"date\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatDate", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getDate", array(), "method")), "method"), "html", null, true);
        echo ".</span>
<span class=\"time\">";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatDayTime", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getDate", array(), "method")), "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/order/cell.orderNumber_with_date.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Date cell*/
/*  #}*/
/* {% include 'items_list/model/table/field.twig' %}*/
/* <span class="date">{{ this.formatDate(this.entity.getDate()) }}.</span>*/
/* <span class="time">{{ this.formatDayTime(this.entity.getDate()) }}</span>*/
/* */
