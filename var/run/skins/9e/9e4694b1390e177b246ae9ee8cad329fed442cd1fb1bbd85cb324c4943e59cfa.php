<?php

/* layout/footer/main.footer.section.twig */
class __TwigTemplate_dffff3495c66bc8dc5a0451e82aec33ffe1d3e2661ac764fc9faacd885bb1fc3 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"footer\">
  <div class=\"section\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sidebar.footer"))), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/footer/main.footer.section.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Footer*/
/*  #*/
/*  # @ListChild (list="layout.main.footer", weight="1000")*/
/*  #}*/
/* */
/* <div id="footer">*/
/*   <div class="section">*/
/*     {{ widget_list('sidebar.footer') }}*/
/*   </div>*/
/* </div>*/
/* */
