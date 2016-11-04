<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header_settings/settings.twig */
class __TwigTemplate_d065f6e287afa48598f1f4c7ed69edbe4025f83e12ae46c69f56ed0eebe90e20 extends \XLite\Core\Templating\Twig\Template
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
  <li class=\"settings\">
    <div>
      <a href=\"#settings-panel\" class=\"item-title\">
        <span>";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Settings")), "html", null, true);
        echo "</span>
        <span class=\"mm-next\"></span>
      </a>

      ";
        // line 14
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "slidebar.settings"), "method")) {
            // line 15
            echo "        <div class=\"Panel\" id=\"settings-panel\">
          <ul class=\"Inset\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "slidebar.settings"), "method"));
            foreach ($context['_seq'] as $context["index"] => $context["w"]) {
                // line 18
                echo "              ";
                if ($this->getAttribute($context["w"], "isVisible", array(), "method")) {
                    // line 19
                    echo "                <li>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", array(), "method"), "html", null, true);
                    echo "</li>
              ";
                }
                // line 21
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "          </ul>
        </div>
      ";
        }
        // line 25
        echo "    </div>
  </li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header_settings/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  57 => 22,  51 => 21,  45 => 19,  42 => 18,  38 => 17,  34 => 15,  32 => 14,  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # Account link*/
/*  #*/
/*  # @ListChild (list="slidebar.additional-menu", weight="390")*/
/*  #}*/
/* */
/*   <li class="settings">*/
/*     <div>*/
/*       <a href="#settings-panel" class="item-title">*/
/*         <span>{{ t('Settings') }}</span>*/
/*         <span class="mm-next"></span>*/
/*       </a>*/
/* */
/*       {% if this.getViewList('slidebar.settings') %}*/
/*         <div class="Panel" id="settings-panel">*/
/*           <ul class="Inset">*/
/*             {% for index, w in this.getViewList('slidebar.settings') %}*/
/*               {% if w.isVisible() %}*/
/*                 <li>{{ w.display() }}</li>*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </li>*/
/* */
