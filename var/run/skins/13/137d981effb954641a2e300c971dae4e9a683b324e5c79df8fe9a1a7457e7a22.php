<?php

/* header/parts/css.twig */
class __TwigTemplate_f103aac653b4a66324b2e208791a29d8b332d79676db504be055cb989a735376 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "head.css"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "header/parts/css.twig";
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
/*  # Header part*/
/*  #*/
/*  # @ListChild (list="head", weight="90")*/
/*  #}*/
/*  */
/* {{ widget_list('head.css') }}*/
/* */
