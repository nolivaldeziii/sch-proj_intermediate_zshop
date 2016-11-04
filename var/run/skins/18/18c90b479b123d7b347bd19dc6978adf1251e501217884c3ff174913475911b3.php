<?php

/* modules/CDev/Paypal/welcome\body.twig */
class __TwigTemplate_69f058334c8288a37d5e562999b7e2556d582cfd2d4bba5fdd4fb406c5d6a178 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBoxClass", array(), "method"), "html", null, true);
        echo "\">
  <div class=\"inner-box\">
    ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "paypal.welcome"))), "html", null, true);
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/welcome\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Welcome page for logged admin*/
/*  #}*/
/* */
/* <div class="{{ this.getBoxClass() }}">*/
/*   <div class="inner-box">*/
/*     {{ widget_list('paypal.welcome') }}*/
/*   </div>*/
/* </div>*/
