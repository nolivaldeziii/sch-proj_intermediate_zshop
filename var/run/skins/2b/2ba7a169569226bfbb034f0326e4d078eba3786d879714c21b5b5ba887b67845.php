<?php

/* left_menu/node.twig */
class __TwigTemplate_471a3c9965c6d0525dab4f4db9ac29bade5b015daec50690ef97de22d2070782 extends \XLite\Core\Templating\Twig\Template
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
        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLinkTemplate", array(), "method"), "left_menu/node.twig", 6)->display($context);
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
        return "left_menu/node.twig";
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
/*  # Left side menu node*/
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
