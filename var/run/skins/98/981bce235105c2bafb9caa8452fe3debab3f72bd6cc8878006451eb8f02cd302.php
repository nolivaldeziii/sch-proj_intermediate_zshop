<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/signin/signin.twig */
class __TwigTemplate_d596211c1fb79a084e2e648b8108ec57d9c1afa06e5c3cb53dd27ff39256a4db extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"signin-header\">
  <h1>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSigninTitle", array(), "method"), "html", null, true);
        echo "</h1>
</div>
<div class=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWrapperStyleClass", array(), "method"), "html", null, true);
        echo "\">

  <div class=\"signin-login-wrapper\">
    ";
        // line 12
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRegisterMode", array(), "method")) {
            // line 13
            echo "    <div class=\"login-box\">
      ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\CrispWhiteSkin\\View\\CheckoutAuthorization"))), "html", null, true);
            echo "
    </div>
    ";
        } else {
            // line 17
            echo "    <div class=\"register-box\">
      ";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Model\\Profile\\Main", "useBodyTemplate" => "1"))), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 21
        echo "  </div>

  <div class=\"or-line\">
    <div class=\"line\"></div>
    <div class=\"or-box\">
      <div class=\"or\">";
        // line 26
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("or")), "html", null, true);
        echo "</div>
    </div>
  </div>

  <div class=\"signin-anonymous-wrapper\">
    <div class=\"signin-anonymous-box\">";
        // line 31
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "signin-anonymous-title"))), "html", null, true);
        echo "</div>
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/signin/signin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 31,  60 => 26,  53 => 21,  47 => 18,  44 => 17,  38 => 14,  35 => 13,  33 => 12,  27 => 9,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Sign-in*/
/*  #*/
/*  # @ListChild (list="signin.main", weight="10")*/
/*  #}*/
/* <div class="signin-header">*/
/*   <h1>{{ this.getSigninTitle() }}</h1>*/
/* </div>*/
/* <div class="{{ this.getWrapperStyleClass() }}">*/
/* */
/*   <div class="signin-login-wrapper">*/
/*     {% if not this.isRegisterMode() %}*/
/*     <div class="login-box">*/
/*       {{ widget('XLite\\Module\\XC\\CrispWhiteSkin\\View\\CheckoutAuthorization') }}*/
/*     </div>*/
/*     {% else %}*/
/*     <div class="register-box">*/
/*       {{ widget('\\XLite\\View\\Model\\Profile\\Main', useBodyTemplate='1') }}*/
/*     </div>*/
/*     {% endif %}*/
/*   </div>*/
/* */
/*   <div class="or-line">*/
/*     <div class="line"></div>*/
/*     <div class="or-box">*/
/*       <div class="or">{{ t('or') }}</div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="signin-anonymous-wrapper">*/
/*     <div class="signin-anonymous-box">{{ widget_list('signin-anonymous-title') }}</div>*/
/*   </div>*/
/* */
/* </div>*/
/* */
