<?php

/* items_list/model/table/parts/selector.twig */
class __TwigTemplate_f1b27790b566e057c7e13ff9750236a8ed22aaacbd4ecbb4d0a8e39cb6884ea2 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"selector\">
  <input type=\"checkbox\" name=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSelectorDataPrefix", array(), "method"), "html", null, true);
        echo "[";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getUniqueIdentifier", array(), "method"), "html", null, true);
        echo "]\" value=\"1\" class=\"selector not-significant\" />
</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/parts/selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Selector*/
/*  #}*/
/* */
/* <div class="selector">*/
/*   <input type="checkbox" name="{{ this.getSelectorDataPrefix() }}[{{ this.entity.getUniqueIdentifier() }}]" value="1" class="selector not-significant" />*/
/* </div>*/
/* */
