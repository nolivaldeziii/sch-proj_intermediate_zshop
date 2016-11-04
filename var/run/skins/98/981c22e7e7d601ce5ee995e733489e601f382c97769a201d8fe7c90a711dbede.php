<?php

/* footer/right/site.twig */
class __TwigTemplate_2c7a6cab36427beda2811c05a0a1149b6a38be73149bbcfe87a80859143c9697 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "auth", array()), "isAdmin", array(), "method")) {
            // line 7
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getXCartURL", array(), "method"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Official website")), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "footer/right/site.twig";
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
/*  # Link to official website*/
/*  #*/
/*  # @ListChild (list="admin.main.page.footer.right", weight="100")*/
/*  #}*/
/* {% if not this.auth.isAdmin() %}*/
/*   <a href="{{ this.getXCartURL() }}" target="_blank">{{ t('Official website') }}</a>*/
/* {% endif %}*/
/* */
