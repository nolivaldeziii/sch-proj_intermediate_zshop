<?php

/* /var/www/next/output/xcart/src/skins/mail/common/order/invoice/parts/bottom.address.shipping.twig */
class __TwigTemplate_d492ceb911dbbcae07afa89e5f58173b0f560fc3e9299bee166ead5c1bda6750 extends \XLite\Core\Templating\Twig\Template
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
        echo "<strong class=\"title\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Shipping address")), "html", null, true);
        echo "</strong>

<ul class=\"address-section shipping-address-section\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddressSectionData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "saddress", array())), "method"));
        foreach ($context['_seq'] as $context["idx"] => $context["field"]) {
            // line 10
            echo "        <li class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["field"], "css_class", array()), "html", null, true);
            echo " address-field\">
            ";
            // line 11
            if ($this->getAttribute($context["field"], "title_visible", array())) {
                // line 12
                echo "                <span class=\"address-title\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["field"], "title", array()))), "html", null, true);
                echo ":</span>
            ";
            }
            // line 14
            echo "            <span class=\"address-field\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["field"], "value", array()), "html", null, true);
            echo "</span>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/mail/common/order/invoice/parts/bottom.address.shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  43 => 14,  37 => 12,  35 => 11,  30 => 10,  26 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice shipping address*/
/*  #*/
/*  # @ListChild (list="invoice.bottom.address.shipping", weight="20")*/
/*  #}*/
/* <strong class="title">{{ t('Shipping address') }}</strong>*/
/* */
/* <ul class="address-section shipping-address-section">*/
/*     {% for idx, field in this.getAddressSectionData(this.saddress) %}*/
/*         <li class="{{ field.css_class }} address-field">*/
/*             {% if field.title_visible %}*/
/*                 <span class="address-title">{{ t(field.title) }}:</span>*/
/*             {% endif %}*/
/*             <span class="address-field">{{ field.value }}</span>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
