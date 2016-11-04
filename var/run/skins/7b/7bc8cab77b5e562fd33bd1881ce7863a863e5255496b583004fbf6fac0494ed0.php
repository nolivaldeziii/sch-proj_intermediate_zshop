<?php

/* items_list/model/table/field.twig */
class __TwigTemplate_f367aacf59e499cf1b87bba7806ad6a9935d5c0d25debe6295e491dc2c86cfc7 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"plain-value\">
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLink", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "column", array()), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method")) {
            // line 7
            echo "    <span class=\"value\">
      <a
        href=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "buildEntityURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "column", array())), "method"), "html", null, true);
            echo "\"
        ";
            // line 10
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "column", array()), "noWrap", array())) {
                echo " title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getColumnValue", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "column", array()), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method"), "html", null, true);
                echo "\"";
            }
            // line 11
            echo "        class=\"link\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getColumnValue", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "column", array()), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method"), "html", null, true);
            echo "
      </a>
    </span>
  ";
        }
        // line 15
        echo "  ";
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLink", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "column", array()), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method")) {
            // line 16
            echo "    <span class=\"value\">";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getColumnValue", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "column", array()), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method");
            echo "</span>
  ";
        }
        // line 18
        echo "  ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "column", array()), "noWrap", array())) {
            // line 19
            echo "    <img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
            echo "\" class=\"right-fade\" alt=\"\" />
  ";
        }
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  59 => 19,  56 => 18,  50 => 16,  47 => 15,  39 => 11,  33 => 10,  29 => 9,  25 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Common field output*/
/*  #}*/
/* */
/* <div class="plain-value">*/
/*   {% if this.isLink(this.column, this.entity) %}*/
/*     <span class="value">*/
/*       <a*/
/*         href="{{ this.buildEntityURL(this.entity, this.column) }}"*/
/*         {% if this.column.noWrap %} title="{{ this.getColumnValue(this.column, this.entity) }}"{% endif %}*/
/*         class="link">{{ this.getColumnValue(this.column, this.entity) }}*/
/*       </a>*/
/*     </span>*/
/*   {% endif %}*/
/*   {% if not this.isLink(this.column, this.entity) %}*/
/*     <span class="value">{{ this.getColumnValue(this.column, this.entity)|raw }}</span>*/
/*   {% endif %}*/
/*   {% if this.column.noWrap %}*/
/*     <img src="{{ asset('images/spacer.gif') }}" class="right-fade" alt="" />*/
/*   {% endif %}*/
/* </div>*/
/* */
