<?php

/* items_list/model/table/order/cell.total-clean.twig */
class __TwigTemplate_f1cfa330f486912e1cb9f77344e771aa55cfbbd185e40e1b85686e4ed5119fd4 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"total\">";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getColumnValue", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "column", array()), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getCurrency", array(), "method")), "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/order/cell.total-clean.twig";
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
/*  # Total cell*/
/*  #}*/
/* */
/* <span class="total">{{ this.formatPrice(this.getColumnValue(this.column, this.entity), this.entity.getCurrency()) }}</span>*/
/* */
