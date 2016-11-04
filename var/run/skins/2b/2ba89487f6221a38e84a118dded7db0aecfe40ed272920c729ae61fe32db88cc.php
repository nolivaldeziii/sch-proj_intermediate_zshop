<?php

/* top_links/version_notes/parts/notice.twig */
class __TwigTemplate_2f21a99ac738dbdd252edd87e5ea09b4c90bd6dfead7fe1f893af00d0c4f2cb3 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"activate-notice\">
  ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\ActivateKey"))), "html", null, true);
        echo "
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isTrialNoticeAutoDisplay", array(), "method")) {
            // line 7
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\TrialNotice"))), "html", null, true);
            echo "
  ";
        }
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "top_links/version_notes/parts/notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  28 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Header notice*/
/*  #}*/
/* <div class="activate-notice">*/
/*   {{ widget('\\XLite\\View\\Button\\ActivateKey') }}*/
/*   {% if this.isTrialNoticeAutoDisplay() %}*/
/*     {{ widget('\\XLite\\View\\Button\\TrialNotice') }}*/
/*   {% endif %}*/
/* </div>*/
/* */
