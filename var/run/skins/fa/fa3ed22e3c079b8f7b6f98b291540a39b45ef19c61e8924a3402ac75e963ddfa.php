<?php

/* items_list/model/table/parts/head.cell.twig */
class __TwigTemplate_ca856fd7e1d6bbd1b2a219937efbb2dd0b645f9a905ca4fc93eb18d8a0384748 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "headTemplate", array())) {
            // line 6
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "headTemplate", array()), "column" => (isset($context["column"]) ? $context["column"] : null)))), "html", null, true);
            echo "
";
        } else {
            // line 8
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "sort", array())) {
                // line 9
                echo "  <a
    href=\"";
                // line 10
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTarget", array(), "method"), "", array("sortBy" => $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "sort", array()), "sortOrder" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortDirectionNext", array(0 => (isset($context["column"]) ? $context["column"] : null)), "method")))), "html", null, true);
                echo "\"
    data-sort=\"";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "sort", array()), "html", null, true);
                echo "\"
    data-direction=\"";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortOrder", array(), "method"), "html", null, true);
                echo "\"
    class=\"";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortLinkClass", array(0 => (isset($context["column"]) ? $context["column"] : null)), "method"), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "name", array()), "html", null, true);
                echo "</a>
  ";
                // line 14
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isColumnSorted", array(0 => (isset($context["column"]) ? $context["column"] : null)), "method")) {
                    // line 15
                    echo "  ";
                    if (("desc" == $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortOrder", array(), "method"))) {
                        // line 16
                        echo "    <span class=\"dir desc-order\">&uarr;</span>
  ";
                    }
                    // line 18
                    echo "  ";
                    if (("asc" == $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortOrder", array(), "method"))) {
                        // line 19
                        echo "    <span class=\"dir asc-order\">&darr;</span>
  ";
                    }
                    // line 21
                    echo "  ";
                }
            } else {
                // line 23
                echo "  ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "name", array()), "html", null, true);
                echo "
";
            }
            // line 25
            echo "  ";
            if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "headHelp", array())) {
                // line 26
                echo "    <div class=\"column-header-help\">
      ";
                // line 27
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Tooltip", "id" => "menu-links-help-text", "text" => $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "headHelp", array()), "isImageTag" => "true", "className" => "help-small-icon"))), "html", null, true);
                echo "
    </div>
  ";
            }
        }
        // line 31
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "subheader", array())) {
            // line 32
            echo "  <div class=\"subheader\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "subheader", array()), "html", null, true);
            echo "</div>
";
        }
        // line 34
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCellListNamePart", array(0 => "head", 1 => (isset($context["column"]) ? $context["column"] : null)), "method"), "type" => "inherited", "column" => (isset($context["column"]) ? $context["column"] : null)))), "html", null, true);
        echo "
";
        // line 35
        if ($this->getAttribute((isset($context["column"]) ? $context["column"] : null), "columnSelector", array())) {
            // line 36
            echo "  <input type=\"checkbox\" class=\"selectAll not-significant\" />
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/model/table/parts/head.cell.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  104 => 35,  100 => 34,  94 => 32,  92 => 31,  85 => 27,  82 => 26,  79 => 25,  73 => 23,  69 => 21,  65 => 19,  62 => 18,  58 => 16,  55 => 15,  53 => 14,  47 => 13,  43 => 12,  39 => 11,  35 => 10,  32 => 9,  30 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Head cell*/
/*  #}*/
/* */
/* {% if column.headTemplate %}*/
/*   {{ widget(template=column.headTemplate, column=column) }}*/
/* {% else %}*/
/* {% if column.sort %}*/
/*   <a*/
/*     href="{{ url(this.getTarget(), '', {'sortBy': column.sort, 'sortOrder': this.getSortDirectionNext(column)}) }}"*/
/*     data-sort="{{ column.sort }}"*/
/*     data-direction="{{ this.getSortOrder() }}"*/
/*     class="{{ this.getSortLinkClass(column) }}">{{ column.name }}</a>*/
/*   {% if this.isColumnSorted(column) %}*/
/*   {% if 'desc' == this.getSortOrder() %}*/
/*     <span class="dir desc-order">&uarr;</span>*/
/*   {% endif %}*/
/*   {% if 'asc' == this.getSortOrder() %}*/
/*     <span class="dir asc-order">&darr;</span>*/
/*   {% endif %}*/
/*   {% endif %}*/
/* {% else %}*/
/*   {{ column.name }}*/
/* {% endif %}*/
/*   {% if column.headHelp %}*/
/*     <div class="column-header-help">*/
/*       {{ widget('\\XLite\\View\\Tooltip', id='menu-links-help-text', text=column.headHelp, isImageTag='true', className='help-small-icon') }}*/
/*     </div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* {% if column.subheader %}*/
/*   <div class="subheader">{{ column.subheader }}</div>*/
/* {% endif %}*/
/* {{ widget_list(this.getCellListNamePart('head', column), type='inherited', column=column) }}*/
/* {% if column.columnSelector %}*/
/*   <input type="checkbox" class="selectAll not-significant" />*/
/* {% endif %}*/
/* */
