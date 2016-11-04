<?php

/* top_links/body.twig */
class __TwigTemplate_2130ec41d42db5d791b5c9d821ef39c880dae51689168a3a774320921357d17a extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"top-links\">
  <ul>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItems", array(), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "      ";
            if (($this->getAttribute($context["loop"], "index", array()) != 1)) {
                // line 8
                echo "        <li class=\"separator\"><div></div></li>
      ";
            }
            // line 10
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "display", array(), "method"), "html", null, true);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "top_links"))), "html", null, true);
        echo "
  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "top_links/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  47 => 10,  43 => 8,  40 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Top links*/
/*  #}*/
/* <div id="top-links">*/
/*   <ul>*/
/*     {% for item in this.getItems() %}*/
/*       {% if loop.index != 1 %}*/
/*         <li class="separator"><div></div></li>*/
/*       {% endif %}*/
/*       {{ item.display() }}*/
/*     {% endfor %}*/
/*     {{ widget_list('top_links') }}*/
/*   </ul>*/
/* </div>*/
/* */
