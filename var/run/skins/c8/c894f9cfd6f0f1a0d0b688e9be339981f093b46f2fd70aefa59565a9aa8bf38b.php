<?php

/* layout/header/mobile.header.twig */
class __TwigTemplate_611f7b8dcc499cb36411e533a91d3697fd390595386a09256836042039fc76e9 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"mobile_header\">
  <ul class=\"nav nav-pills\">
    ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.mobile.menu"))), "html", null, true);
        echo "
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/header/mobile.header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Mobile header*/
/*  #}*/
/* */
/* <div class="mobile_header">*/
/*   <ul class="nav nav-pills">*/
/*     {{ widget_list('layout.header.mobile.menu') }}*/
/*   </ul>*/
/* </div>*/
/* */
