<?php

/* items_list\empty.twig */
class __TwigTemplate_b913b2d7f7adc45f6e348e03017ae9a91d2b9eb5e805cb0ee240ded668ad3e6e extends \XLite\Core\Templating\Twig\Template
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
<div class=\"empty-list\">";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("No items found.")), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "items_list\\empty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #}*/
/* */
/* <div class="empty-list">{{ t('No items found.') }}</div>*/
/* */
