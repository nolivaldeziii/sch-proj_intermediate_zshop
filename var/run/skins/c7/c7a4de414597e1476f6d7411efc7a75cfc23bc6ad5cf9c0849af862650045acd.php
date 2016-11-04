<?php

/* modules/CDev/Paypal/banner/categoryPages/belowProducts.twig */
class __TwigTemplate_5609eefec4964f3352f165ac058bc46b162035de71fd06c638272c018948e6f8 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Banner", "page" => "categoryPages", "position" => "B"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/banner/categoryPages/belowProducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Paypal Credit banner*/
/*  #*/
/*  # @ListChild (list="center.bottom", weight="99999")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\Module\\CDev\\Paypal\\View\\Banner', page='categoryPages', position='B') }}*/
