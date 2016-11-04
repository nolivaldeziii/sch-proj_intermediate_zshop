<?php

/* left_menu/marketplace/modules.twig */
class __TwigTemplate_c4747fbbc6fae64be8a798861366aae6ce2ac28b6a4c18766e35188f430f1baf extends \XLite\Core\Templating\Twig\Template
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
        echo "<li ";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNodeTagAttributes", array(), "method")), "method");
        echo ">
  ";
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHeaderURL", array(), "method")) {
            // line 6
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHeaderURL", array(), "method"), "html", null, true);
            echo "\">
    <div class=\"notification-header\">
      ";
            // line 8
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIcon", array(), "method");
            echo "
      <span>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHeader", array(), "method"), "html", null, true);
            echo "</span>
      ";
            // line 10
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCounter", array(), "method")) {
                // line 11
                echo "        <div class=\"counter\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCounter", array(), "method"), "html", null, true);
                echo "</div>
      ";
            }
            // line 13
            echo "    </div>
  </a>
  ";
        } else {
            // line 16
            echo "  <div class=\"notification-header\">
    ";
            // line 17
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIcon", array(), "method");
            echo "
    <span>";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHeader", array(), "method"), "html", null, true);
            echo "</span>
    ";
            // line 19
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCounter", array(), "method")) {
                // line 20
                echo "      <div class=\"counter\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCounter", array(), "method"), "html", null, true);
                echo "</div>
    ";
            }
            // line 22
            echo "  </div>
  ";
        }
        // line 24
        echo "
  <ul>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMessages", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "      <li>
        <a href=\"";
            // line 28
            echo $this->getAttribute($context["message"], "link", array());
            echo "\"";
            if ($this->getAttribute($context["message"], "external", array())) {
                echo " target=\"_blank\"";
            }
            echo ">
          <div class=\"message\">
            <img src=\"";
            // line 30
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["message"], "image", array()), "html", null, true);
            echo "\" class=\"addon-icon\" alt=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["message"], "title", array()), "html", null, true);
            echo "\" />
            <span class=\"title\">";
            // line 31
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["message"], "title", array()), "html", null, true);
            echo "</span>
            <span class=\"description\">";
            // line 32
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["message"], "description", array()), "html", null, true);
            echo "</span>
          </div>
        </a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "  </ul>
</li>
";
    }

    public function getTemplateName()
    {
        return "left_menu/marketplace/modules.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  106 => 32,  102 => 31,  96 => 30,  87 => 28,  84 => 27,  80 => 26,  76 => 24,  72 => 22,  66 => 20,  64 => 19,  60 => 18,  56 => 17,  53 => 16,  48 => 13,  42 => 11,  40 => 10,  36 => 9,  32 => 8,  26 => 6,  24 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Left side menu info node*/
/*  #}*/
/* <li {{ this.printTagAttributes(this.getNodeTagAttributes())|raw }}>*/
/*   {% if this.getHeaderURL() %}*/
/*   <a href="{{ this.getHeaderURL() }}">*/
/*     <div class="notification-header">*/
/*       {{ this.getIcon()|raw }}*/
/*       <span>{{ this.getHeader() }}</span>*/
/*       {% if this.getCounter() %}*/
/*         <div class="counter">{{ this.getCounter() }}</div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </a>*/
/*   {% else %}*/
/*   <div class="notification-header">*/
/*     {{ this.getIcon()|raw }}*/
/*     <span>{{ this.getHeader() }}</span>*/
/*     {% if this.getCounter() %}*/
/*       <div class="counter">{{ this.getCounter() }}</div>*/
/*     {% endif %}*/
/*   </div>*/
/*   {% endif %}*/
/* */
/*   <ul>*/
/*     {% for message in this.getMessages() %}*/
/*       <li>*/
/*         <a href="{{ message.link|raw }}"{% if message.external %} target="_blank"{% endif %}>*/
/*           <div class="message">*/
/*             <img src="{{ message.image }}" class="addon-icon" alt="{{ message.title }}" />*/
/*             <span class="title">{{ message.title }}</span>*/
/*             <span class="description">{{ message.description }}</span>*/
/*           </div>*/
/*         </a>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* </li>*/
/* */
