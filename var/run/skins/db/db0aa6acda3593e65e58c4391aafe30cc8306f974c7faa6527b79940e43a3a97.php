<?php

/* pager/model/table/body.twig */
class __TwigTemplate_9c1f592fa3d1b6fd05bd0e707f49358c52534b005c416c3d9b783c00b5eb5c72 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"box\">
  <div class=\"left\">
    ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "pager.admin.model.table.left"))), "html", null, true);
        echo "
  </div>
  <div class=\"right\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "pager.admin.model.table.right"))), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "pager/model/table/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Pager*/
/*  #}*/
/* */
/* <div class="box">*/
/*   <div class="left">*/
/*     {{ widget_list('pager.admin.model.table.left') }}*/
/*   </div>*/
/*   <div class="right">*/
/*     {{ widget_list('pager.admin.model.table.right') }}*/
/*   </div>*/
/* </div>*/
/* */
