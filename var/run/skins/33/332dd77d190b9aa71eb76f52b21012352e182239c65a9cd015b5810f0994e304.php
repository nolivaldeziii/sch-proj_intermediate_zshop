<?php

/* main\body.twig */
class __TwigTemplate_f57e6f9188d963923e502622fa40a8cf521d2bef0f5bc524396cb7fba407ccd0 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBoxClass", array(), "method"), "html", null, true);
        echo "\">
  <div class=\"inner-box\">
    ";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRootAccess", array(), "method")) {
            // line 8
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "dashboard-center.welcome"))), "html", null, true);
            echo "
    ";
        }
        // line 10
        echo "    ";
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRootAccess", array(), "method")) {
            // line 11
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "dashboard-center.welcome.non-root"))), "html", null, true);
            echo "
    ";
        }
        // line 13
        echo "  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "main\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 13,  38 => 11,  35 => 10,  29 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Welcome page for logged admin*/
/*  #}*/
/* */
/* <div class="{{ this.getBoxClass() }}">*/
/*   <div class="inner-box">*/
/*     {% if this.isRootAccess() %}*/
/*       {{ widget_list('dashboard-center.welcome') }}*/
/*     {% endif %}*/
/*     {% if not this.isRootAccess() %}*/
/*       {{ widget_list('dashboard-center.welcome.non-root') }}*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* */
/* */
