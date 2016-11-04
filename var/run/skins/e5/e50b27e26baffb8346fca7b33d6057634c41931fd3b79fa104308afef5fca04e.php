<?php

/* left_menu/info/node.twig */
class __TwigTemplate_e78cd25e23d2e934c10eb52edb84c24f1785a3a39b431235b1d2bb6272f69294 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li ";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerTagAttributes", array(), "method")), "method");
        echo ">
  ";
        // line 5
        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLinkTemplate", array(), "method"), "left_menu/info/node.twig", 5)->display($context);
        // line 6
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Menu\\Admin\\LeftMenu\\Info\\LazyLoad"))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "left_menu/info/node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  24 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Left side menu info node*/
/*  #}*/
/* <li {{ this.printTagAttributes(this.getContainerTagAttributes())|raw }}>*/
/*   {% include this.getLinkTemplate() %}*/
/*   {{ widget('XLite\\View\\Menu\\Admin\\LeftMenu\\Info\\LazyLoad') }}*/
/* </li>*/
/* */
