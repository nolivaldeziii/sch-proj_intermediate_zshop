<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/model/table/category/parts/info.products.twig */
class __TwigTemplate_4fc80d4f42d03bb25a689860df3362fb555917ec955479185cd18693718c4e7d extends \XLite\Core\Templating\Twig\Template
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
<a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "category_products", "", array("id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getCategoryId", array(), "method")))), "html", null, true);
        echo "\"class=\"count-link\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "countProducts", array(), "method"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/model/table/category/parts/info.products.twig";
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
/*  # Products count*/
/*  #*/
/*  # @ListChild (list="itemsList.category.cell.info", weight="100")*/
/*  #}*/
/* */
/* <a href="{{ url('category_products', '', {'id': this.entity.getCategoryId()}) }}"class="count-link">{{ this.entity.countProducts() }}</a>*/
/* */
