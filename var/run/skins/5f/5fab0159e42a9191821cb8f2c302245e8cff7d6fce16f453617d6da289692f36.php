<?php

/* upgrade/install_updates\body.twig */
class __TwigTemplate_5657bfce5d735a934d3a1acec1e27d16aaa9bb8b2e547295f0cb196a9ef113aa extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections", "type" => "inherited"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "upgrade/install_updates\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Updates*/
/*  #}*/
/* */
/* {{ widget_list('sections', type='inherited') }}*/
/* */
