<?php

/* common/price_parts/price.twig */
class __TwigTemplate_b44548608657dd10cc3bc531e945f0de1af08ab687a21e9be0dfedb39696de9e extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<li class=\"product-price-base\"><span class=\"price product-price\">";
        // line 8
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getListPrice", array(), "method"), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "null", array()), 2 => 1), "method");
        echo "</span></li>
";
    }

    public function getTemplateName()
    {
        return "common/price_parts/price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Product price value*/
/*  #*/
/*  # @ListChild (list="product.plain_price", weight="10")*/
/*  # @ListChild (list="product.plain_price_only", weight="10")*/
/*  #}*/
/* */
/* <li class="product-price-base"><span class="price product-price">{{ this.formatPrice(this.getListPrice(), this.null, 1)|raw }}</span></li>*/
/* */
