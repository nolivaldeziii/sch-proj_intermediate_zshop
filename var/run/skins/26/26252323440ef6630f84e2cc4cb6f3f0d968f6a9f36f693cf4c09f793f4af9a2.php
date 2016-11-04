<?php

/* left_menu/info/link.twig */
class __TwigTemplate_a8d32b59150df3212b9ca36a1662e7fce090cc84d52effaaed4f5200931d6eae extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"line\">
  ";
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLink", array(), "method")) {
            // line 6
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLink", array(), "method"), "html", null, true);
            echo "\" class=\"link\"";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTooltip", array(), "method")) {
                echo " title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTooltip", array(), "method"), "html", null, true);
                echo "\"";
            }
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
            echo "    <span class=\"link\"";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTooltip", array(), "method")) {
                echo " title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTooltip", array(), "method"), "html", null, true);
                echo "\"";
            }
            echo ">";
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
        echo "  <span class=\"label\"><span style=\"opacity: 0;\">&nbsp;</span></span>
</div>
";
    }

    public function getTemplateName()
    {
        return "left_menu/info/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  46 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Left side menu info link*/
/*  #}*/
/* <div class="line">*/
/*   {% if this.getLink() %}*/
/*     <a href="{{ this.getLink() }}" class="link"{% if this.getTooltip() %} title="{{ this.getTooltip() }}"{% endif %}{% if this.getBlankPage() %} target="_blank"{% endif %}>{{ this.getIcon()|raw }}{% if this.getTitle() %}<span>{{ this.getTitle()|raw }}</span>{% endif %}</a>*/
/*   {% else %}*/
/*     <span class="link"{% if this.getTooltip() %} title="{{ this.getTooltip() }}"{% endif %}>{{ this.getIcon()|raw }}{% if this.getTitle() %}<span>{{ this.getTitle()|raw }}</span>{% endif %}</span>*/
/*   {% endif %}*/
/*   <span class="label"><span style="opacity: 0;">&nbsp;</span></span>*/
/* </div>*/
/* */
