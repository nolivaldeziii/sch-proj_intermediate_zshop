<?php

/* top_links/version_notes/parts/upgrade.twig */
class __TwigTemplate_1700e44c7b775f5d60d8d7cba801f768756e2779eb526c683a5423cf78d5dcc0 extends \XLite\Core\Templating\Twig\Template
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
  <div class=\"box\">
    <span class=\"warning\">";
        // line 7
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSVGImage", array(0 => "images/info.svg"), "method");
        echo "</span>
    ";
        // line 8
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCoreUpgradeAvailable", array(), "method") &&  !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "areUpdatesAvailable", array(), "method"))) {
            // line 9
            echo "      <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "upgrade", "start_upgrade")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Upgrade available")), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 11
            echo "      <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "upgrade", "", array("mode" => "install_updates"))), "html", null, true);
            echo "\" title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Updates for the X-Cart core and/or installed modules are available")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Updates are available")), "html", null, true);
            echo "</a>
    ";
        }
        // line 13
        echo "    <a class=\"close\">";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displaySVGImage", array(0 => "images/icon-close-round.svg"), "method");
        echo "</a>
  </div>
  <div class=\"corner-box\">
    <span class=\"corner\"><a class=\"warning\">";
        // line 16
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSVGImage", array(0 => "images/info.svg"), "method");
        echo "</a></span>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "top_links/version_notes/parts/upgrade.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  51 => 13,  41 => 11,  33 => 9,  31 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # "Upgrade core" link*/
/*  #}*/
/* */
/* <div {{ this.printTagAttributes(this.getContainerTagAttributes())|raw }}>*/
/*   <div class="box">*/
/*     <span class="warning">{{ this.getSVGImage('images/info.svg')|raw }}</span>*/
/*     {% if this.isCoreUpgradeAvailable() and not this.areUpdatesAvailable() %}*/
/*       <a href="{{ url('upgrade', 'start_upgrade') }}">{{ t('Upgrade available') }}</a>*/
/*     {% else %}*/
/*       <a href="{{ url('upgrade', '', {'mode': 'install_updates'}) }}" title="{{ t('Updates for the X-Cart core and/or installed modules are available') }}">{{ t('Updates are available') }}</a>*/
/*     {% endif %}*/
/*     <a class="close">{{ this.displaySVGImage('images/icon-close-round.svg')|raw }}</a>*/
/*   </div>*/
/*   <div class="corner-box">*/
/*     <span class="corner"><a class="warning">{{ this.getSVGImage('images/info.svg')|raw }}</a></span>*/
/*   </div>*/
/* </div>*/
/* */
