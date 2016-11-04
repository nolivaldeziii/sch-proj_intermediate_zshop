<?php

/* items_list/model/table/product/empty_low_inventory_list.twig */
class __TwigTemplate_70fcf41196835d9d7c2d275f576e4041cf7f6c95f718723086595468bab0f7f3 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("All the products are in sufficient quantities")), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/product/empty_low_inventory_list.twig";
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
/*  # Template is displayed when Low inventory products list is empty*/
/*  #}*/
/*  */
/* <span class="empty-list">{{ t('All the products are in sufficient quantities') }}</span>*/
/* */
