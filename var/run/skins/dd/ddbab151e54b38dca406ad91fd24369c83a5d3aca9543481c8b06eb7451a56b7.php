<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/messages.twig */
class __TwigTemplate_648df6480884bfa8d2f3e9a4892a3927a1ca7719154dc8926302d6e3bca508d5 extends \XLite\Core\Templating\Twig\Template
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
 <div class=\"incompatible-status-message\">
     ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The module is incompatible with the new core version going to be installed")), "html", null, true);
        echo "
 </div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Entries list*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_update.sections", weight="300")*/
/*  #}*/
/* */
/*  <div class="incompatible-status-message">*/
/*      {{ t('The module is incompatible with the new core version going to be installed') }}*/
/*  </div>*/
/* */
