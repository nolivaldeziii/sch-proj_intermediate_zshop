<?php

/* layout/header/header.right.settings.twig */
class __TwigTemplate_73957f014578be49b5d4b694d06c1d91c8fd826903f18531f1c818db49e9d328 extends \XLite\Core\Templating\Twig\Template
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
        // line 5
        echo "
<div class=\"header_settings dropdown\">
    <a data-target=\"#\" data-toggle=\"dropdown\"></a>
    <div class=\"dropdown-menu\">
        ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.right.settings"))), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/header/header.right.settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 9,  19 => 5,);
    }
}
/* {##*/
/*  # Header right settings*/
/*  #*/
/*  #}*/
/* */
/* <div class="header_settings dropdown">*/
/*     <a data-target="#" data-toggle="dropdown"></a>*/
/*     <div class="dropdown-menu">*/
/*         {{ widget_list('layout.header.right.settings') }}*/
/*     </div>*/
/* </div>*/
/* */
