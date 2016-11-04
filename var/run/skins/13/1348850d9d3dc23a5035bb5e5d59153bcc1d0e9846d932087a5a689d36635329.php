<?php

/* layout/slidebar.twig */
class __TwigTemplate_702ebd9dd537c9c12a355d2ee892c288a9bc29df6a01ade05f315b10ce9c1ec1 extends \XLite\Core\Templating\Twig\Template
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
<nav id=\"slidebar\">
    <ul>
        <li class=\"slidebar-categories\">
            <span data-toggle=\"dropdown\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Categories")), "html", null, true);
        echo "</span>
            ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.categories"))), "html", null, true);
        echo "
        </li>
        ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "header.menu", "isSlidebar" => true))), "html", null, true);
        echo "
    </ul>
</nav>
";
    }

    public function getTemplateName()
    {
        return "layout/slidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  29 => 9,  25 => 8,  19 => 4,);
    }
}
/* {##*/
/*  # Slidebar*/
/*  #}*/
/* */
/* <nav id="slidebar">*/
/*     <ul>*/
/*         <li class="slidebar-categories">*/
/*             <span data-toggle="dropdown">{{ t('Categories') }}</span>*/
/*             {{ widget_list('layout.header.categories') }}*/
/*         </li>*/
/*         {{ widget_list('header.menu', isSlidebar=true) }}*/
/*     </ul>*/
/* </nav>*/
/* */
