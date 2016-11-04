<?php

/* modules/CDev/Paypal/welcome/parts/block.twig */
class __TwigTemplate_7808d817bdf26f4e63d3a6fce92c09fb782b26364911f89fabd7826045795375 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"block-content\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "paypal.welcome.content"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/welcome/parts/block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Block content*/
/*  #*/
/*  # @ListChild (list="paypal.welcome", weight="20")*/
/*  #}*/
/* */
/* <div class="block-content">*/
/*   {{ widget_list('paypal.welcome.content') }}*/
/* </div>*/
/* */
