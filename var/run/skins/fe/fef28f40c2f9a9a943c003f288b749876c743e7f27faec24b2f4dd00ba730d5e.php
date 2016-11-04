<?php

/* items_list/model/table/left_actions.twig */
class __TwigTemplate_a30fc194457a9eed56439c47a5cd1e986d2500f99cf533d8e5e74331940f41ec extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLeftActions", array(), "method"));
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
        foreach ($context['_seq'] as $context["i"] => $context["tpl"]) {
            // line 6
            echo "  <div class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getActionCellClass", array(0 => $context["i"], 1 => $context["tpl"]), "method"), "html", null, true);
            echo "\">";
            $this->loadTemplate($context["tpl"], "items_list/model/table/left_actions.twig", 6)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tpl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "<div class=\"separator\"></div>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/left_actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  39 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Left actions*/
/*  #}*/
/* */
/* {% for i, tpl in this.getLeftActions() %}*/
/*   <div class="{{ this.getActionCellClass(i, tpl) }}">{% include tpl %}</div>*/
/* {% endfor %}*/
/* <div class="separator"></div>*/
/* */
