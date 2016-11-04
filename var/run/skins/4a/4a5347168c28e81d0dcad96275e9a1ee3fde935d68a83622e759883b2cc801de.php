<?php

/* body/header_right.twig */
class __TwigTemplate_ede327f630940b51f7a9171a144733ae8ab65d306ee2f055464fbddbd3330e0c extends \XLite\Core\Templating\Twig\Template
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
<div id=\"header-right\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin.main.page.header.right"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "body/header_right.twig";
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
/*  # Header (right part)*/
/*  #*/
/*  # @ListChild (list="admin.main.page.header", weight="9000")*/
/*  #}*/
/* */
/* <div id="header-right">*/
/*   {{ widget_list('admin.main.page.header.right') }}*/
/* </div>*/
/* */
