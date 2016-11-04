<?php

/* main_center/page_container_parts/header_parts/logo.twig */
class __TwigTemplate_dde4d021203d1e266f10d61a9aebffc47ed25c000f1b5ddea2895224badfbfe8 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"logo\"><a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context)), "html", null, true);
        echo "\">";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSVGImage", array(0 => "images/logo.svg"), "method");
        echo "</a></div>
";
    }

    public function getTemplateName()
    {
        return "main_center/page_container_parts/header_parts/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Main center part of page*/
/*  #*/
/*  # @ListChild (list="admin.main.page.header", weight="10")*/
/*  #}*/
/* <div class="logo"><a href="{{ url() }}">{{ this.getSVGImage('images/logo.svg')|raw }}</a></div>*/
/* */
