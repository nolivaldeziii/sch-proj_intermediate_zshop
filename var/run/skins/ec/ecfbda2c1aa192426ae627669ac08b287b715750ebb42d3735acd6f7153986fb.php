<?php

/* top_links/version_notes/parts/key_notice.twig */
class __TwigTemplate_493da1fb012ddf68e4d05ef07b8a62c33c8a02bb970a66b997a635a3097332ec extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isKeysNoticeAutoDisplay", array(), "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\KeysNotice"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "top_links/version_notes/parts/key_notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # License key notice button*/
/*  #*/
/*  # @ListChild (list="admin.main.page.header")*/
/*  #}*/
/* */
/* {% if this.isKeysNoticeAutoDisplay() %}*/
/*   {{ widget('\\XLite\\View\\Button\\KeysNotice') }}*/
/* {% endif %}*/
/* */
