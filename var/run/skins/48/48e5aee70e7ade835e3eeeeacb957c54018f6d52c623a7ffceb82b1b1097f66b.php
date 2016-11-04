<?php

/* header/parts/favicon.twig */
class __TwigTemplate_914c6ec0e74cd02d502f8d1545eb70c65e19b0bd86204960291ea7a3c5292276 extends \XLite\Core\Templating\Twig\Template
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
<link rel=\"shortcut icon\" href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFavicon", array(), "method"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
";
    }

    public function getTemplateName()
    {
        return "header/parts/favicon.twig";
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
/*  # Header part*/
/*  #*/
/*  # @ListChild (list="head", weight="80")*/
/*  #}*/
/* */
/* <link rel="shortcut icon" href="{{ this.getFavicon() }}" type="image/x-icon" />*/
/* */
