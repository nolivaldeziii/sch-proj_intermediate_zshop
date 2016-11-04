<?php

/* items_list/model/table/order/cell.total.twig */
class __TwigTemplate_d9b3b95cdae3d15036cf04e10d7285d92521ddad9de8793a2579d116a9132235 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        $this->loadTemplate("items_list/model/table/order/cell.total-clean.twig", "items_list/model/table/order/cell.total.twig", 5)->display($context);
        // line 6
        echo "<span class=\"quantity\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Qty")), "html", null, true);
        echo ": ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsQuantity", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/order/cell.total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Total cell*/
/*  #}*/
/* */
/* {% include 'items_list/model/table/order/cell.total-clean.twig' %}*/
/* <span class="quantity">{{ t('Qty') }}: {{ this.getItemsQuantity(this.entity) }}</span>*/
/* */
