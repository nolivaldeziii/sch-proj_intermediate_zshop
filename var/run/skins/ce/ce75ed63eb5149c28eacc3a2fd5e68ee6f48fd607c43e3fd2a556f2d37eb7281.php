<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/buttons/parts/cancel.twig */
class __TwigTemplate_6782083317352b1032eb10220c8e2dd1aa25717d9354389783acf8ea6af4b470 extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/buttons/parts/cancel.twig";
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
/*  # @ListChild (list="upgrade.step.ready_to_install.buttons.sections.left", weight="100")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Button\\Link', label=t('Cancel'), location=url('main')) }}*/
/* */
