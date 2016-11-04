<?php

/* order/statistics/informer\body.twig */
class __TwigTemplate_b507ae523525d2b1d294b9856c64d448a56126db3e51235eb3e2e156c57b8497 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"order-statistics-mini-informer collapsed\">
  <div class=\"header\">
    ";
        // line 7
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSVGImage", array(0 => "images/statistics.svg"), "method");
        echo "
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Sale statistics")), "html", null, true);
        echo "
    <i class=\"fa fa-angle-down\"></i>
    <i class=\"fa fa-angle-right\"></i>
  </div>
  <div class=\"content\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTabs", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 14
            echo "    ";
            $this->loadTemplate($this->getAttribute($context["tab"], "template", array()), "order/statistics/informer\\body.twig", 14)->display($context);
            // line 15
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "order/statistics/informer\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 16,  56 => 15,  53 => 14,  36 => 13,  28 => 8,  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Order summary mini informer (for dashboard)*/
/*  #}*/
/* */
/* <div class="order-statistics-mini-informer collapsed">*/
/*   <div class="header">*/
/*     {{ this.getSVGImage('images/statistics.svg')|raw }}*/
/*     {{ t('Sale statistics') }}*/
/*     <i class="fa fa-angle-down"></i>*/
/*     <i class="fa fa-angle-right"></i>*/
/*   </div>*/
/*   <div class="content">*/
/*     {% for tab in this.getTabs() %}*/
/*     {% include tab.template %}*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
