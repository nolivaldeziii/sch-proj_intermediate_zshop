<?php

/* items_list\model/table.twig */
class __TwigTemplate_8f7f45685550cbd569f1bfe93260457cbdfe2c4afb98b7be0e6f50a4551da030 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSearchVisible", array(), "method")) {
            // line 6
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSearchPanelClass", array(), "method"), "itemsList" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsListObject", array(), "method")))), "html", null, true);
            echo "
";
        }
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isWrapWithForm", array(), "method")) {
            // line 10
            echo "
  ";
            // line 11
            $this->startForm($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formOptions", array()), "class", array()), array("name" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formOptions", array()), "name", array()), "formTarget" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formOptions", array()), "target", array()), "formAction" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formOptions", array()), "action", array()), "formParams" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formOptions", array()), "params", array())));            // line 12
            echo "
    ";
            // line 13
            $this->loadTemplate("items_list/model/table_content.twig", "items_list\\model/table.twig", 13)->display($context);
            // line 14
            echo "
  ";
            $this->endForm();            // line 16
            echo "
";
        } else {
            // line 18
            echo "
  ";
            // line 19
            $this->loadTemplate("items_list/model/table_content.twig", "items_list\\model/table.twig", 19)->display($context);
            // line 20
            echo "
";
        }
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "items_list\\model/table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  56 => 20,  54 => 19,  51 => 18,  47 => 16,  44 => 14,  42 => 13,  39 => 12,  38 => 11,  35 => 10,  33 => 9,  30 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Table model list*/
/*  #}*/
/* */
/* {% if this.isSearchVisible() %}*/
/*   {{ widget(this.getSearchPanelClass(), itemsList=this.getItemsListObject()) }}*/
/* {% endif %}*/
/* */
/* {% if this.isWrapWithForm() %}*/
/* */
/*   {% form this.formOptions.class with {name: this.formOptions.name, formTarget: this.formOptions.target, formAction: this.formOptions.action, formParams: this.formOptions.params} %}*/
/* */
/*     {% include 'items_list/model/table_content.twig' %}*/
/* */
/*   {% endform %}*/
/* */
/* {% else %}*/
/* */
/*   {% include 'items_list/model/table_content.twig' %}*/
/* */
/* {% endif %}*/
/* */
/* */
