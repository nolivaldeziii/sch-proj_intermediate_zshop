<?php

/* rss\body.twig */
class __TwigTemplate_193175745166f8179c4630cae679265a9bd43676d3ac0d0bbeaa70fbf6ebe8f9 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"feeds clearfix\">
  <h2>";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("X-Cart News")), "html", null, true);
        echo "</h2>
  <ul>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFeeds", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 8
            echo "      <li>
        <h3>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatDate", array(0 => $this->getAttribute($context["feed"], "date", array())), "method"), "html", null, true);
            echo "</h3>
        <a href=\"";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  </ul>
  <a href=\"";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRSSFeedUrl", array(), "method"), "html", null, true);
        echo "\" target=\"_blank\" class=\"rss-feed\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("RSS feed")), "html", null, true);
        echo "</a>
  <a href=\"";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBlogUrl", array(), "method"), "html", null, true);
        echo "\" target=\"_blank\" class=\"blog\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Our Blog")), "html", null, true);
        echo "</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "rss\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  52 => 14,  49 => 13,  38 => 10,  34 => 9,  31 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # RSS*/
/*  #}*/
/* <div class="feeds clearfix">*/
/*   <h2>{{ t('X-Cart News') }}</h2>*/
/*   <ul>*/
/*     {% for feed in this.getFeeds() %}*/
/*       <li>*/
/*         <h3>{{ this.formatDate(feed.date) }}</h3>*/
/*         <a href="{{ feed.link }}" target="_blank">{{ feed.title }}</a>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <a href="{{ this.getRSSFeedUrl() }}" target="_blank" class="rss-feed">{{ t('RSS feed') }}</a>*/
/*   <a href="{{ this.getBlogUrl() }}" target="_blank" class="blog">{{ t('Our Blog') }}</a>*/
/* </div>*/
/* */
