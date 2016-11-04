<?php

/* button/print_invoice.twig */
class __TwigTemplate_9388e20d714b9839d953fad601ba75e05ef5a19f756ef71f98190f9f40238f52 extends \XLite\Core\Templating\Twig\Template
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
        echo "<button type=\"button\"";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getClass", array(), "method")) {
            echo " class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getClass", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo ">
  ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getURLParams", array(), "method")), "method"), "html", null, true);
        echo "
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "icon-style"), "method")) {
            // line 7
            echo "    <i class=\"button-icon ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "icon-style"), "method"), "html", null, true);
            echo "\"></i>
  ";
        }
        // line 9
        echo "  <span>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonLabel", array(), "method"))), "html", null, true);
        echo "</span>
</button>
";
    }

    public function getTemplateName()
    {
        return "button/print_invoice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  34 => 7,  32 => 6,  28 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Print invoice button*/
/*  #}*/
/* <button type="button"{% if this.getClass() %} class="{{ this.getClass() }}"{% endif %}>*/
/*   {{ this.displayCommentedData(this.getURLParams()) }}*/
/*   {% if this.getParam('icon-style') %}*/
/*     <i class="button-icon {{ this.getParam('icon-style') }}"></i>*/
/*   {% endif %}*/
/*   <span>{{ t(this.getButtonLabel()) }}</span>*/
/* </button>*/
/* */
