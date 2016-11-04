<?php

/* /var/www/next/output/xcart/src/skins/mail/common/order/invoice/parts/bottom.methods.shipping.twig */
class __TwigTemplate_241f873a4795cbf664d33448dadb3ae1814ebd085b521ebbce2016d5bf60ee38 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"method-box\">
  <strong class=\"method-title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Shipping method")), "html", null, true);
        echo "</strong>
  ";
        // line 8
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getShippingModifier", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "shippingModifier", array()), "getMethod", array(), "method"))) {
            // line 9
            echo "    ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "shippingModifier", array()), "method", array()), "getName", array(), "method");
            echo "
  ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 10
(isset($context["this"]) ? $context["this"] : null), "order", array()), "getShippingMethodName", array(), "method")) {
            // line 11
            echo "    ";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getShippingMethodName", array(), "method")));
            echo "
  ";
        } else {
            // line 13
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("n/a")), "html", null, true);
            echo "
  ";
        }
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/mail/common/order/invoice/parts/bottom.methods.shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  41 => 13,  35 => 11,  33 => 10,  28 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice shipping methods*/
/*  #*/
/*  # @ListChild (list="invoice.bottom.method.shipping", weight="20")*/
/*  #}*/
/* <div class="method-box">*/
/*   <strong class="method-title">{{ t('Shipping method') }}</strong>*/
/*   {% if this.getShippingModifier() and this.shippingModifier.getMethod() %}*/
/*     {{ this.shippingModifier.method.getName()|raw }}*/
/*   {% elseif this.order.getShippingMethodName() %}*/
/*     {{ t(this.order.getShippingMethodName())|raw }}*/
/*   {% else %}*/
/*     {{ t('n/a') }}*/
/*   {% endif %}*/
/* </div>*/
/* */
