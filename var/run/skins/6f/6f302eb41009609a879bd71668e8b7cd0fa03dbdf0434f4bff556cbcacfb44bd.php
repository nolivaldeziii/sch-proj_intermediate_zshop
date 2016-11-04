<?php

/* header/parts/title.twig */
class __TwigTemplate_e55e5ced9522db10b63abbec3937899f20927d5ae6a8240bdd352895ca84e994 extends \XLite\Core\Templating\Twig\Template
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
        echo "<title>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("X-Cart online store builder")), "html", null, true);
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method")) {
            echo " - ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method"), "html", null, true);
        }
        echo "</title>
";
    }

    public function getTemplateName()
    {
        return "header/parts/title.twig";
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
/*  # Title. Header*/
/*  #*/
/*  # @ListChild (list="head", weight="10")*/
/*  #}*/
/* <title>{{ t('X-Cart online store builder') }}{% if this.getTitle() %} - {{ this.getTitle() }}{% endif %}</title>*/
/* */
