<?php

/* items_list/product/parts/common.product-name.twig */
class __TwigTemplate_089fd05cd72f474914fe11f22aa44a16f87894faeed8fd80b32e51dc3356c5ae extends \XLite\Core\Templating\Twig\Template
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
        ob_start();
        // line 5
        echo "<h5 class=\"product-name\">
    <a class=\"fn url\" href=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "categoryId", array())), "method"), "html", null, true);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "name", array());
        echo "</a>
</h5>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.product-name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Item name*/
/*  #}*/
/* {% spaceless %}*/
/* <h5 class="product-name">*/
/*     <a class="fn url" href="{{ this.getProductURL(this.categoryId) }}">{{ this.product.name|raw }}</a>*/
/* </h5>*/
/* {% endspaceless %}*/
/* */
