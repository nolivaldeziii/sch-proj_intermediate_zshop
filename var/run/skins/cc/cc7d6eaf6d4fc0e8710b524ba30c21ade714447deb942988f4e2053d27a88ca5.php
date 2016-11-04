<?php

/* left_menu/marketplace/news.twig */
class __TwigTemplate_30841327b82c2f9052d5101a5e21b965e54236a13f1e58794de6f4f00189c916 extends \XLite\Core\Templating\Twig\Template
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
        ";
            // line 28
            if ($this->getAttribute($context["message"], "link", array())) {
                // line 29
                echo "        <a href=\"";
                echo $this->getAttribute($context["message"], "link", array());
                echo "\" target=\"_blank\">
          <div class=\"message\">
            <img src=\"";
                // line 31
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["message"], "image", array()), "html", null, true);
                echo "\" class=\"addon-icon\" alt=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["message"], "title", array()), "html", null, true);
                echo "\" />
            <span class=\"date\">";
                // line 32
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatDate", array(0 => $this->getAttribute($context["message"], "date", array())), "method"), "html", null, true);
                echo "</span>
            <span class=\"title\">";
                // line 33
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["message"], "title", array()), "html", null, true);
                echo "</span>
          </div>
        </a>
        ";
            } else {
                // line 37
                echo "        <div class=\"message\">
          <img src=\"";
                // line 38
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["message"], "image", array()), "html", null, true);
                echo "\" class=\"addon-icon\" alt=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["message"], "title", array()), "html", null, true);
                echo "\" />
          <span class=\"date\">";
                // line 39
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatDate", array(0 => $this->getAttribute($context["message"], "date", array())), "method"), "html", null, true);
                echo "</span>
          <span class=\"title\">";
                // line 40
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["message"], "title", array()), "html", null, true);
                echo "</span>
        </div>
        ";
            }
            // line 43
            echo "      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  </ul>
</li>
";
    }

    public function getTemplateName()
    {
        return "left_menu/marketplace/news.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 45,  131 => 43,  125 => 40,  121 => 39,  115 => 38,  112 => 37,  105 => 33,  101 => 32,  95 => 31,  89 => 29,  87 => 28,  84 => 27,  80 => 26,  76 => 24,  72 => 22,  66 => 20,  64 => 19,  60 => 18,  56 => 17,  53 => 16,  48 => 13,  42 => 11,  40 => 10,  36 => 9,  32 => 8,  26 => 6,  24 => 5,  19 => 4,);
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
/*         {% if message.link %}*/
/*         <a href="{{ message.link|raw }}" target="_blank">*/
/*           <div class="message">*/
/*             <img src="{{ message.image }}" class="addon-icon" alt="{{ message.title }}" />*/
/*             <span class="date">{{ this.formatDate(message.date) }}</span>*/
/*             <span class="title">{{ message.title }}</span>*/
/*           </div>*/
/*         </a>*/
/*         {% else %}*/
/*         <div class="message">*/
/*           <img src="{{ message.image }}" class="addon-icon" alt="{{ message.title }}" />*/
/*           <span class="date">{{ this.formatDate(message.date) }}</span>*/
/*           <span class="title">{{ message.title }}</span>*/
/*         </div>*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* </li>*/
/* */
