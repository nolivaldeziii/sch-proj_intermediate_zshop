<?php

/* /var/www/next/output/xcart/src/skins/pdf/order/invoice/parts/items/item.total.twig */
class __TwigTemplate_f257c5ff01888aeec230e8d0dfba850cff1040535ea1b0fe5c24b0d6ed9a58b3 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"total\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatInvoicePrice", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getDisplayTotal", array(), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCurrency", array(), "method"), 2 => 1), "method"), "html", null, true);
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/pdf/order/invoice/parts/items/item.total.twig";
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
/*  # Total item cell*/
/*  #*/
/*  # @ListChild (list="invoice.item", weight="40")*/
/*  #}*/
/* <td class="total">{{ this.formatInvoicePrice(this.item.getDisplayTotal(), this.order.getCurrency(), 1) }}</td>*/
/* */
