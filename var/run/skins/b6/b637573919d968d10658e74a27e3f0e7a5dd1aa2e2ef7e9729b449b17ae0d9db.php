<?php

/* pager/model/table/parts/search_total.block.twig */
class __TwigTemplate_6c1c90c1ae9235a4742f97e768dc8ce55877fcc1c09856e77347b495134bcadf extends \XLite\Core\Templating\Twig\Template
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
<div class=\"search-total-wrapper\">
  <ul>
    <li>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Search total")), "html", null, true);
        echo ":</li>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSearchTotals", array(), "method"));
        foreach ($context['_seq'] as $context["k"] => $context["totals"]) {
            // line 9
            echo "      <li class=\"amount\">
        <span>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute($context["totals"], "orders_total", array()), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSearchTotalCurrency", array(0 => $this->getAttribute($context["totals"], "currency_id", array())), "method")), "method"), "html", null, true);
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isNeedSearchTotalsSeparator", array(0 => $context["k"]), "method")) {
                echo ", ";
            }
            echo "</span>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['totals'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "pager/model/table/parts/search_total.block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  35 => 10,  32 => 9,  28 => 8,  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Search total block*/
/*  #}*/
/* */
/* <div class="search-total-wrapper">*/
/*   <ul>*/
/*     <li>{{ t('Search total') }}:</li>*/
/*     {% for k, totals in this.getSearchTotals() %}*/
/*       <li class="amount">*/
/*         <span>{{ this.formatPrice(totals.orders_total, this.getSearchTotalCurrency(totals.currency_id)) }}{% if this.isNeedSearchTotalsSeparator(k) %}, {% endif %}</span>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* </div>*/
/* */
