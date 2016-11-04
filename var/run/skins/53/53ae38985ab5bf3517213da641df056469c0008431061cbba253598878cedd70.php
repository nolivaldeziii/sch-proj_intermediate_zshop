<?php

/* top_links/version_notes/parts/base.twig */
class __TwigTemplate_f70d67f41796e3b0956adec5c5c806f4b3c202b037439ada3ba5a39b1d476b21 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "auth", array()), "isLogged", array(), "method")) {
            // line 7
            echo "  <div class=\"base-version\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("X-Cart shopping cart software")), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "top_links/version_notes/parts/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # "Core version" info*/
/*  #*/
/*  # @ListChild (list="admin.main.page.header", weight="20")*/
/*  #}*/
/* {% if not this.auth.isLogged() %}*/
/*   <div class="base-version">{{ t('X-Cart shopping cart software') }}</div>*/
/* {% endif %}*/
/* */
