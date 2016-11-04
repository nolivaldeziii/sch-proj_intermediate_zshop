<?php

/* search_panel/order/clear_search.twig */
class __TwigTemplate_c2faffeab152eb03b45e869ab1c96dfcf9f901d1aa12491895585e5b0cb5f265 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
<a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "order_list", "clearSearch")), "html", null, true);
        echo "\" class=\"clear-search\">
    <span class=\"clear-search-image\" title=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Clear search")), "html", null, true);
        echo "\">
        ";
        // line 9
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSVGImage", array(0 => "images/broom.svg"), "method");
        echo "
    </span>
</a>

";
    }

    public function getTemplateName()
    {
        return "search_panel/order/clear_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Profile hidden input*/
/*  #*/
/*  # @ListChild (list="searchPanel.order.admin.main.actions")*/
/*  #}*/
/* */
/* <a href="{{ url('order_list', 'clearSearch') }}" class="clear-search">*/
/*     <span class="clear-search-image" title="{{ t('Clear search') }}">*/
/*         {{ this.getSVGImage('images/broom.svg')|raw }}*/
/*     </span>*/
/* </a>*/
/* */
/* */
