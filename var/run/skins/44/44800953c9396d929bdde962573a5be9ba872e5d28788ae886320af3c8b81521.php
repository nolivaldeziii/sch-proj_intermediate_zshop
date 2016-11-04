<?php

/* footer/right/social_link.twig */
class __TwigTemplate_5cf033115907dcb863558dbe985b7dd6f44b0f82324547f15be63269db88a520 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "auth", array()), "isAdmin", array(), "method")) {
            // line 8
            echo "  <div class=\"social-links\">
    <span>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Find us on")), "html", null, true);
            echo "</span>
    <a href=\"http://www.facebook.com/xcart/\" class=\"facebook\" target=\"_blank\" title=\"";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Facebook")), "html", null, true);
            echo "\"><i class=\"fa fa-facebook-square\"></i></a>
    <a href=\"https://twitter.com/x_cart\" class=\"twitter\" target=\"_blank\" title=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Twitter")), "html", null, true);
            echo "\"><i class=\"fa fa-twitter-square\"></i></a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "footer/right/social_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Link to Facebook*/
/*  #*/
/*  # @ListChild (list="admin.main.page.footer.right", weight="300")*/
/*  #}*/
/* */
/* {% if not this.auth.isAdmin() %}*/
/*   <div class="social-links">*/
/*     <span>{{ t('Find us on') }}</span>*/
/*     <a href="http://www.facebook.com/xcart/" class="facebook" target="_blank" title="{{ t('Facebook') }}"><i class="fa fa-facebook-square"></i></a>*/
/*     <a href="https://twitter.com/x_cart" class="twitter" target="_blank" title="{{ t('Twitter') }}"><i class="fa fa-twitter-square"></i></a>*/
/*   </div>*/
/* {% endif %}*/
/* */
