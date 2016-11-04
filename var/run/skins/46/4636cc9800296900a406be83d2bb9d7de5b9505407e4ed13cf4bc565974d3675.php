<?php

/* items_list/model/table_content.twig */
class __TwigTemplate_6b9fcc2f44810c3f1efef60ca129490385ec8b5d381fa187adcddd930b1c1ffb extends \XLite\Core\Templating\Twig\Template
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
<a name=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAnchorName", array(), "method"), "html", null, true);
        echo "\" class=\"list-anchor\"></a>
<div ";
        // line 6
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerAttributesAsString", array(), "method");
        echo ">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsListParams", array(), "method")), "method"), "html", null, true);
        echo "
  ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isHeaderVisible", array(), "method")) {
            // line 9
            echo "    <div class=\"list-header\">
      ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTopActions", array(), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tpl"]) {
                // line 11
                echo "        <div class=\"button-container\">";
                $this->loadTemplate($context["tpl"], "items_list/model/table_content.twig", 11)->display($context);
                echo "</div>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tpl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "header", "type" => "inherited"))), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 16
        echo "
  ";
        // line 17
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPageBodyVisible", array(), "method")) {
            // line 18
            echo "    ";
            $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageBodyTemplate", array(), "method"), "items_list/model/table_content.twig", 18)->display($context);
            // line 19
            echo "  ";
        }
        // line 20
        echo "  ";
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPageBodyVisible", array(), "method")) {
            // line 21
            echo "    <div class=\"no-items\">
      ";
            // line 22
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEmptyListTemplateVisible", array(), "method")) {
                // line 23
                echo "        ";
                $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEmptyListTemplate", array(), "method"), "items_list/model/table_content.twig", 23)->display($context);
                // line 24
                echo "      ";
            }
            // line 25
            echo "    </div>
  ";
        }
        // line 27
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPagerVisible", array(), "method")) {
            // line 28
            echo "    <div class=\"table-pager\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "pager", array()), "display", array(), "method"), "html", null, true);
            echo "</div>
  ";
        }
        // line 30
        echo "
  ";
        // line 31
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFooterVisible", array(), "method")) {
            // line 32
            echo "    <div class=\"list-footer\">
      ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBottomActions", array(), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tpl"]) {
                // line 34
                echo "        <div class=\"button-container\">";
                $this->loadTemplate($context["tpl"], "items_list/model/table_content.twig", 34)->display($context);
                echo "</div>
      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tpl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "footer", "type" => "inherited"))), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 39
        echo "
</div>

";
        // line 42
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPanelVisible", array(), "method")) {
            // line 43
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPanelClass", array(), "method")))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/model/table_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 43,  172 => 42,  167 => 39,  160 => 36,  143 => 34,  126 => 33,  123 => 32,  121 => 31,  118 => 30,  112 => 28,  109 => 27,  105 => 25,  102 => 24,  99 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  85 => 18,  83 => 17,  80 => 16,  73 => 13,  56 => 11,  39 => 10,  36 => 9,  34 => 8,  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Table model list*/
/*  #}*/
/* */
/* <a name="{{ this.getAnchorName() }}" class="list-anchor"></a>*/
/* <div {{ this.getContainerAttributesAsString()|raw }}>*/
/*   {{ this.displayCommentedData(this.getItemsListParams()) }}*/
/*   {% if this.isHeaderVisible() %}*/
/*     <div class="list-header">*/
/*       {% for tpl in this.getTopActions() %}*/
/*         <div class="button-container">{% include tpl %}</div>*/
/*       {% endfor %}*/
/*       {{ widget_list('header', type='inherited') }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if this.isPageBodyVisible() %}*/
/*     {% include this.getPageBodyTemplate() %}*/
/*   {% endif %}*/
/*   {% if not this.isPageBodyVisible() %}*/
/*     <div class="no-items">*/
/*       {% if this.isEmptyListTemplateVisible() %}*/
/*         {% include this.getEmptyListTemplate() %}*/
/*       {% endif %}*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if this.isPagerVisible() %}*/
/*     <div class="table-pager">{{ this.pager.display() }}</div>*/
/*   {% endif %}*/
/* */
/*   {% if this.isFooterVisible() %}*/
/*     <div class="list-footer">*/
/*       {% for tpl in this.getBottomActions() %}*/
/*         <div class="button-container">{% include tpl %}</div>*/
/*       {% endfor %}*/
/*       {{ widget_list('footer', type='inherited') }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
/* {% if this.isPanelVisible() %}*/
/*   {{ widget(this.getPanelClass()) }}*/
/* {% endif %}*/
/* */
