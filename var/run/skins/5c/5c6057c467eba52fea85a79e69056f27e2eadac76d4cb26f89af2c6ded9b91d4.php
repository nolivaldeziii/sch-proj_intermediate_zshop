<?php

/* header/parts/link_favicon.twig */
class __TwigTemplate_22398c59eadc647b02ca6eaead09e65ce2110e834438a22e8ede18c6ad0e7d4e extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayFavicon", array(), "method")) {
            // line 8
            echo "  <link rel=\"shortcut icon\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFavicon", array(), "method"), "html", null, true);
            echo "\" type=\"image/x-icon\" />
";
        }
    }

    public function getTemplateName()
    {
        return "header/parts/link_favicon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="1000")*/
/*  #}*/
/* */
/* {% if this.displayFavicon() %}*/
/*   <link rel="shortcut icon" href="{{ this.getFavicon() }}" type="image/x-icon" />*/
/* {% endif %}*/
/* */
