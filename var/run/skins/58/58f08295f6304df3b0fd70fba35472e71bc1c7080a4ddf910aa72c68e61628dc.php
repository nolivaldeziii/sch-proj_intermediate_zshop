<?php

/* main_center/page_container_parts/header_parts/storefront_status.twig */
class __TwigTemplate_3207961a930cb924fffe08e6f95060e40c5a6275b940fbe7e793868369302b22 extends \XLite\Core\Templating\Twig\Template
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
<div ";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerTagAttributes", array(), "method")), "method");
        echo ">
  ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isTogglerVisible", array(), "method")) {
            // line 7
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLink", array(), "method"), "html", null, true);
            echo "\" ";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTogglerTagAttributes", array(), "method")), "method");
            echo "><div><span class=\"svg\">";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSVGImage", array(0 => "images/check.svg"), "method");
            echo "</span></div></a>
  ";
        }
        // line 9
        echo "  <a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOpenedShopURL", array(), "method"), "html", null, true);
        echo "\" class=\"link opened\" target=\"_blank\">";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOpenTitle", array(), "method");
        echo "</a>
  <span class=\"link closed\">";
        // line 10
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCloseTitle", array(), "method");
        echo "</span>
</div>
";
    }

    public function getTemplateName()
    {
        return "main_center/page_container_parts/header_parts/storefront_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  38 => 9,  28 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Storefront status*/
/*  #}*/
/* */
/* <div {{ this.printTagAttributes(this.getContainerTagAttributes())|raw }}>*/
/*   {% if this.isTogglerVisible() %}*/
/*     <a href="{{ this.getLink() }}" {{ this.printTagAttributes(this.getTogglerTagAttributes())|raw }}><div><span class="svg">{{ this.getSVGImage('images/check.svg')|raw }}</span></div></a>*/
/*   {% endif %}*/
/*   <a href="{{ this.getOpenedShopURL() }}" class="link opened" target="_blank">{{ this.getOpenTitle()|raw }}</a>*/
/*   <span class="link closed">{{ this.getCloseTitle()|raw }}</span>*/
/* </div>*/
/* */
