<?php

/* /var/www/next/output/xcart/src/skins/customer/order/invoice/parts/totals.includedModifiers.twig */
class __TwigTemplate_93277bbf2804df3304c0be27b6045b56b20e8b39c8a76b9a9c927301b03eeb14 extends \XLite\Core\Templating\Twig\Template
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
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($context["row"], "cost", array()), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCurrency", array(), "method")))), "html", null, true);
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
        return "/var/www/next/output/xcart/src/skins/customer/order/invoice/parts/totals.includedModifiers.twig";
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
/*         <td class="value">{{ widget('XLite\\View\\Surcharge', surcharge=row.cost, currency=this.order.getCurrency()) }}</td>*/
/*       </tr>*/
/*     {% endfor %}*/
/* {% endif %}*/
/* */
