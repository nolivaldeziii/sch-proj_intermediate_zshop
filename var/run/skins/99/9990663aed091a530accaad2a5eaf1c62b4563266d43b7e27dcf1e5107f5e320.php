<?php

/* mini_cart/horizontal/parts/cart.twig */
class __TwigTemplate_ba4e4c872cb9827e6fca860c3e429ec4e9e56c360fc2ca341dd4f95403e57069 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\SimpleLink", "label" => "View cart", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "cart")), "style" => "regular-button cart"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "mini_cart/horizontal/parts/cart.twig";
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
/*  # Horizontal minicart cart button block*/
/*  #*/
/*  # @ListChild (list="minicart.horizontal.buttons", weight="5")*/
/*  #}*/
/* {{ widget('\\XLite\\View\\Button\\SimpleLink', label='View cart', location=url('cart'), style='regular-button cart') }}*/
/* */
