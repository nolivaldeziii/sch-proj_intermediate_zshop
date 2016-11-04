<?php

/* product/top_sellers\body.twig */
class __TwigTemplate_f577d396686c8bb138af77a09a0e8511a1ee9d33f7d06cf549d72de767aa43de extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEmptyStats", array(), "method")) {
            // line 6
            echo "
<div class=\"top-sellers\">

  ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOptions", array(), "method"));
            foreach ($context['_seq'] as $context["period"] => $context["name"]) {
                // line 10
                echo "  ";
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSelectedPeriod", array(0 => $context["period"]), "method")) {
                    // line 11
                    echo "    <div id=\"period-";
                    echo $context["period"];
                    echo "\" class=\"block-container\">
      ";
                    // line 12
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\ItemsList\\Model\\Product\\Admin\\TopSellers", "period" => $context["period"], "products_limit" => "5"))), "html", null, true);
                    echo "
    </div>
  ";
                }
                // line 15
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['period'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
  <div class=\"period-box\">
    <span class=\"label\">";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("For the period")), "html", null, true);
            echo "</span>
    <span class=\"field\">
      <select name=\"period\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOptions", array(), "method"));
            foreach ($context['_seq'] as $context["period"] => $context["name"]) {
                // line 22
                echo "        <option value=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["period"], "html", null, true);
                echo "\" ";
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSelectedPeriod", array(0 => $context["period"]), "method")) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($context["name"])), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['period'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "      </select>
    </span>
  </div>

</div>

";
        } else {
            // line 31
            echo "
<div class=\"empty-list\">";
            // line 32
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("No products sold yet")), "html", null, true);
            echo "</div>

";
        }
        // line 35
        echo "
";
    }

    public function getTemplateName()
    {
        return "product/top_sellers\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  94 => 32,  91 => 31,  82 => 24,  67 => 22,  63 => 21,  57 => 18,  53 => 16,  47 => 15,  41 => 12,  36 => 11,  33 => 10,  29 => 9,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Top selling products block template*/
/*  #}*/
/* */
/* {% if not this.isEmptyStats() %}*/
/* */
/* <div class="top-sellers">*/
/* */
/*   {% for period, name in this.getOptions() %}*/
/*   {% if this.isSelectedPeriod(period) %}*/
/*     <div id="period-{{ period|raw }}" class="block-container">*/
/*       {{ widget('\\XLite\\View\\ItemsList\\Model\\Product\\Admin\\TopSellers', period=period, products_limit='5') }}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* */
/*   <div class="period-box">*/
/*     <span class="label">{{ t('For the period') }}</span>*/
/*     <span class="field">*/
/*       <select name="period">*/
/*         {% for period, name in this.getOptions() %}*/
/*         <option value="{{ period }}" {% if this.isSelectedPeriod(period) %}selected="selected"{% endif %}>{{ t(name) }}</option>*/
/*         {% endfor %}*/
/*       </select>*/
/*     </span>*/
/*   </div>*/
/* */
/* </div>*/
/* */
/* {% else %}*/
/* */
/* <div class="empty-list">{{ t('No products sold yet') }}</div>*/
/* */
/* {% endif %}*/
/* */
/* */
