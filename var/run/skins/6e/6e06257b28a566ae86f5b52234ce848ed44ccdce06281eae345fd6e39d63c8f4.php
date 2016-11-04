<?php

/* product/search/simple-search-parts/simple-box.twig */
class __TwigTemplate_753473a1cf3b16ead4aea80ac91527465a9ab4051aaecd8727324dda4387aab0 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<div class=\"simple-search-box\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.simple-search-form.simple-box.elements"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "product/search/simple-search-parts/simple-box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Simple box part inside the upper form for products search*/
/*  #*/
/*  # @ListChild (list="product.simple-search-form.simple-box", weight="10")*/
/*  #}*/
/* */
/* <div class="simple-search-box">*/
/*   {{ widget_list('product.simple-search-form.simple-box.elements') }}*/
/* </div>*/
/* */
