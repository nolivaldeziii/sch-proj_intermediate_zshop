<?php

/* order/statistics/informer/parts/week.twig */
class __TwigTemplate_f2ed8aebb899cf5ea7ff77477538321efb9f3b35a86f5a17c5a7edb869e2f564 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"order-statistics ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "class", array()), "html", null, true);
        echo "\">
  <div class=\"revenue\">
    <span class=\"label\">";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Week")), "html", null, true);
        echo ":</span>
    <span class=\"value\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "revenue", array()), "value", array())), "method"), "html", null, true);
        echo "</span>
  </div>
  <div class=\"dynamic-icon ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRevenueClass", array(0 => (isset($context["tab"]) ? $context["tab"] : null)), "method"), "html", null, true);
        echo "\">";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIcon", array(0 => (isset($context["tab"]) ? $context["tab"] : null)), "method");
        echo "</div>
  <div class=\"orders\">
    <span class=\"label\">/</span>
    <span class=\"value\">";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "orders", array()), "value", array()), "html", null, true);
        echo "</span>
  </div>
  ";
        // line 14
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "showPrevious", array(0 => (isset($context["tab"]) ? $context["tab"] : null)), "method")) {
            // line 15
            echo "    <div class=\"previous\">
      <span class=\"label\">";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Last week")), "html", null, true);
            echo "</span>
      <span class=\"value\">";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "revenue", array()), "prev", array())), "method"), "html", null, true);
            echo "</span>
      <span class=\"separator\">/</span>
      <span class=\"value\">";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "orders", array()), "prev", array()), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        // line 22
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "order/statistics/informer/parts/week.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 22,  61 => 19,  56 => 17,  52 => 16,  49 => 15,  47 => 14,  42 => 12,  34 => 9,  29 => 7,  25 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Order summary mini informer (for dashboard)*/
/*  #}*/
/* <div class="order-statistics {{ tab.class }}">*/
/*   <div class="revenue">*/
/*     <span class="label">{{ t('Week') }}:</span>*/
/*     <span class="value">{{ this.formatPrice(tab.revenue.value) }}</span>*/
/*   </div>*/
/*   <div class="dynamic-icon {{ this.getRevenueClass(tab) }}">{{ this.getIcon(tab)|raw }}</div>*/
/*   <div class="orders">*/
/*     <span class="label">/</span>*/
/*     <span class="value">{{ tab.orders.value }}</span>*/
/*   </div>*/
/*   {% if this.showPrevious(tab) %}*/
/*     <div class="previous">*/
/*       <span class="label">{{ t('Last week') }}</span>*/
/*       <span class="value">{{ this.formatPrice(tab.revenue.prev) }}</span>*/
/*       <span class="separator">/</span>*/
/*       <span class="value">{{ tab.orders.prev }}</span>*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
