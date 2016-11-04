<?php

/* top_links/node.twig */
class __TwigTemplate_9e2d88b68c4111906f570e9dca74ec03379ad90675e1fcd56d43afd02fe45613 extends \XLite\Core\Templating\Twig\Template
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
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerTagAttributes", array(), "method")), "method");
        echo ">
  ";
        // line 6
        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLinkTemplate", array(), "method"), "top_links/node.twig", 6)->display($context);
        // line 7
        echo "
  ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasChildren", array(), "method")) {
            // line 9
            echo "    <div class=\"box\">
      <div class=\"arr\"></div>
      <ul>
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getChildren", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 13
                echo "          ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["child"], "display", array(), "method"), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getListName", array(), "method")))), "html", null, true);
            echo "
      </ul>
    </div>
  ";
        }
        // line 19
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "top_links/node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  51 => 15,  42 => 13,  38 => 12,  33 => 9,  31 => 8,  28 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Top links node*/
/*  #}*/
/* */
/* <li {{ this.printTagAttributes(this.getContainerTagAttributes())|raw }}>*/
/*   {% include this.getLinkTemplate() %}*/
/* */
/*   {% if this.hasChildren() %}*/
/*     <div class="box">*/
/*       <div class="arr"></div>*/
/*       <ul>*/
/*         {% for child in this.getChildren() %}*/
/*           {{ child.display() }}*/
/*         {% endfor %}*/
/*         {{ widget_list(this.getListName()) }}*/
/*       </ul>*/
/*     </div>*/
/*   {% endif %}*/
/* </li>*/
/* */
