<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/table/columns/icon.twig */
class __TwigTemplate_282e4c65c08ab60ecaf153e00c3b4a5ded83b13f00cbc0f74d6b58095bc2f3cc extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModuleToDisable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
            // line 8
            echo "  <td class=\"module-status status-incompatible\"></td>
";
        }
        // line 10
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModuleToDisable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
            // line 11
            echo "  <td class=\"module-status\"></td>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/table/columns/icon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 11,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Module status icon*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_update.sections.table.columns", weight="200")*/
/*  #}*/
/* */
/* {% if this.isModuleToDisable(this.entry) %}*/
/*   <td class="module-status status-incompatible"></td>*/
/* {% endif %}*/
/* {% if not this.isModuleToDisable(this.entry) %}*/
/*   <td class="module-status"></td>*/
/* {% endif %}*/
/* */
