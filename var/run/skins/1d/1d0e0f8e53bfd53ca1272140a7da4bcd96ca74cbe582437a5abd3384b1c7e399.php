<?php

/* items_list/model/table/right_actions.twig */
class __TwigTemplate_b3e0369a091372c2f7e7f30111bfb34282fa367b712dc92505e8c85d6e6ceca1 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"separator\"></div>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRightActions", array(), "method"));
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
            // line 7
            echo "  <div class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getActionCellClass", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "i", array()), 1 => $context["tpl"]), "method"), "html", null, true);
            echo "\">";
            $this->loadTemplate($context["tpl"], "items_list/model/table/right_actions.twig", 7)->display($context);
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
    }

    public function getTemplateName()
    {
        return "items_list/model/table/right_actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Right actions*/
/*  #}*/
/* */
/* <div class="separator"></div>*/
/* {% for tpl in this.getRightActions() %}*/
/*   <div class="{{ this.getActionCellClass(this.i, tpl) }}">{% include tpl %}</div>*/
/* {% endfor %}*/
/* */
