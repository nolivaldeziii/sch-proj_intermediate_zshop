<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/modules/CDev/SocialLogin/parts/social_login.separator.twig */
class __TwigTemplate_0c9659c19ad1c43437c479266ba1212ca2cdf2f4ec3a0fd801c1030146fc99f5 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"or-separator\">
    <span class=\"or-separator-text\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("or")), "html", null, true);
        echo "</span>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/modules/CDev/SocialLogin/parts/social_login.separator.twig";
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
/*  # SocialLogin widget's following elements*/
/*  #*/
/*  # @ListChild (list="social.login", weight="150")*/
/*  #}*/
/* */
/* <div class="or-separator">*/
/*     <span class="or-separator-text">{{ t('or') }}</span>*/
/* </div>*/
