<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/buttons/parts/cancel.twig */
class __TwigTemplate_9cd7404aa9072aba657df053fe94fce9ce93f12f665ea38f108e86ed54353b8f extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Link", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Cancel")), "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "main"))))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/buttons/parts/cancel.twig";
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
/*  # The "Cancel" button*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.buttons.sections", weight="100")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Button\\Link', label=t('Cancel'), location=url('main')) }}*/
/* */
