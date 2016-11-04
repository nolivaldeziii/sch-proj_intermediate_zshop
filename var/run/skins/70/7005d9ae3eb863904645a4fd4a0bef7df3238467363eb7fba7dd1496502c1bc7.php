<?php

/* main/parts/block.twig */
class __TwigTemplate_1510393dd60c4c3635950ba28e555cb01e89e3d2d3dfea1471994e59c18652a2 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"block-content\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "dashboard-center.welcome.content"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "main/parts/block.twig";
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
/*  # Block content*/
/*  #*/
/*  # @ListChild (list="dashboard-center.welcome", weight="20")*/
/*  #}*/
/* */
/* <div class="block-content">*/
/*   {{ widget_list('dashboard-center.welcome.content') }}*/
/* </div>*/
/* */
