<?php

/* settings/module.twig */
class __TwigTemplate_72ad91d88c2f19f9434d4ecec09bf838e3a69d1b0a0709f8204eed1ba367f352 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "target", array()) == "module")) {
            // line 7
            echo "  ";
            $this->loadTemplate("settings/base.twig", "settings/module.twig", 7)->display($context);
        }
    }

    public function getTemplateName()
    {
        return "settings/module.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Module-based settings page*/
/*  #*/
/*  # @ListChild (list="admin.center", zone="admin")*/
/*  #}*/
/* {% if this.target == 'module' %}*/
/*   {% include 'settings/base.twig' %}*/
/* {% endif %}*/
/* */
