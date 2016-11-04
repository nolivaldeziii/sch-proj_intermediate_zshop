<?php

/* order/search.twig */
class __TwigTemplate_053f32ffccd59fc2f9c374624d8164bc5a6f37f1146d6ab30c36341e19304012 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSearchVisible", array(), "method")) {
            // line 5
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\SearchPanel\\Order\\Admin\\Main"))), "html", null, true);
            echo "
";
        }
        // line 7
        echo "
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\ItemsList\\Model\\Order\\Admin\\Search"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "order/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 8,  27 => 7,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Orders search page*/
/*  #}*/
/* {% if this.isSearchVisible() %}*/
/*   {{ widget('XLite\\View\\SearchPanel\\Order\\Admin\\Main') }}*/
/* {% endif %}*/
/* */
/* {{ widget('\\XLite\\View\\ItemsList\\Model\\Order\\Admin\\Search') }}*/
/* */
