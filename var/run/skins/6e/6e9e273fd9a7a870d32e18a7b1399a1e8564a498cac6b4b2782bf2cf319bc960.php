<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/sections/header.twig */
class __TwigTemplate_5b3bc33139cb267f1cdcaa902b6e8ef9385ffc824efccfce146ba4317e6715a0 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRecentlyInstalledPage", array(), "method")) {
            // line 8
            echo "
<div class=\"installed-modules-header\">

  <div class=\"addons-filters\">
    <div class=\"addons-search-box\">
  
      ";
            // line 14
            $this->startForm("\\XLite\\View\\Form\\Module\\ManageSearch", array("formMethod" => "GET", "className" => "search-form"));            // line 15
            echo "        <div class=\"substring\">
          ";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldOnly" => "true", "fieldName" => "substring", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSubstring", array(), "method"), "defaultValue" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Search for modules"))))), "html", null, true);
            echo "
          ";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => ""))), "html", null, true);
            echo "
        </div>
      ";
            $this->endForm();            // line 20
            echo "  
    </div>
  </div>

  <div class=\"actions\">
    ";
            // line 25
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Addon\\ActivateLicenseKey"))), "html", null, true);
            echo "
    ";
            // line 26
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Addon\\EnterLicenseKey"))), "html", null, true);
            echo "
    ";
            // line 27
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Addon\\Upload"))), "html", null, true);
            echo "
    <span class=\"separator-or\">";
            // line 28
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("or")), "html", null, true);
            echo "</span>
    <a href=\"";
            // line 29
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "addons_list_marketplace")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("View more addons in Marketplace")), "html", null, true);
            echo "</a>
  </div>

</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/sections/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 29,  64 => 28,  60 => 27,  56 => 26,  52 => 25,  45 => 20,  40 => 17,  36 => 16,  33 => 15,  32 => 14,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="modules-manage.top-controls", weight="100")*/
/*  #}*/
/* */
/* {% if not this.isRecentlyInstalledPage() %}*/
/* */
/* <div class="installed-modules-header">*/
/* */
/*   <div class="addons-filters">*/
/*     <div class="addons-search-box">*/
/*   */
/*       {% form '\\XLite\\View\\Form\\Module\\ManageSearch' with {formMethod: 'GET', className: 'search-form'} %}*/
/*         <div class="substring">*/
/*           {{ widget('\\XLite\\View\\FormField\\Input\\Text', fieldOnly='true', fieldName='substring', value=this.getSubstring(), defaultValue=t('Search for modules')) }}*/
/*           {{ widget('\\XLite\\View\\Button\\Submit', label='') }}*/
/*         </div>*/
/*       {% endform %}*/
/*   */
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="actions">*/
/*     {{ widget('XLite\\View\\Button\\Addon\\ActivateLicenseKey') }}*/
/*     {{ widget('XLite\\View\\Button\\Addon\\EnterLicenseKey') }}*/
/*     {{ widget('XLite\\View\\Button\\Addon\\Upload') }}*/
/*     <span class="separator-or">{{ t('or') }}</span>*/
/*     <a href="{{ url('addons_list_marketplace') }}">{{ t('View more addons in Marketplace') }}</a>*/
/*   </div>*/
/* */
/* </div>*/
/* {% endif %}*/
/* */
