<?php

/* form_field/inline/input/text/integer/product_quantity.twig */
class __TwigTemplate_eeecf6f56dc3792726b6c8994ffed414ebc9435456118daa3ad4058b4b9a728c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getInventoryEnabled", array(), "method")) {
            // line 6
            echo "  ";
            $this->loadTemplate("form_field/inline/view.twig", "form_field/inline/input/text/integer/product_quantity.twig", 6)->display($context);
        } else {
            // line 8
            echo "  &infin;
";
        }
    }

    public function getTemplateName()
    {
        return "form_field/inline/input/text/integer/product_quantity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Product quantity*/
/*  #}*/
/* */
/* {% if this.entity.getInventoryEnabled() %}*/
/*   {% include 'form_field/inline/view.twig' %}*/
/* {% else %}*/
/*   &infin;*/
/* {% endif %}*/
/* */
