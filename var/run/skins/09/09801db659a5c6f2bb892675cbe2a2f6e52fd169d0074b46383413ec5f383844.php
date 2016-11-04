<?php

/* items_list/model/table/parts/remove.twig */
class __TwigTemplate_31a3a80c03b7ef77180155d140126095bc2b6d7cc57dd307b6666aa4cd92f4c2 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowEntityRemove", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method")) {
            // line 6
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Remove", "buttonName" => ((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRemoveDataPrefix", array(), "method") . "[") . $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getUniqueIdentifier", array(), "method")) . "]")))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/model/table/parts/remove.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Remove entity*/
/*  #}*/
/* */
/* {% if this.isAllowEntityRemove(this.entity) %}*/
/*   {{ widget('XLite\\View\\Button\\Remove', buttonName=this.getRemoveDataPrefix() ~ '[' ~ this.entity.getUniqueIdentifier() ~ ']') }}*/
/* {% endif %}*/
/* */
