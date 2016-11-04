<?php

/* location/node.twig */
class __TwigTemplate_7272d253d18e5375ed3d5a02d4ba82b2fe51248fc53541d417210de882811453 extends \XLite\Core\Templating\Twig\Template
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
<li ";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getListContainerAttributes", array(), "method")), "method");
        echo ">

  ";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLink", array(), "method")) {
            // line 8
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLink", array(), "method"), "html", null, true);
            echo "\" class=\"location-title\"><span>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
            echo "</span></a>
  ";
        } else {
            // line 10
            echo "    <span class=\"location-text\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"), "html", null, true);
            echo "</span>
  ";
        }
        // line 12
        echo "
  ";
        // line 13
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSubnodes", array(), "method")) {
            // line 14
            echo "    <ul class=\"location-subnodes\">
      ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSubnodes", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
                // line 16
                echo "        <li>
          ";
                // line 17
                if (($this->getAttribute($context["node"], "getName", array(), "method") != $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"))) {
                    // line 18
                    echo "            <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["node"], "getLink", array(), "method"), "html", null, true);
                    echo "\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["node"], "getName", array(), "method"), "html", null, true);
                    echo "</a>
          ";
                }
                // line 20
                echo "          ";
                if (($this->getAttribute($context["node"], "getName", array(), "method") == $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getName", array(), "method"))) {
                    // line 21
                    echo "            <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["node"], "getLink", array(), "method"), "html", null, true);
                    echo "\" class=\"current\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["node"], "getName", array(), "method"), "html", null, true);
                    echo "</a>
          ";
                }
                // line 23
                echo "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "      ";
            if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "moreLinkNeeded", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLink", array(), "method"))) {
                // line 26
                echo "        <li class='more-link'>
            <a href=\"";
                // line 27
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMoreLink", array(), "method"), "html", null, true);
                echo "\" class=\"location-title\"><span>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("More")), "html", null, true);
                echo "...</span></a>
        </li>
      ";
            }
            // line 30
            echo "    </ul>
  ";
        }
        // line 32
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "location/node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 32,  100 => 30,  92 => 27,  89 => 26,  86 => 25,  79 => 23,  71 => 21,  68 => 20,  60 => 18,  58 => 17,  55 => 16,  51 => 15,  48 => 14,  46 => 13,  43 => 12,  37 => 10,  29 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Common node*/
/*  #}*/
/* */
/* <li {{ this.printTagAttributes(this.getListContainerAttributes())|raw }}>*/
/* */
/*   {% if this.getLink() %}*/
/*     <a href="{{ this.getLink() }}" class="location-title"><span>{{ this.getName() }}</span></a>*/
/*   {% else %}*/
/*     <span class="location-text">{{ this.getName() }}</span>*/
/*   {% endif %}*/
/* */
/*   {% if this.getSubnodes() %}*/
/*     <ul class="location-subnodes">*/
/*       {% for node in this.getSubnodes() %}*/
/*         <li>*/
/*           {% if node.getName() != this.getName() %}*/
/*             <a href="{{ node.getLink() }}">{{ node.getName() }}</a>*/
/*           {% endif %}*/
/*           {% if node.getName() == this.getName() %}*/
/*             <a href="{{ node.getLink() }}" class="current">{{ node.getName() }}</a>*/
/*           {% endif %}*/
/*         </li>*/
/*       {% endfor %}*/
/*       {% if this.moreLinkNeeded() and this.getLink() %}*/
/*         <li class='more-link'>*/
/*             <a href="{{ this.getMoreLink() }}" class="location-title"><span>{{ t('More') }}...</span></a>*/
/*         </li>*/
/*       {% endif %}*/
/*     </ul>*/
/*   {% endif %}*/
/* */
/* </li>*/
/* */
