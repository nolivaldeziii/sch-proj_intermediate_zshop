<?php

/* mini_cart/horizontal/body.twig */
class __TwigTemplate_35cb03e4034fbf3be0d4c1e9352584cae2b811ffea5702bd98e6bea85ef31b0a extends \XLite\Core\Templating\Twig\Template
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
        echo "<div ";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerAttributes", array(), "method")), "method");
        echo ">

  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "minicart.horizontal.children"))), "html", null, true);
        echo "

</div>

";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "minicart.horizontal.base"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "mini_cart/horizontal/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 10,  25 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Minicart (horizontal)*/
/*  #}*/
/* <div {{ this.printTagAttributes(this.getContainerAttributes())|raw }}>*/
/* */
/*   {{ widget_list('minicart.horizontal.children') }}*/
/* */
/* </div>*/
/* */
/* {{ widget_list('minicart.horizontal.base') }}*/
/* */
