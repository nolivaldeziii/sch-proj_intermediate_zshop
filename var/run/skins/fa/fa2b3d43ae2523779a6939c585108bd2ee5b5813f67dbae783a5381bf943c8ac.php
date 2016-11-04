<?php

/* layout/header/header.right.twig */
class __TwigTemplate_d63d7a4544d1e1cbe3d21e6dd64488083f93f475fd61e0147bba4223323653ac extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"header\" class=\"header-right-bar\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.right", "displayMode" => "horizontal"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/header/header.right.twig";
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
/*  # Header right box*/
/*  #*/
/*  # @ListChild (list="layout.header", weight="200")*/
/*  #}*/
/* <div id="header" class="header-right-bar">*/
/*   {{ widget_list('layout.header.right', displayMode='horizontal') }}*/
/* </div>*/
/* */
