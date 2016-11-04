<?php

/* dashboard\body.twig */
class __TwigTemplate_1b3166e05679721d8dc66acaf5de63541f88b46622f7fdec4fdf21f72d5c5600 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"dashboard ";
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAdminWelcomeBlockVisible", array(), "method")) {
            echo "dashboard-visible";
        } else {
            echo "dashboard-invisible";
        }
        echo "\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "dashboard"))), "html", null, true);
        echo "
</div>
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "dashboard.footer"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "dashboard\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  30 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Dashboard page*/
/*  #}*/
/* */
/* <div class="dashboard {% if this.isAdminWelcomeBlockVisible() %}dashboard-visible{% else %}dashboard-invisible{% endif %}">*/
/*   {{ widget_list('dashboard') }}*/
/* </div>*/
/* {{ widget_list('dashboard.footer') }}*/
/* */
