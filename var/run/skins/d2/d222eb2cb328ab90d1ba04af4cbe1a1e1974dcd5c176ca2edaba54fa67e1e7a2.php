<?php

/* left_menu/body.twig */
class __TwigTemplate_e5b46872a640c730670bcf9a46c5c8cf91cc111da4d7744359b15ec5a7e6ec5f extends \XLite\Core\Templating\Twig\Template
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
<div ";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerTagAttributes", array(), "method")), "method");
        echo ">

  ";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getQuickLinks", array(), "method")) {
            // line 8
            echo "    <ul class=\"quick-links\">
      ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getQuickLinks", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 10
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["link"], "display", array(), "method"), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
  ";
        }
        // line 14
        echo "
  ";
        // line 15
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItems", array(), "method")) {
            // line 16
            echo "    <ul class=\"menu\">
      ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItems", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "display", array(), "method"), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    </ul>
  ";
        }
        // line 22
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "left_menu/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  70 => 20,  61 => 18,  57 => 17,  54 => 16,  52 => 15,  49 => 14,  45 => 12,  36 => 10,  32 => 9,  29 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Left side menu*/
/*  #}*/
/* */
/* <div {{ this.printTagAttributes(this.getContainerTagAttributes())|raw }}>*/
/* */
/*   {% if this.getQuickLinks() %}*/
/*     <ul class="quick-links">*/
/*       {% for link in this.getQuickLinks() %}*/
/*         {{ link.display() }}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* */
/*   {% if this.getItems() %}*/
/*     <ul class="menu">*/
/*       {% for item in this.getItems() %}*/
/*         {{ item.display() }}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
