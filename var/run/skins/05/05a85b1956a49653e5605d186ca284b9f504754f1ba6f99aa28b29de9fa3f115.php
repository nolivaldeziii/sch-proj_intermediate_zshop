<?php

/* upgrade/install_updates/parts/form/info/module/author.twig */
class __TwigTemplate_173c3a2c9b7da5b94fff820df7c72c138eb9dab2c4b34fc53d97ef6a3816a284 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"author\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("by")), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getAuthor", array(), "method"), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "upgrade/install_updates/parts/form/info/module/author.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Module author*/
/*  #*/
/*  # @ListChild (list="upgrade.install_updates.sections.form.info.module", weight="100")*/
/*  #}*/
/* */
/* <li class="author">{{ t('by') }} {{ this.entry.getAuthor() }}</li>*/
/* */
