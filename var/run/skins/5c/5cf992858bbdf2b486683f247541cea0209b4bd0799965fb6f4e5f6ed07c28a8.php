<?php

/* left_menu/link.twig */
class __TwigTemplate_a38b3c39f7865ffcf54715141ddfdf9f6416cdca5e59313798a42a62b6efa275 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"line\">
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLink", array(), "method")) {
            // line 7
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
            // line 9
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
        // line 11
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabel", array(), "method")) {
            // line 12
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabelLink", array(), "method"), "html", null, true);
            echo "\" class=\"label\"><span title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabelTitle", array(), "method"), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabel", array(), "method");
            echo "</span></a>
  ";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "left_menu/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  67 => 12,  64 => 11,  47 => 9,  25 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Left side menu link*/
/*  #}*/
/* */
/* <div class="line">*/
/*   {% if this.getLink() %}*/
/*     <a href="{{ this.getLink() }}" class="link"{% if this.getTooltip() %} title="{{ this.getTooltip() }}"{% endif %}{% if this.getBlankPage() %} target="_blank"{% endif %}>{{ this.getIcon()|raw }}{% if this.getTitle() %}<span>{{ this.getTitle()|raw }}</span>{% endif %}</a>*/
/*   {% else %}*/
/*     <span class="link"{% if this.getTooltip() %} title="{{ this.getTooltip() }}"{% endif %}>{{ this.getIcon()|raw }}{% if this.getTitle() %}<span>{{ this.getTitle()|raw }}</span>{% endif %}</span>*/
/*   {% endif %}*/
/*   {% if this.getLabel() %}*/
/*     <a href="{{ this.getLabelLink() }}" class="label"><span title="{{ this.getLabelTitle() }}">{{ this.getLabel()|raw }}</span></a>*/
/*   {% endif %}*/
/* </div>*/
/* */
