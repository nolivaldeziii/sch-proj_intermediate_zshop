<?php

/* left_menu/info/body.twig */
class __TwigTemplate_7c6e15e1d567ae5329513b5558b49e1546fbae8b52821494d2e58a17e6133a55 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"arr\"></div>
<div ";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerTagAttributes", array(), "method")), "method");
        echo ">
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItems", array(), "method")) {
            // line 7
            echo "    <ul class=\"menu\">
      ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItems", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "display", array(), "method"), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    </ul>
  ";
        }
        // line 13
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "left_menu/info/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  44 => 11,  35 => 9,  31 => 8,  28 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Left side info menu*/
/*  #}*/
/* <div class="arr"></div>*/
/* <div {{ this.printTagAttributes(this.getContainerTagAttributes())|raw }}>*/
/*   {% if this.getItems() %}*/
/*     <ul class="menu">*/
/*       {% for item in this.getItems() %}*/
/*         {{ item.display() }}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* </div>*/
/* */
