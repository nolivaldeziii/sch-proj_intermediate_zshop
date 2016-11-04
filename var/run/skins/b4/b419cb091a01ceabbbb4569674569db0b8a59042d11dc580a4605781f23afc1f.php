<?php

/* button/regular.twig */
class __TwigTemplate_19513736af9167c6f397ba2af3a2ec418d584a3cfad5e7ff3aca9b026aa31a91 extends \XLite\Core\Templating\Twig\Template
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
<button ";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributes", array(), "method")), "method");
        echo ">
";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCommentedData", array(), "method")), "method"), "html", null, true);
        echo "
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "icon-style"), "method")) {
            // line 8
            echo "  <i class=\"button-icon ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "icon-style"), "method"), "html", null, true);
            echo "\"></i>
";
        }
        // line 10
        echo "  <span>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonLabel", array(), "method"))), "html", null, true);
        echo "</span>
</button>
";
    }

    public function getTemplateName()
    {
        return "button/regular.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  32 => 8,  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Regular button*/
/*  #}*/
/* */
/* <button {{ this.printTagAttributes(this.getAttributes())|raw }}>*/
/* {{ this.displayCommentedData(this.getCommentedData()) }}*/
/* {% if this.getParam('icon-style') %}*/
/*   <i class="button-icon {{ this.getParam('icon-style') }}"></i>*/
/* {% endif %}*/
/*   <span>{{ t(this.getButtonLabel()) }}</span>*/
/* </button>*/
/* */
