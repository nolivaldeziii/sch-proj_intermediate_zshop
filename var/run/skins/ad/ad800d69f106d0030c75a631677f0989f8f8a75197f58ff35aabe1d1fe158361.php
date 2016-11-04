<?php

/* mini_cart/horizontal/parts/link.twig */
class __TwigTemplate_5c03a657fc6b7881a0e646600f6dd0e8b34e835782aa8e51b68bbe5bd28a1664 extends \XLite\Core\Templating\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("_X_ items", array("count" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "countQuantity", array(), "method"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "mini_cart/horizontal/parts/link.twig";
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
/*  # Horizontal minicart link block*/
/*  #*/
/*  # @ListChild (list="minicart.horizontal.children", weight="5")*/
/*  #}*/
/* {{ t('_X_ items', {'count': this.cart.countQuantity()})|raw }}*/
/* */
