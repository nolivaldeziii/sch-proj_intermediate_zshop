<?php

/* dashboard/parts/body_markup.twig */
class __TwigTemplate_62f480f97175c103dc481368cb119f61a5c764e773e2eafa2fa1b6f38bb4383e extends \XLite\Core\Templating\Twig\Template
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
<div class=\"center-block\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "dashboard-center"))), "html", null, true);
        echo "
</div>

<div class=\"sidebar ";
        // line 11
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAdminWelcomeBlockVisible", array(), "method")) {
            echo "admin-welcome-indent";
        }
        echo "\">
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "dashboard-sidebar"))), "html", null, true);
        echo "
</div>

<div class=\"clear\"></div>

";
    }

    public function getTemplateName()
    {
        return "dashboard/parts/body_markup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  29 => 11,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Dashboard page markup template*/
/*  #*/
/*  # @ListChild (list="dashboard", weight="100")*/
/*  #}*/
/* */
/* <div class="center-block">*/
/*   {{ widget_list('dashboard-center') }}*/
/* </div>*/
/* */
/* <div class="sidebar {% if this.isAdminWelcomeBlockVisible() %}admin-welcome-indent{% endif %}">*/
/*   {{ widget_list('dashboard-sidebar') }}*/
/* </div>*/
/* */
/* <div class="clear"></div>*/
/* */
/* */