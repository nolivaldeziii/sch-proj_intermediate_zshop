<?php

/* main/parts/title.twig */
class __TwigTemplate_0f45a2ec91d47bc4fccbbe06cb6d135411fce0ea81b16b304a3e0cc39698ab6b extends \XLite\Core\Templating\Twig\Template
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
<h1>";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Steps to complete your store for real sales", array("url" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getShopURL", array(), "method"))));
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "main/parts/title.twig";
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
/*  # Title*/
/*  #*/
/*  # @ListChild (list="dashboard-center.welcome", weight="10")*/
/*  #}*/
/* */
/* <h1>{{ t('Steps to complete your store for real sales', {'url': this.getShopURL()})|raw }}</h1>*/
/* */
