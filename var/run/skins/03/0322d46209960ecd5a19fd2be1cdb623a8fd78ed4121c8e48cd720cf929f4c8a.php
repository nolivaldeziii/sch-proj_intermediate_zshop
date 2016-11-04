<?php

/* jscontainer/parts/register_resources.twig */
class __TwigTemplate_afb5b3af37f1fec3f5d446055b64bea40e736734ef0ee4ef567bd5b69e2d5d49 extends \XLite\Core\Templating\Twig\Template
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
    if ('undefined' !== typeof(core)) {
        core.registerResources(";
        // line 8
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getResourceRegistry", array(), "method");
        echo ");
    }
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
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Cached JS part*/
/*  #*/
/*  # @ListChild (list="jscontainer.js", weight="300")*/
/*  #}*/
/* <script type="application/javascript">*/
/*     if ('undefined' !== typeof(core)) {*/
/*         core.registerResources({{ this.getResourceRegistry()|raw }});*/
/*     }*/
/* </script>*/
/* */
