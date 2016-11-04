<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/head.address.twig */
class __TwigTemplate_ba01ab3db4ac6e5e88c9118f51845f484acf401a18a6fd770f962ba332498b0a extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        $context["company"] = $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCompanyConfiguration", array(), "method");
        // line 8
        echo "
<td class=\"right-adresses-part address\">
  <strong>";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_name", array()), "html", null, true);
        echo "</strong>
  <p>
    ";
        // line 12
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "location_address", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "location_address", array()), "html", null, true);
            echo "<br />";
        }
        // line 13
        echo "    ";
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "location_city", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "location_city", array()), "html", null, true);
            echo ", ";
        }
        if ($this->getAttribute($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "locationState", array()), "state", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "locationState", array()), "state", array()), "html", null, true);
            echo ", ";
        }
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "location_zipcode", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "location_zipcode", array()), "html", null, true);
        }
        echo "<br />
    ";
        // line 14
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "locationCountry", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "locationCountry", array()), "getCountry", array(), "method"), "html", null, true);
        }
        // line 15
        echo "  </p>
  ";
        // line 16
        if (($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_phone", array()) || $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_fax", array()))) {
            // line 17
            echo "    <p>
      ";
            // line 18
            if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_phone", array())) {
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Phone")), "html", null, true);
                echo ": ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_phone", array()), "html", null, true);
                echo "<br />";
            }
            // line 19
            echo "      ";
            if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_fax", array())) {
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Fax")), "html", null, true);
                echo ": ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_fax", array()), "html", null, true);
            }
            // line 20
            echo "    </p>
  ";
        }
        // line 22
        echo "  ";
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_website", array())) {
            // line 23
            echo "    <p class=\"url\">
      <a href=\"";
            // line 24
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_website", array()), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "company_website", array()), "html", null, true);
            echo "</a>
    </p>
  ";
        }
        // line 27
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/head.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 27,  89 => 24,  86 => 23,  83 => 22,  79 => 20,  72 => 19,  65 => 18,  62 => 17,  60 => 16,  57 => 15,  53 => 14,  38 => 13,  33 => 12,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice : header : address box*/
/*  #*/
/*  # @ListChild (list="invoice.subhead", weight="20")*/
/*  #}*/
/* */
/* {% set company = this.order.getCompanyConfiguration() %}*/
/* */
/* <td class="right-adresses-part address">*/
/*   <strong>{{ company.company_name }}</strong>*/
/*   <p>*/
/*     {% if company.location_address %}{{ company.location_address }}<br />{% endif %}*/
/*     {% if company.location_city %}{{ company.location_city }}, {% endif %}{% if company.locationState.state %}{{ company.locationState.state }}, {% endif %}{% if company.location_zipcode %}{{ company.location_zipcode }}{% endif %}<br />*/
/*     {% if company.locationCountry %}{{ company.locationCountry.getCountry() }}{% endif %}*/
/*   </p>*/
/*   {% if company.company_phone or company.company_fax %}*/
/*     <p>*/
/*       {% if company.company_phone %}{{ t('Phone') }}: {{ company.company_phone }}<br />{% endif %}*/
/*       {% if company.company_fax %}{{ t('Fax') }}: {{ company.company_fax }}{% endif %}*/
/*     </p>*/
/*   {% endif %}*/
/*   {% if company.company_website %}*/
/*     <p class="url">*/
/*       <a href="{{ company.company_website }}">{{ company.company_website }}</a>*/
/*     </p>*/
/*   {% endif %}*/
/* </td>*/
/* */
