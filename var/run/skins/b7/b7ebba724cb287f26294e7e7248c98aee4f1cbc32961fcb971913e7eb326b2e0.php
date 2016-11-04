<?php

/* header/parts/parts.css/css.twig */
class __TwigTemplate_7f122ee922c0c5fc485d1ea0ea1ae039b8600052e6d054e58d9b82bf1c3db53e extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "doCSSAggregation", array(), "method")) {
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCSSResources", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 8
                echo "  <link href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getResourceURL", array(0 => $this->getAttribute($context["file"], "url", array())), "method"), "html", null, true);
                echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "media", array()), "html", null, true);
                echo "\" />
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "header/parts/parts.css/css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header part*/
/*  #*/
/*  # @ListChild (list="head.css", weight="100")*/
/*  #}*/
/* {% if not this.doCSSAggregation() %}*/
/* {% for file in this.getCSSResources() %}*/
/*   <link href="{{ this.getResourceURL(file.url) }}" rel="stylesheet" type="text/css" media="{{ file.media }}" />*/
/* {% endfor %}*/
/* {% endif %}*/
/* */
