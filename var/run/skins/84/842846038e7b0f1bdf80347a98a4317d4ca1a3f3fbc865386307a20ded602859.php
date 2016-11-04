<?php

/* upgrade/install_updates/parts/form.twig */
class __TwigTemplate_578df07ebe6c191132cf6942c3d935710c04282cdb46c926df664e564f2ba2a3 extends \XLite\Core\Templating\Twig\Template
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
<form action=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context)), "html", null, true);
        echo "\" method=\"post\">

  <input type=\"hidden\" name=\"target\" value=\"upgrade\">
  <input type=\"hidden\" name=\"action\" value=\"start_upgrade\" />
  ";
        // line 11
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAdvancedMode", array(), "method")) {
            // line 12
            echo "    <input type=\"hidden\" name=\"entries[enabled]\" value=\"1\" />
  ";
        }
        // line 14
        echo "
  ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\FormId"))), "html", null, true);
        echo "

  <div class=\"update-module-list-frame\">

    <ul class=\"update-module-list clearfix\">

      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getUpgradeEntries", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 22
            echo "        <li class=\"update-module-info\">
          ";
            // line 23
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.form", "type" => "inherited", "entry" => $context["entry"]))), "html", null, true);
            echo "
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    </ul>
    <div class=\"actions\">
      ";
        // line 29
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAdvancedMode", array(), "method")) {
            // line 30
            echo "        <div class=\"additional-actions\">
            <span class=\"uncheck-all\">";
            // line 31
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Uncheck all")), "html", null, true);
            echo "</span>
            <span class=\"check-all\">";
            // line 32
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Check all")), "html", null, true);
            echo "</span>
        </div>
      ";
        }
        // line 35
        echo "      ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Install updates")), "style" => "center regular-main-button"))), "html", null, true);
        echo "
    </div>

  </div>

</form>
";
    }

    public function getTemplateName()
    {
        return "upgrade/install_updates/parts/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 35,  77 => 32,  73 => 31,  70 => 30,  68 => 29,  63 => 26,  54 => 23,  51 => 22,  47 => 21,  38 => 15,  35 => 14,  31 => 12,  29 => 11,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Updates list*/
/*  #*/
/*  # @ListChild (list="upgrade.install_updates.sections", weight="200")*/
/*  #}*/
/* */
/* <form action="{{ url() }}" method="post">*/
/* */
/*   <input type="hidden" name="target" value="upgrade">*/
/*   <input type="hidden" name="action" value="start_upgrade" />*/
/*   {% if this.isAdvancedMode() %}*/
/*     <input type="hidden" name="entries[enabled]" value="1" />*/
/*   {% endif %}*/
/* */
/*   {{ widget('\\XLite\\View\\FormField\\Input\\FormId') }}*/
/* */
/*   <div class="update-module-list-frame">*/
/* */
/*     <ul class="update-module-list clearfix">*/
/* */
/*       {% for entry in this.getUpgradeEntries() %}*/
/*         <li class="update-module-info">*/
/*           {{ widget_list('sections.form', type='inherited', entry=entry) }}*/
/*         </li>*/
/*       {% endfor %}*/
/* */
/*     </ul>*/
/*     <div class="actions">*/
/*       {% if this.isAdvancedMode() %}*/
/*         <div class="additional-actions">*/
/*             <span class="uncheck-all">{{ t('Uncheck all') }}</span>*/
/*             <span class="check-all">{{ t('Check all') }}</span>*/
/*         </div>*/
/*       {% endif %}*/
/*       {{ widget('\\XLite\\View\\Button\\Submit', label=t('Install updates'), style='center regular-main-button') }}*/
/*     </div>*/
/* */
/*   </div>*/
/* */
/* </form>*/
/* */
