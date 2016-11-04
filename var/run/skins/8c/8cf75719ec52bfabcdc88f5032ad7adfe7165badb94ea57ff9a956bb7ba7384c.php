<?php

/* /var/www/next/output/xcart/src/skins/pdf/order/invoice/parts/totals.includedModifiers.twig */
class __TwigTemplate_fa50fc16b27334ca22c4382e7c3694bf96e6f110cd23bb6a871221e604f6d54d extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getItemsIncludeSurchargesTotals", array(), "method")) {
            echo "  
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getItemsIncludeSurchargesTotals", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 8
                echo "      <tr class='included-surcharge'>
        <td class=\"name\">";
                // line 9
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Including X", array("name" => $this->getAttribute($this->getAttribute($context["row"], "surcharge", array()), "getName", array(), "method")))), "html", null, true);
                echo ":</td>
        <td class=\"value\">";
                // line 10
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute($context["row"], "cost", array()), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCurrency", array(), "method")), "method"), "html", null, true);
                echo "</td>
      </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/pdf/order/invoice/parts/totals.includedModifiers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 10,  30 => 9,  27 => 8,  23 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice totals : subtotal*/
/*  #*/
/*  # @ListChild (list="invoice.base.totals.after", weight="20")*/
/*  #}*/
/* {% if this.order.getItemsIncludeSurchargesTotals() %}  */
/*     {% for row in this.order.getItemsIncludeSurchargesTotals() %}*/
/*       <tr class='included-surcharge'>*/
/*         <td class="name">{{ t('Including X', {'name': row.surcharge.getName()}) }}:</td>*/
/*         <td class="value">{{ this.formatPrice(row.cost, this.order.getCurrency()) }}</td>*/
/*       </tr>*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */
