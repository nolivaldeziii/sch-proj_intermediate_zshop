<?php

/* order/statistics/informer/parts/lifetime.twig */
class __TwigTemplate_7739069e2a683311593a36c8dcab3960d6d0fb7debd675d638f05b2d9368e146 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Lifetime")), "html", null, true);
        echo ":</span>
    <span class=\"value\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute($this->getAttribute((isset($context["tab"]) ? $context["tab"] : null), "revenue", array()), "value", array())), "method"), "html", null, true);
        echo "</span>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "order/statistics/informer/parts/lifetime.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 7,  25 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Order summary mini informer (for dashboard)*/
/*  #}*/
/* <div class="order-statistics {{ tab.class }}">*/
/*   <div class="revenue">*/
/*     <span class="label">{{ t('Lifetime') }}:</span>*/
/*     <span class="value">{{ this.formatPrice(tab.revenue.value) }}</span>*/
/*   </div>*/
/* </div>*/
/* */
