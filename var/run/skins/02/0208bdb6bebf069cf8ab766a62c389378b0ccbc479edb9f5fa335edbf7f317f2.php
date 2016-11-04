<?php

/* header/body.twig */
class __TwigTemplate_86ba7f619f2e8faced35d43f1dcced2e8d54a4d92a5ba49c96101c356fbf23a1 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<head>
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "head"))), "html", null, true);
        echo "
</head>
";
    }

    public function getTemplateName()
    {
        return "header/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Page head*/
/*  #}*/
/* */
/* <head>*/
/*   {{ widget_list('head') }}*/
/* </head>*/
/* */
