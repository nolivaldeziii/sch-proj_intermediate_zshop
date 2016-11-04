<?php

/* /var/www/next/output/xcart/src/skins/pdf/order/invoice/parts/items/item.price.twig */
class __TwigTemplate_5c81fde8c2c9fa4f58f956aa48ddd59b57e2ffb81d5b58ee802a1d99105f0040 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"price\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatInvoicePrice", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getItemNetPrice", array(), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCurrency", array(), "method"), 2 => 1), "method"), "html", null, true);
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/pdf/order/invoice/parts/items/item.price.twig";
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
/*  # Price item cell*/
/*  #*/
/*  # @ListChild (list="invoice.item", weight="20")*/
/*  #}*/
/* <td class="price">{{ this.formatInvoicePrice(this.item.getItemNetPrice(), this.order.getCurrency(), 1) }}</td>*/
/* */
