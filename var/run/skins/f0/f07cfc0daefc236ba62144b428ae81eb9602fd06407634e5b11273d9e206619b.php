<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/mobile_header_parts/logo.twig */
class __TwigTemplate_583bfba8d27dff2327fd6c627879a7a9194259268b99806effa476ac8e099890 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"dropdown mobile_header-logo\">
\t";
        // line 8
        $this->loadTemplate("layout/header/header.logo.twig", "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/mobile_header_parts/logo.twig", 8)->display($context);
        // line 9
        echo "</li>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/mobile_header_parts/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Header right box*/
/*  #*/
/*  # @ListChild (list="layout.header.mobile.menu", weight="10")*/
/*  #}*/
/* */
/* <li class="dropdown mobile_header-logo">*/
/* 	{% include 'layout/header/header.logo.twig' %}*/
/* </li>*/
