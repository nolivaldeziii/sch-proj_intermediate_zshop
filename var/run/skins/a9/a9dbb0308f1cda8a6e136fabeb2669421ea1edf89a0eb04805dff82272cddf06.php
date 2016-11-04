<?php

/* top_links/link.twig */
class __TwigTemplate_b8a475ea2f5d81207227e70a7c1f262ad964969a02d2c6a9dbe34d2d44db32f1 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLink", array(), "method")) {
            // line 6
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLink", array(), "method"), "html", null, true);
            echo "\" class=\"link\"";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBlankPage", array(), "method")) {
                echo " target=\"_blank\"";
            }
            echo ">";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIcon", array(), "method");
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method")) {
                echo "<span>";
                echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method");
                echo "</span>";
            }
            echo "</a>
";
        } else {
            // line 8
            echo "  <span class=\"link\">";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIcon", array(), "method");
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method")) {
                echo "<span>";
                echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method");
                echo "</span>";
            }
            echo "</span>
";
        }
        // line 10
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabel", array(), "method")) {
            // line 11
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabelLink", array(), "method"), "html", null, true);
            echo "\" class=\"label\" title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabelTitle", array(), "method"), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabel", array(), "method");
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "top_links/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  52 => 10,  41 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Left side menu link*/
/*  #}*/
/* */
/* {% if this.getLink() %}*/
/*   <a href="{{ this.getLink() }}" class="link"{% if this.getBlankPage() %} target="_blank"{% endif %}>{{ this.getIcon()|raw }}{% if this.getTitle() %}<span>{{ this.getTitle()|raw }}</span>{% endif %}</a>*/
/* {% else %}*/
/*   <span class="link">{{ this.getIcon()|raw }}{% if this.getTitle() %}<span>{{ this.getTitle()|raw }}</span>{% endif %}</span>*/
/* {% endif %}*/
/* {% if this.getLabel() %}*/
/*   <a href="{{ this.getLabelLink() }}" class="label" title="{{ this.getLabelTitle() }}">{{ this.getLabel()|raw }}</a>*/
/* {% endif %}*/
/* */
