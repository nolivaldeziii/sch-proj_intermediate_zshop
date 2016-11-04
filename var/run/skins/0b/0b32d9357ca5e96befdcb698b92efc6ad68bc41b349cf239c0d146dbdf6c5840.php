<?php

/* /var/www/next/output/xcart/src/skins/customer/order/list/parts/spec.date.twig */
class __TwigTemplate_5c2ddd7a299fdde31bdfded05efb6a794f8c02fc4bb0d4e798f103c17bdbd32f extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"date\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatTime", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "date", array())), "method"), "html", null, true);
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/list/parts/spec.date.twig";
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
/*  # Orders list item : spec : date*/
/*  #*/
/*  # @ListChild (list="orders.children.spec", weight="300")*/
/*  #}*/
/* <li class="date">{{ this.formatTime(this.order.date) }}</li>*/
