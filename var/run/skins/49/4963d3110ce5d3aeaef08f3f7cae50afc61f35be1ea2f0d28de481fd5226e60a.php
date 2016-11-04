<?php

/* common/sticky_panel.twig */
class __TwigTemplate_9665f26a9fc5c4161b2a41d74d3e3b38b9187fab3cd16b20cbaadc8e8e3815d6 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getClass", array(), "method"), "html", null, true);
        echo "\">
  <div class=\"box\">
    ";
        // line 6
        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBody", array(), "method"), "common/sticky_panel.twig", 6)->display($context);
        // line 7
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "common/sticky_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  25 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Sticky panel*/
/*  #}*/
/* <div class="{{ this.getClass() }}">*/
/*   <div class="box">*/
/*     {% include this.getBody() %}*/
/*   </div>*/
/* </div>*/
/* */
