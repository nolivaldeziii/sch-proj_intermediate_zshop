<?php

/* main_center/page_container_parts/header_parts/header_search.twig */
class __TwigTemplate_ce3fd6cc5cd5abee3046d5099571742bd02e57030b7cb011a1f896fef70044de extends \XLite\Core\Templating\Twig\Template
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
<div ";
        // line 5
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getContainerTagAttributes", array(), "method")), "method");
        echo ">

  ";
        // line 7
        $this->startForm("XLite\\View\\Form\\HeaderSearch");        // line 8
        echo "
    <div class=\"input-group\">
      <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Search in")), "html", null, true);
        echo " <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMenuItems", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "            <li><a href=\"#\" data-code=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "code", array()), "html", null, true);
            echo "\" data-placeholder=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </ul>
      </div>
      <input type=\"text\" class=\"form-control\" name=\"substring\" value=\"\" placeholder=\"";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currentItem", array()), "placeholder", array()), "html", null, true);
        echo "\" />
    </div>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currentItem", array()), "code", array()), "html", null, true);
        echo "\" />

  ";
        $this->endForm();        // line 23
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "main_center/page_container_parts/header_parts/header_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  64 => 20,  59 => 18,  55 => 16,  42 => 14,  38 => 13,  33 => 11,  28 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Header search*/
/*  #}*/
/* */
/* <div {{ this.printTagAttributes(this.getContainerTagAttributes())|raw }}>*/
/* */
/*   {% form 'XLite\\View\\Form\\HeaderSearch' %}*/
/* */
/*     <div class="input-group">*/
/*       <div class="input-group-btn">*/
/*         <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ t('Search in') }} <span class="caret"></span></button>*/
/*         <ul class="dropdown-menu" role="menu">*/
/*           {% for item in this.getMenuItems() %}*/
/*             <li><a href="#" data-code="{{ item.code }}" data-placeholder="{{ item.placeholder }}">{{ item.name }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       <input type="text" class="form-control" name="substring" value="" placeholder="{{ this.currentItem.placeholder }}" />*/
/*     </div>*/
/*     <input type="hidden" name="code" value="{{ this.currentItem.code }}" />*/
/* */
/*   {% endform %}*/
/* */
/* </div>*/
/* */
