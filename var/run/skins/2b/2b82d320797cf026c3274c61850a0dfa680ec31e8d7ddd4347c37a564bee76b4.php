<?php

/* modules/CDev/XPaymentsConnector/order/fraud_status/status.twig */
class __TwigTemplate_0ead1d180bf5969698f38267633c13a7af6e8614905c1f83964bb7131cb7af03 extends \XLite\Core\Templating\Twig\Template
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
        // line 5
        echo "

<a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFraudInfoXpcLink", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method"), "html", null, true);
        echo "\" title=\"";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFraudInfoXpcTitle", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method");
        echo "\"></a>
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/XPaymentsConnector/order/fraud_status/status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 7,  19 => 5,);
    }
}
/* {##*/
/*  # Fraud status shield */
/*  #*/
/*  #}*/
/* */
/* */
/* <a href="{{ this.getFraudInfoXpcLink(this.entity) }}" title="{{ this.getFraudInfoXpcTitle(this.entity)|raw }}"></a>*/
/* */
