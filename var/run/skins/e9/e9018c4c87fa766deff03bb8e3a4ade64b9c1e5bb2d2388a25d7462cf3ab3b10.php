<?php

/* common/dialog.twig */
class __TwigTemplate_cc71e9e3837909f612b16aed8673b9ea379fee07398b995f657833ede7f7843c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "head", array())) {
            // line 6
            echo "  <h2>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "head", array()))), "html", null, true);
            echo "</h2>
";
        }
        // line 8
        echo "
<div class=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDialogCSSClass", array(), "method"), "html", null, true);
        echo "\">
  ";
        // line 10
        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "body", array()), "common/dialog.twig", 10)->display($context);
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "common/dialog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  37 => 10,  33 => 9,  30 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Common dialog*/
/*  #}*/
/* */
/* {% if this.head %}*/
/*   <h2>{{ t(this.head) }}</h2>*/
/* {% endif %}*/
/* */
/* <div class="{{ this.getDialogCSSClass() }}">*/
/*   {% include this.body %}*/
/* </div>*/
/* */
