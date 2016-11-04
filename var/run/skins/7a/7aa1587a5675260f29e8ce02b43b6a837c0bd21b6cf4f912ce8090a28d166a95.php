<?php

/* upgrade/install_updates/parts/form/icon.twig */
class __TwigTemplate_4e3d72c840da69cec6b64ab597fc967f644adaaa4d1e4ba2cfa9f696c3b74d19 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"module-icon\">
  <img src=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getPublicIconURL", array(), "method"), "html", null, true);
        echo "\" alt=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getName", array(), "method"), "html", null, true);
        echo "\" />
</div>
";
    }

    public function getTemplateName()
    {
        return "upgrade/install_updates/parts/form/icon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Upgrade entry icon*/
/*  #*/
/*  # @ListChild (list="upgrade.install_updates.sections.form", weight="100")*/
/*  #}*/
/* <div class="module-icon">*/
/*   <img src="{{ this.entry.getPublicIconURL() }}" alt="{{ this.entry.getName() }}" />*/
/* </div>*/
/* */
