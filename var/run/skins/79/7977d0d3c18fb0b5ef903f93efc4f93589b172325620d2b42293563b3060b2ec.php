<?php

/* items_list/model/additional_buttons.twig */
class __TwigTemplate_e285622c73c92662f8c3fe8e9b90108466efc6d0907f94b987ef5bc0e77f14a9 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"additional-buttons\">
";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayORLabel", array(), "method")) {
            // line 7
            echo "  <span class=\"or\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("or")), "html", null, true);
            echo "</span>
";
        }
        // line 9
        echo "<div class=\"btn-group dropup\">
<button type=\"button\" class=\"btn regular-button toggle-list-action dropdown-toggle";
        // line 10
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasMoreActionsButtons", array(), "method")) {
            echo " more-actions";
        }
        echo " ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isMoreActionsDisabled", array(), "method")) {
            echo " disabled";
        }
        echo "\" data-toggle=\"dropdown\">
  ";
        // line 11
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMoreActionsText", array(), "method");
        echo "
  <span class=\"caret\"></span>
  <span class=\"sr-only\"></span>
</button>
<ul class=\"dropdown-menu\" role=\"menu\">
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdditionalButtons", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["button"]) {
            // line 17
            echo "  ";
            if ( !$this->getAttribute($context["button"], "isDivider", array(), "method")) {
                // line 18
                echo "    <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSubcellClass", array(0 => $this->getAttribute($context["loop"], "index", array()), 1 => $context["i"], 2 => $context["button"]), "method"), "html", null, true);
                echo "\">";
                echo $this->getAttribute($context["button"], "display", array(), "method");
                echo "</li>
  ";
            }
            // line 20
            echo "  ";
            if ($this->getAttribute($context["button"], "isDivider", array(), "method")) {
                // line 21
                echo "    <li class=\"divider\"></li>
  ";
            }
            // line 23
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</ul>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/additional_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  87 => 23,  83 => 21,  80 => 20,  72 => 18,  69 => 17,  52 => 16,  44 => 11,  34 => 10,  31 => 9,  25 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Additional buttons list*/
/*  #}*/
/* */
/* <div class="additional-buttons">*/
/* {% if this.isDisplayORLabel() %}*/
/*   <span class="or">{{ t('or') }}</span>*/
/* {% endif %}*/
/* <div class="btn-group dropup">*/
/* <button type="button" class="btn regular-button toggle-list-action dropdown-toggle{% if this.hasMoreActionsButtons() %} more-actions{% endif %} {% if this.isMoreActionsDisabled() %} disabled{% endif %}" data-toggle="dropdown">*/
/*   {{ this.getMoreActionsText()|raw }}*/
/*   <span class="caret"></span>*/
/*   <span class="sr-only"></span>*/
/* </button>*/
/* <ul class="dropdown-menu" role="menu">*/
/*   {% for i, button in this.getAdditionalButtons() %}*/
/*   {% if not button.isDivider() %}*/
/*     <li class="{{ this.getSubcellClass(loop.index, i, button) }}">{{ button.display()|raw }}</li>*/
/*   {% endif %}*/
/*   {% if button.isDivider() %}*/
/*     <li class="divider"></li>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* </ul>*/
/* </div>*/
/* </div>*/
/* */
