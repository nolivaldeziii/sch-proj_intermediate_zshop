<?php

/* upgrade/install_updates/parts/advanced_link.twig */
class __TwigTemplate_9ee626399b02cca18c20116972f654f788b60684ce6e2e95a6cd475a1cd58f46 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAdvancedModeButtonVisible", array(), "method")) {
            // line 8
            echo "  <div class=\"advanced-mode-button\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Link", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdvancedModeButtonLabel", array(), "method"))), "location" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdvancedModeURL", array(), "method"), "style" => "link"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "upgrade/install_updates/parts/advanced_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Advanced mode link*/
/*  #*/
/*  # @ListChild (list="upgrade.install_updates.sections", weight="300")*/
/*  #}*/
/* */
/* {% if this.isAdvancedModeButtonVisible() %}*/
/*   <div class="advanced-mode-button">*/
/*     {{ widget('XLite\\View\\Button\\Link', label=t(this.getAdvancedModeButtonLabel()), location=this.getAdvancedModeURL(), style='link') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
