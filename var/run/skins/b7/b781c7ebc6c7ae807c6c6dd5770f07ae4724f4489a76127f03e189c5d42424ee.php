<?php

/* modules/XC/NextPreviousProduct/items-list/cookie-data.twig */
class __TwigTemplate_b5e3cb6915cc55c46f9ea208382f4aebc446c192e506cdf24d70d5d4d7783fd3 extends \XLite\Core\Templating\Twig\Template
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
        // line 11
        echo "
<div
  style=\"display: none;\"
  class=\"next-previous-cookie-data\"
  data-xc-product-id=\"";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method"), "html", null, true);
        echo "\"
  data-xc-next-previous=\"";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDataString", array(), "method"), "html", null, true);
        echo "\"
  ";
        // line 17
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCookiePath", array(), "method")) {
            echo "data-xc-cookie-path=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCookiePath", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/NextPreviousProduct/items-list/cookie-data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 17,  29 => 16,  25 => 15,  19 => 11,);
    }
}
/* {##*/
/*  # Item name*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info", weight="20")*/
/*  # @ListChild (list="itemsList.product.list.customer.info", weight="20")*/
/*  # @ListChild (list="itemsList.product.small_thumbnails.customer.details", weight="20")*/
/*  # @ListChild (list="itemsList.product.big_thumbnails.customer.info", weight="200")*/
/*  # @ListChild (list="itemsList.product.text_links.customer.info", weight="100")*/
/*  # @ListChild (list="productBlock.info", weight="200")*/
/*  #}*/
/* */
/* <div*/
/*   style="display: none;"*/
/*   class="next-previous-cookie-data"*/
/*   data-xc-product-id="{{ this.product.getProductId() }}"*/
/*   data-xc-next-previous="{{ this.getDataString() }}"*/
/*   {% if this.getCookiePath() %}data-xc-cookie-path="{{ this.getCookiePath() }}"{% endif %}>*/
/* </div>*/
/* */
