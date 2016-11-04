<?php

/* button/items_export.twig */
class __TwigTemplate_27ef47ab1463df5afa2aeec5e80900c88497bc77e6a5908653ff6adbacf16591 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCommentedData", array(), "method")), "method"), "html", null, true);
        echo "
<div class=\"btn-group dropup items-export\">
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isMultipleOptions", array(), "method")) {
            // line 7
            echo "    <button type=\"button\" class=\"btn regular-button toggle-list-action dropdown-toggle always-enabled\" data-toggle=\"dropdown\">
      <span>";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonLabel", array(), "method"))), "html", null, true);
            echo "</span>
      <span class=\"caret\"></span>
      <span class=\"sr-only\"></span>
    </button>

    ";
            // line 13
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdditionalButtons", array(), "method")) {
                // line 14
                echo "    <ul class=\"dropdown-menu\" role=\"menu\">
      ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdditionalButtons", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 16
                    echo "        <li>";
                    echo $this->getAttribute($context["button"], "display", array(), "method");
                    echo "</li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "    </ul>
    ";
            }
            // line 20
            echo "
  ";
        } else {
            // line 22
            echo "    <button type=\"button\" class=\"btn regular-button always-enabled\">
      <span>";
            // line 23
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonLabel", array(), "method"))), "html", null, true);
            echo "</span>: <span>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFirstProviderLabel", array(), "method"), "html", null, true);
            echo "</span>
    </button>
  ";
        }
        // line 26
        echo "</div>

";
        // line 28
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isMultipleOptions", array(), "method")) {
            // line 29
            echo "<div class='hidden'>
  ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAdditionalButtons", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 31
                echo "  ";
                echo $this->getAttribute($context["button"], "display", array(), "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "button/items_export.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  87 => 31,  83 => 30,  80 => 29,  78 => 28,  74 => 26,  66 => 23,  63 => 22,  59 => 20,  55 => 18,  46 => 16,  42 => 15,  39 => 14,  37 => 13,  29 => 8,  26 => 7,  24 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Dropdown button*/
/*  #}*/
/* {{ this.displayCommentedData(this.getCommentedData()) }}*/
/* <div class="btn-group dropup items-export">*/
/*   {% if this.isMultipleOptions() %}*/
/*     <button type="button" class="btn regular-button toggle-list-action dropdown-toggle always-enabled" data-toggle="dropdown">*/
/*       <span>{{ t(this.getButtonLabel()) }}</span>*/
/*       <span class="caret"></span>*/
/*       <span class="sr-only"></span>*/
/*     </button>*/
/* */
/*     {% if this.getAdditionalButtons() %}*/
/*     <ul class="dropdown-menu" role="menu">*/
/*       {% for button in this.getAdditionalButtons() %}*/
/*         <li>{{ button.display()|raw }}</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*     {% endif %}*/
/* */
/*   {% else %}*/
/*     <button type="button" class="btn regular-button always-enabled">*/
/*       <span>{{ t(this.getButtonLabel()) }}</span>: <span>{{ this.getFirstProviderLabel() }}</span>*/
/*     </button>*/
/*   {% endif %}*/
/* </div>*/
/* */
/* {% if not this.isMultipleOptions() %}*/
/* <div class='hidden'>*/
/*   {% for button in this.getAdditionalButtons() %}*/
/*   {{ button.display()|raw }}*/
/*   {% endfor %}*/
/* </div>*/
/* {% endif %}*/
/* */
