<?php

/* items_list/model/table/order/cell.profile.twig */
class __TwigTemplate_c5fc4f83a2fabfefc6dcb404eb41e7abc4b8c1abb472b1a750349a5c9e38bb7b extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "origProfile", array()), "anonymous", array())) {
            // line 7
            echo "  <div class=\"profile-anonymous-icon\" title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Anonymous Customer")), "html", null, true);
            echo "\">
    ";
            // line 8
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSVGImage", array(0 => "images/anonymous.svg"), "method");
            echo "
  </div>
";
        }
        // line 11
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "origProfile", array()), "anonymous", array())) {
            // line 12
            echo "  <div class=\"profile-icon\">&nbsp;</div>
";
        }
        // line 14
        echo "
<div class=\"profile-box\">
  ";
        // line 16
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isProfileRemoved", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method")) {
            // line 17
            echo "    <span class=\"removed-profile-name\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getColumnValue", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "column", array()), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method"), "html", null, true);
            echo "</span>
  ";
        } else {
            // line 19
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "profile", "", array("profile_id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "origProfile", array()), "getProfileId", array(), "method")))), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getColumnValue", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "column", array()), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method"), "html", null, true);
            echo "</a>
  ";
        }
        // line 21
        echo "  ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "profile", array())) {
            // line 22
            echo "    <span class=\"profile-email\"><a href=\"mailto:";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "profile", array()), "getLogin", array(), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "profile", array()), "getLogin", array(), "method"), "html", null, true);
            echo "</a></span>
  ";
        }
        // line 24
        echo "  ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "column", array()), "noWrap", array())) {
            // line 25
            echo "    <img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
            echo "\" class=\"right-fade\" alt=\"\" />
  ";
        }
        // line 27
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/order/cell.profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 27,  76 => 25,  73 => 24,  65 => 22,  62 => 21,  54 => 19,  48 => 17,  46 => 16,  42 => 14,  38 => 12,  36 => 11,  30 => 8,  25 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Profile cell*/
/*  #}*/
/* */
/* */
/* {% if this.entity.origProfile.anonymous %}*/
/*   <div class="profile-anonymous-icon" title="{{ t('Anonymous Customer') }}">*/
/*     {{ this.getSVGImage('images/anonymous.svg')|raw }}*/
/*   </div>*/
/* {% endif %}*/
/* {% if not this.entity.origProfile.anonymous %}*/
/*   <div class="profile-icon">&nbsp;</div>*/
/* {% endif %}*/
/* */
/* <div class="profile-box">*/
/*   {% if this.isProfileRemoved(this.entity) %}*/
/*     <span class="removed-profile-name">{{ this.getColumnValue(this.column, this.entity) }}</span>*/
/*   {% else %}*/
/*     <a href="{{ url('profile', '', {'profile_id': this.entity.origProfile.getProfileId()}) }}">{{ this.getColumnValue(this.column, this.entity) }}</a>*/
/*   {% endif %}*/
/*   {% if this.entity.profile %}*/
/*     <span class="profile-email"><a href="mailto:{{ this.entity.profile.getLogin() }}">{{ this.entity.profile.getLogin() }}</a></span>*/
/*   {% endif %}*/
/*   {% if this.column.noWrap %}*/
/*     <img src="{{ asset('images/spacer.gif') }}" class="right-fade" alt="" />*/
/*   {% endif %}*/
/* </div>*/
/* */
