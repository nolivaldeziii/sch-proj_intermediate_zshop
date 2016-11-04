<?php

/* label/body.twig */
class __TwigTemplate_8a5613db754fbe98f182eaec62ee394bd9aecbc804fd0ce763ffd02cb31e1d8b extends \XLite\Core\Templating\Twig\Template
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
<div class=\"label-main-box ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "style", array()), "html", null, true);
        echo "\">
  <div class=\"content\">";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "labelContent", array()), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "label/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Label template*/
/*  #}*/
/* */
/* <div class="label-main-box {{ this.style }}">*/
/*   <div class="content">{{ this.labelContent }}</div>*/
/* </div>*/
/* */
