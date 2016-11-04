<?php

/* items_list/model/table/order/cell.date.twig */
class __TwigTemplate_59edfd64ed5c56a3c4c0dd0ee0e2a015eefb4746b8e0bb0972386946b78e8471 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"date\">";
        // line 5
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
        return "items_list/model/table/order/cell.date.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Date cell*/
/*  #}*/
/* */
/* <span class="date">{{ this.formatDate(this.entity.getDate()) }}.</span>*/
/* <span class="time">{{ this.formatDayTime(this.entity.getDate()) }}</span>*/
/* */
