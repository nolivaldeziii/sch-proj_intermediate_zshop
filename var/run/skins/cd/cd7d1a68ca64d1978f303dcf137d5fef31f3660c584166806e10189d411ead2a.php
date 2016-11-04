<?php

/* layout/content/category_description.twig */
class __TwigTemplate_357e1905328a69a6d7a9075de619dd3d1cb17bd640de780a444a0806b130c754 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDescription", array(), "method")) {
            // line 6
            echo "<div class=\"category-description\">";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDescription", array(), "method");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/content/category_description.twig";
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
/*  # Category page*/
/*  #}*/
/* */
/* {% if this.getDescription() %}*/
/* <div class="category-description">{{ this.getDescription()|raw }}</div>*/
/* {% endif %}*/
/* */
