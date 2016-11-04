<?php

/* modules/XC/NewsletterSubscriptions/form/subscribe.twig */
class __TwigTemplate_3f45a35c01cc9bde8cd09e8d5a9586eedf5469e85c90f2d61eac99d69afa2a72 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"subscription-block\">
    <div class=\"subscription-form-block\">
        ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "NewsletterSubscriptions.footer.form-block"))), "html", null, true);
        echo "
    </div>
    <div class=\"subscription-success-block hidden\">
        ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "NewsletterSubscriptions.footer.success-block"))), "html", null, true);
        echo "
    </div>
    <div class=\"subscription-error-block hidden\">
        ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "NewsletterSubscriptions.footer.error-block"))), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/NewsletterSubscriptions/form/subscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  30 => 10,  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Subscribe block*/
/*  #}*/
/* */
/* <div class="subscription-block">*/
/*     <div class="subscription-form-block">*/
/*         {{ widget_list('NewsletterSubscriptions.footer.form-block') }}*/
/*     </div>*/
/*     <div class="subscription-success-block hidden">*/
/*         {{ widget_list('NewsletterSubscriptions.footer.success-block') }}*/
/*     </div>*/
/*     <div class="subscription-error-block hidden">*/
/*         {{ widget_list('NewsletterSubscriptions.footer.error-block') }}*/
/*     </div>*/
/* </div>*/
/* */
