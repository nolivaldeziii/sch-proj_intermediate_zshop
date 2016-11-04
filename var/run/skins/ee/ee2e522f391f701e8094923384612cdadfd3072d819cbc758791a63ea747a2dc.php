<?php

/* items_list\model/table\body.twig */
class __TwigTemplate_f70016e8ffa35923292a4cb6101c8b2357b0b35425a626cd14f55f2fa8ec1f46 extends \XLite\Core\Templating\Twig\Template
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
<table class=\"list";
        // line 5
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasResults", array(), "method")) {
            echo " list-no-items";
        }
        echo "\" cellspacing=\"0\">

  ";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isTableHeaderVisible", array(), "method")) {
            // line 8
            echo "    <thead>
      <tr>
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getColumns", array(), "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 11
                echo "          <th class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHeadClass", array(0 => $context["column"]), "method"), "html", null, true);
                echo "\">
            ";
                // line 12
                $this->loadTemplate("items_list/model/table/parts/head.cell.twig", "items_list\\model/table\\body.twig", 12)->display($context);
                // line 13
                echo "          </th>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      </tr>
    </thead>
  ";
        }
        // line 18
        echo "
  ";
        // line 19
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isHeadSearchVisible", array(), "method")) {
            // line 20
            echo "    <tbody class=\"head-search\">
      ";
            // line 21
            $this->loadTemplate("items_list/model/table/parts/head_search.twig", "items_list\\model/table\\body.twig", 21)->display($context);
            // line 22
            echo "    </tbody>
  ";
        }
        // line 24
        echo "
  ";
        // line 25
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isTopInlineCreation", array(), "method")) {
            // line 26
            echo "    <tbody class=\"create top-create\">
      ";
            // line 27
            $this->loadTemplate("items_list/model/table/parts/create_box.twig", "items_list\\model/table\\body.twig", 27)->display($context);
            // line 28
            echo "    </tbody>
  ";
        }
        // line 30
        echo "
  <tbody class=\"lines\">
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageData", array(), "method"));
        foreach ($context['_seq'] as $context["idx"] => $context["entity"]) {
            // line 33
            echo "      <tr ";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLineAttributes", array(0 => $context["idx"], 1 => $context["entity"]), "method")), "method");
            echo ">
        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getColumns", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 35
                echo "          <td class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getColumnClass", array(0 => $context["column"], 1 => $context["entity"]), "method"), "html", null, true);
                echo "\">
            <div class=\"cell\">
              ";
                // line 37
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isTemplateColumnVisible", array(0 => $context["column"], 1 => $context["entity"]), "method")) {
                    // line 38
                    echo "                ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => $this->getAttribute($context["column"], "template", array()), "idx" => $context["idx"], "entity" => $context["entity"], "column" => $context["column"], "editOnly" => $this->getAttribute($context["column"], "editOnly", array()), "viewOnly" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isStatic", array(), "method")))), "html", null, true);
                    echo "
              ";
                }
                // line 40
                echo "              ";
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isClassColumnVisible", array(0 => $context["column"], 1 => $context["entity"]), "method")) {
                    // line 41
                    echo "                ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute($context["column"], "class", array()), "idx" => $context["idx"], "entity" => $context["entity"], "column" => $context["column"], "itemsList" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSelf", array(), "method"), "fieldName" => $this->getAttribute($context["column"], "code", array()), "fieldParams" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "preprocessFieldParams", array(0 => $context["column"], 1 => $context["entity"]), "method"), "editOnly" => $this->getAttribute($context["column"], "editOnly", array()), "viewOnly" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isStatic", array(), "method")))), "html", null, true);
                    echo "
              ";
                }
                // line 43
                echo "              ";
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEditLinkEnabled", array(0 => $context["column"], 1 => $context["entity"]), "method")) {
                    // line 44
                    echo "              <div class=\"entity-edit-link\" ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEditLinkAttributes", array(0 => $context["entity"], 1 => $context["column"]), "method"), "html", null, true);
                    echo ">
                <a href=\"";
                    // line 45
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "buildEntityURL", array(0 => $context["entity"], 1 => $context["column"]), "method"), "html", null, true);
                    echo "\" class=\"regular-button\" role=\"button\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEditLinkLabel", array(0 => $context["entity"]), "method"), "html", null, true);
                    echo "</a>
              </div>
              ";
                }
                // line 48
                echo "              ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCellListNamePart", array(0 => "cell", 1 => $context["column"]), "method"), "type" => "inherited", "column" => $context["column"], "entity" => $context["entity"]))), "html", null, true);
                echo "
            </div>
          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "      </tr>
      ";
            // line 53
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "row", "type" => "inherited", "idx" => $context["idx"], "entity" => $context["entity"]))), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "  </tbody>

  <tbody class=\"no-items\" ";
        // line 57
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasResults", array(), "method")) {
            echo "style=\"display: none;\"";
        }
        echo ">
    <tr>
      <td colspan=\"";
        // line 59
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getColumnsCount", array(), "method"), "html", null, true);
        echo "\">";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEmptyListTemplateVisible", array(), "method")) {
            $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEmptyListTemplate", array(), "method"), "items_list\\model/table\\body.twig", 59)->display($context);
        }
        echo "</td>
    </tr>
  </tbody>

  ";
        // line 63
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isBottomInlineCreation", array(), "method")) {
            // line 64
            echo "    <tbody class=\"create bottom-create\">
      ";
            // line 65
            $this->loadTemplate("items_list/model/table/parts/create_box.twig", "items_list\\model/table\\body.twig", 65)->display($context);
            // line 66
            echo "    </tbody>
  ";
        }
        // line 68
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "items_list\\model/table\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 68,  214 => 66,  212 => 65,  209 => 64,  207 => 63,  196 => 59,  189 => 57,  185 => 55,  177 => 53,  174 => 52,  163 => 48,  155 => 45,  150 => 44,  147 => 43,  141 => 41,  138 => 40,  132 => 38,  130 => 37,  124 => 35,  120 => 34,  115 => 33,  111 => 32,  107 => 30,  103 => 28,  101 => 27,  98 => 26,  96 => 25,  93 => 24,  89 => 22,  87 => 21,  84 => 20,  82 => 19,  79 => 18,  74 => 15,  59 => 13,  57 => 12,  52 => 11,  35 => 10,  31 => 8,  29 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Common table-based model list*/
/*  #}*/
/* */
/* <table class="list{% if not this.hasResults() %} list-no-items{% endif %}" cellspacing="0">*/
/* */
/*   {% if this.isTableHeaderVisible() %}*/
/*     <thead>*/
/*       <tr>*/
/*         {% for column in this.getColumns() %}*/
/*           <th class="{{ this.getHeadClass(column) }}">*/
/*             {% include 'items_list/model/table/parts/head.cell.twig' %}*/
/*           </th>*/
/*         {% endfor %}*/
/*       </tr>*/
/*     </thead>*/
/*   {% endif %}*/
/* */
/*   {% if this.isHeadSearchVisible() %}*/
/*     <tbody class="head-search">*/
/*       {% include 'items_list/model/table/parts/head_search.twig' %}*/
/*     </tbody>*/
/*   {% endif %}*/
/* */
/*   {% if this.isTopInlineCreation() %}*/
/*     <tbody class="create top-create">*/
/*       {% include 'items_list/model/table/parts/create_box.twig' %}*/
/*     </tbody>*/
/*   {% endif %}*/
/* */
/*   <tbody class="lines">*/
/*     {% for idx, entity in this.getPageData() %}*/
/*       <tr {{ this.printTagAttributes(this.getLineAttributes(idx, entity))|raw }}>*/
/*         {% for column in this.getColumns() %}*/
/*           <td class="{{ this.getColumnClass(column, entity) }}">*/
/*             <div class="cell">*/
/*               {% if this.isTemplateColumnVisible(column, entity) %}*/
/*                 {{ widget(template=column.template, idx=idx, entity=entity, column=column, editOnly=column.editOnly, viewOnly=this.isStatic()) }}*/
/*               {% endif %}*/
/*               {% if this.isClassColumnVisible(column, entity) %}*/
/*                 {{ widget(column.class, idx=idx, entity=entity, column=column, itemsList=this.getSelf(), fieldName=column.code, fieldParams=this.preprocessFieldParams(column, entity), editOnly=column.editOnly, viewOnly=this.isStatic()) }}*/
/*               {% endif %}*/
/*               {% if this.isEditLinkEnabled(column, entity) %}*/
/*               <div class="entity-edit-link" {{ this.getEditLinkAttributes(entity, column) }}>*/
/*                 <a href="{{ this.buildEntityURL(entity, column) }}" class="regular-button" role="button">{{ this.getEditLinkLabel(entity) }}</a>*/
/*               </div>*/
/*               {% endif %}*/
/*               {{ widget_list(this.getCellListNamePart('cell', column), type='inherited', column=column, entity=entity) }}*/
/*             </div>*/
/*           </td>*/
/*         {% endfor %}*/
/*       </tr>*/
/*       {{ widget_list('row', type='inherited', idx=idx, entity=entity) }}*/
/*     {% endfor %}*/
/*   </tbody>*/
/* */
/*   <tbody class="no-items" {% if this.hasResults() %}style="display: none;"{% endif %}>*/
/*     <tr>*/
/*       <td colspan="{{ this.getColumnsCount() }}">{% if this.isEmptyListTemplateVisible() %}{% include this.getEmptyListTemplate() %}{% endif %}</td>*/
/*     </tr>*/
/*   </tbody>*/
/* */
/*   {% if this.isBottomInlineCreation() %}*/
/*     <tbody class="create bottom-create">*/
/*       {% include 'items_list/model/table/parts/create_box.twig' %}*/
/*     </tbody>*/
/*   {% endif %}*/
/* */
/* </table>*/
/* */
