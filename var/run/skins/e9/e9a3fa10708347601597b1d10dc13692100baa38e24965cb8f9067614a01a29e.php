<?php

/* noscript.twig */
class __TwigTemplate_0bb70c6b8998f94e173bcb1b1717837263617a2a883876d1145c796683b2e49b extends \XLite\Core\Templating\Twig\Template
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
        echo "<noscript>
  <div class=\"noscript\">
    ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This site requires JavaScript to function properly.")), "html", null, true);
        echo "
    <br />";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Please enable JavaScript in your web browser.")), "html", null, true);
        echo "
  </div>
</noscript>
";
    }

    public function getTemplateName()
    {
        return "noscript.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #}*/
/* <noscript>*/
/*   <div class="noscript">*/
/*     {{ t('This site requires JavaScript to function properly.') }}*/
/*     <br />{{ t('Please enable JavaScript in your web browser.') }}*/
/*   </div>*/
/* </noscript>*/
/* */
