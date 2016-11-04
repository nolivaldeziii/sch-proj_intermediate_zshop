<?php

/* search_panel/filters.twig */
class __TwigTemplate_7df47c66010f0199adda6146966f9e7a86b179c7ff8f40d22531fde3c4d1d175 extends \XLite\Core\Templating\Twig\Template
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
<ul class=\"saved-filter-options\">

  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSavedFilterOptions", array(), "method"));
        foreach ($context['_seq'] as $context["fid"] => $context["filter"]) {
            // line 8
            echo "    <li class=\"filter-option filter-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["fid"], "html", null, true);
            echo "\">
      ";
            // line 9
            if ($context["fid"]) {
                // line 10
                echo "        ";
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSelectedFilter", array(0 => $context["fid"]), "method")) {
                    // line 11
                    echo "           <span class=\"filter-title\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["filter"], "getName", array(), "method"), "html", null, true);
                    echo "</span>
        ";
                } else {
                    // line 13
                    echo "           <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTarget", array(), "method"), "search", array("filter_id" => $context["fid"]))), "html", null, true);
                    echo "\" class=\"filter-title\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["filter"], "getName", array(), "method"), "html", null, true);
                    echo "</a>
        ";
                }
                // line 15
                echo "        ";
                if ($this->getAttribute($context["filter"], "getSuffix", array(), "method")) {
                    // line 16
                    echo "          <span class=\"filter-suffix\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["filter"], "getSuffix", array(), "method"), "html", null, true);
                    echo "</span>
        ";
                }
                // line 18
                echo "        ";
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFilterRemovable", array(0 => $context["filter"]), "method")) {
                    // line 19
                    echo "          <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTarget", array(), "method"), "delete_search_filter", array("filter_id" => $context["fid"]))), "html", null, true);
                    echo "\" class=\"delete-filter fa fa-times\" title=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Delete filter option")), "html", null, true);
                    echo "\"></a>
        ";
                }
                // line 21
                echo "      ";
            } else {
                // line 22
                echo "        <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTarget", array(), "method"), "clearSearch")), "html", null, true);
                echo "\" class=\"filter-title first\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["filter"], "getName", array(), "method"), "html", null, true);
                echo "</a>
      ";
            }
            // line 24
            echo "    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fid'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "search_panel/filters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  83 => 24,  75 => 22,  72 => 21,  64 => 19,  61 => 18,  55 => 16,  52 => 15,  44 => 13,  38 => 11,  35 => 10,  33 => 9,  28 => 8,  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Search filters template*/
/*  #}*/
/* */
/* <ul class="saved-filter-options">*/
/* */
/*   {% for fid, filter in this.getSavedFilterOptions() %}*/
/*     <li class="filter-option filter-{{ fid }}">*/
/*       {% if fid %}*/
/*         {% if this.isSelectedFilter(fid) %}*/
/*            <span class="filter-title">{{ filter.getName() }}</span>*/
/*         {% else %}*/
/*            <a href="{{ url(this.getTarget(), 'search', {'filter_id': fid}) }}" class="filter-title">{{ filter.getName() }}</a>*/
/*         {% endif %}*/
/*         {% if filter.getSuffix() %}*/
/*           <span class="filter-suffix">{{ filter.getSuffix() }}</span>*/
/*         {% endif %}*/
/*         {% if this.isFilterRemovable(filter) %}*/
/*           <a href="{{ url(this.getTarget(), 'delete_search_filter', {'filter_id': fid}) }}" class="delete-filter fa fa-times" title="{{ t('Delete filter option') }}"></a>*/
/*         {% endif %}*/
/*       {% else %}*/
/*         <a href="{{ url(this.getTarget(), 'clearSearch') }}" class="filter-title first">{{ filter.getName() }}</a>*/
/*       {% endif %}*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* */
