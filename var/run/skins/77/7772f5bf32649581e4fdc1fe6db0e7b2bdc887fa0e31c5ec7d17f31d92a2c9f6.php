<?php

/* left_menu/node_notification.twig */
class __TwigTemplate_28caa6a055cc900fa89ce51c3229caae1860113da14dfa7e093181859757c49b extends \XLite\Core\Templating\Twig\Template
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
            echo "    <a href=\"";
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
            echo "      </div>
    </a>
    ";
        } else {
            // line 16
            echo "    <div class=\"notification-header\">
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
            echo "    </div>
  ";
        }
        // line 24
        echo "</li>

";
    }

    public function getTemplateName()
    {
        return "left_menu/node_notification.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  72 => 22,  66 => 20,  64 => 19,  60 => 18,  56 => 17,  53 => 16,  48 => 13,  42 => 11,  40 => 10,  36 => 9,  32 => 8,  26 => 6,  24 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Left side menu info node*/
/*  #}*/
/* <li {{ this.printTagAttributes(this.getNodeTagAttributes())|raw }}>*/
/*   {% if this.getHeaderURL() %}*/
/*     <a href="{{ this.getHeaderURL() }}">*/
/*       <div class="notification-header">*/
/*       {{ this.getIcon()|raw }}*/
/*       <span>{{ this.getHeader() }}</span>*/
/*       {% if this.getCounter() %}*/
/*         <div class="counter">{{ this.getCounter() }}</div>*/
/*       {% endif %}*/
/*       </div>*/
/*     </a>*/
/*     {% else %}*/
/*     <div class="notification-header">*/
/*     {{ this.getIcon()|raw }}*/
/*     <span>{{ this.getHeader() }}</span>*/
/*     {% if this.getCounter() %}*/
/*       <div class="counter">{{ this.getCounter() }}</div>*/
/*     {% endif %}*/
/*     </div>*/
/*   {% endif %}*/
/* </li>*/
/* */
/* */
