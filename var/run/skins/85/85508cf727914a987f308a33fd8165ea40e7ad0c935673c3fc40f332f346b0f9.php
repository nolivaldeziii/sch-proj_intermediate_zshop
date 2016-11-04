<?php

/* items_list/model/table/product/empty_top_sellers_list.twig */
class __TwigTemplate_0c10817c6bf914e7e2e3cd6c572be8b1e7c1fc65fa62455868067fed59c19e17 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"empty-list\">";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("No products sold yet")), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/product/empty_top_sellers_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Template is displayed when Top selling products list is empty*/
/*  #}*/
/*  */
/* <span class="empty-list">{{ t('No products sold yet') }}</span>*/
/* */
