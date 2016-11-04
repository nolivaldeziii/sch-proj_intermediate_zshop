<?php

/* modules/Amazon/PayWithAmazon/checkout_button/mini_cart.twig */
class __TwigTemplate_4600ec6862560580331b9d0eb4e515f8708546afcb6d5890a0402e099c464825 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPayWithAmazonActive", array(), "method")) {
            // line 7
            echo "<div id=\"payWithAmazonDiv_mini_cart_btn\" class=\"pay-with-amazon-button\">
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/Amazon/PayWithAmazon/checkout_button/mini_cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Template*/
/*  #*/
/*  # @ListChild (list="minicart.horizontal.buttons", weight="1000")*/
/*  #}*/
/* {% if this.isPayWithAmazonActive() %}*/
/* <div id="payWithAmazonDiv_mini_cart_btn" class="pay-with-amazon-button">*/
/* </div>*/
/* {% endif %}*/
/* */
