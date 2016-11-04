<?php

/* button/save_search_filter.twig */
class __TwigTemplate_6b0dcfca68c2f70b1e6e9b08c30adf28926abcb5f750d340762da2d176888c79 extends \XLite\Core\Templating\Twig\Template
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
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributes", array(), "method")), "method");
        echo ">
  <div class=\"button-label\">";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getButtonLabel", array(), "method"), "html", null, true);
        echo "</div>
  <div class=\"button-action\">
    <input type=\"text\" name=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFilterFieldName", array(), "method"), "html", null, true);
        echo "\" value=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFilterName", array(), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPlaceholder", array(), "method"), "html", null, true);
        echo "\" class=\"form-control\" />
    ";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFilterId", array(), "method")) {
            // line 10
            echo "      <input type=\"hidden\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFilterIdFieldName", array(), "method"), "html", null, true);
            echo "\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFilterId", array(), "method"), "html", null, true);
            echo "\" />
    ";
        }
        // line 12
        echo "    ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Regular", "label" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getActionButtonLabel", array(), "method"), "action" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDefaultAction", array(), "method")))), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "button/save_search_filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  41 => 10,  39 => 9,  31 => 8,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # 'Save search filter' button template*/
/*  #}*/
/* */
/* <div {{ this.printTagAttributes(this.getAttributes())|raw }}>*/
/*   <div class="button-label">{{ this.getButtonLabel() }}</div>*/
/*   <div class="button-action">*/
/*     <input type="text" name="{{ this.getFilterFieldName() }}" value="{{ this.getFilterName() }}" placeholder="{{ this.getPlaceholder() }}" class="form-control" />*/
/*     {% if this.getFilterId() %}*/
/*       <input type="hidden" name="{{ this.getFilterIdFieldName() }}" value="{{ this.getFilterId() }}" />*/
/*     {% endif %}*/
/*     {{ widget('\\XLite\\View\\Button\\Regular', label=this.getActionButtonLabel(), action=this.getDefaultAction()) }}*/
/*   </div>*/
/* </div>*/
/* */
