<?php

/* form_field/select.twig */
class __TwigTemplate_317a7e8137658dbf2544304ce6c878c832232358a8ed091af4597b8d7871a295 extends \XLite\Core\Templating\Twig\Template
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
<select ";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributesCode", array(), "method");
        echo ">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCommentedData", array(), "method")), "method"), "html", null, true);
        echo "
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOptions", array(), "method"));
        foreach ($context['_seq'] as $context["optionValue"] => $context["optionLabel"]) {
            // line 8
            echo "    ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isGroup", array(0 => $context["optionLabel"]), "method")) {
                // line 9
                echo "      <optgroup ";
                echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOptionGroupAttributesCode", array(0 => $context["optionValue"], 1 => $context["optionLabel"]), "method");
                echo ">
        ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["optionLabel"], "options", array()));
                foreach ($context['_seq'] as $context["optionValue2"] => $context["optionLabel2"]) {
                    // line 11
                    echo "          <option ";
                    echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOptionAttributesCode", array(0 => $context["optionValue2"], 1 => $context["optionLabel2"]), "method");
                    echo ">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["optionLabel2"], "html", null, true);
                    echo "</option>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['optionValue2'], $context['optionLabel2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "      </optgroup>
    ";
            } else {
                // line 15
                echo "      <option ";
                echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOptionAttributesCode", array(0 => $context["optionValue"], 1 => $context["optionLabel"]), "method");
                echo ">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["optionLabel"], "html", null, true);
                echo "</option>
    ";
            }
            // line 17
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['optionValue'], $context['optionLabel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "form_field/select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 18,  69 => 17,  61 => 15,  57 => 13,  46 => 11,  42 => 10,  37 => 9,  34 => 8,  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Common selector*/
/*  #}*/
/* */
/* <select {{ this.getAttributesCode()|raw }}>*/
/*   {{ this.displayCommentedData(this.getCommentedData()) }}*/
/*   {% for optionValue, optionLabel in this.getOptions() %}*/
/*     {% if this.isGroup(optionLabel) %}*/
/*       <optgroup {{ this.getOptionGroupAttributesCode(optionValue, optionLabel)|raw }}>*/
/*         {% for optionValue2, optionLabel2 in optionLabel.options %}*/
/*           <option {{ this.getOptionAttributesCode(optionValue2, optionLabel2)|raw }}>{{ optionLabel2 }}</option>*/
/*         {% endfor %}*/
/*       </optgroup>*/
/*     {% else %}*/
/*       <option {{ this.getOptionAttributesCode(optionValue, optionLabel)|raw }}>{{ optionLabel }}</option>*/
/*     {% endif %}*/
/*   {% endfor %}*/
/* </select>*/
/* */
