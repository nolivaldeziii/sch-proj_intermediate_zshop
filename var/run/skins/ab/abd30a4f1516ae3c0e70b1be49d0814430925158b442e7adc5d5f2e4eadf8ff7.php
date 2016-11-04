<?php

/* jscontainer/parts/register_resources.twig */
class __TwigTemplate_ca40b26f1ca4047e6903a49f7876b56b7a188538bf00c200422fc2796a996a4c extends \XLite\Core\Templating\Twig\Template
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
        echo "<script type=\"application/javascript\">
\tcore.registerResources(";
        // line 7
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getResourceRegistry", array(), "method");
        echo ");
</script>
";
    }

    public function getTemplateName()
    {
        return "jscontainer/parts/register_resources.twig";
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
/*  # Cached JS part*/
/*  #*/
/*  # @ListChild (list="jscontainer.js", weight="300")*/
/*  #}*/
/* <script type="application/javascript">*/
/* 	core.registerResources({{ this.getResourceRegistry()|raw }});*/
/* </script>*/
/* */
