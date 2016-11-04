<?php

/* lazy_load/body.twig */
class __TwigTemplate_d638ca8ba9a165ec7ae65075f6a19f868af00e1f925a2f78a18e2662e6414e6b extends \XLite\Core\Templating\Twig\Template
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
        echo "<div ";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributes", array(), "method")), "method");
        echo ">
  ";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLazyContent", array(), "method");
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "lazy_load/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Lazy load container*/
/*  #}*/
/* <div {{ this.printTagAttributes(this.getAttributes())|raw }}>*/
/*   {{ this.getLazyContent()|raw }}*/
/* </div>*/
