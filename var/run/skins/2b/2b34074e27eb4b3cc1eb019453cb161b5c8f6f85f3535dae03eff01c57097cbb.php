<?php

/* layout/footer/main.footer.contacts.twig */
class __TwigTemplate_f542d4e2882759afd42614ae56f2ff451463a5008795d354bafba1e043ef5327 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"footer_contacts\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\CrispWhiteSkin\\View\\Contacts"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/footer/main.footer.contacts.twig";
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
/*  # Footer*/
/*  #*/
/*  # @ListChild (list="layout.main.footer", weight="50")*/
/*  #}*/
/* */
/* <div class="footer_contacts">*/
/*     {{ widget('XLite\\Module\\XC\\CrispWhiteSkin\\View\\Contacts') }}*/
/* </div>*/
/* */
