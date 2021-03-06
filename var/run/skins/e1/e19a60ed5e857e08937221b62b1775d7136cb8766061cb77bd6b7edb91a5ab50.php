<?php

/* form_field/form_field.twig */
class __TwigTemplate_d44a43ab798136a38758b95fa987605567bbee2a566747a8d886085f07d724cf extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "fieldOnly"), "method")) {
            // line 6
            echo "  <div class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabelContainerClass", array(), "method"), "html", null, true);
            echo "\">
    <label for=\"";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldId", array(), "method"), "html", null, true);
            echo "\">
      ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormattedLabel", array(), "method"), "html", null, true);
            echo "
      ";
            // line 9
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasLabelHelp", array(), "method")) {
                // line 10
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Tooltip", "text" => call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "labelHelp"), "method"))), "helpWidget" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "labelHelpWidget"), "method"), "isImageTag" => "true", "className" => "help-icon"))), "html", null, true);
                echo "
      ";
            }
            // line 12
            echo "    </label>
  </div>
  <div class=\"star\">
    ";
            // line 15
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "required"), "method")) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
            // line 16
            echo "  </div>
";
        }
        // line 18
        echo "
<div class=\"";
        // line 19
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getValueContainerClass", array(), "method"), "html", null, true);
        echo "\">
  ";
        // line 20
        $this->loadTemplate((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDir", array(), "method") . "/") . $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldTemplate", array(), "method")), "form_field/form_field.twig", 20)->display($context);
        // line 21
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasHelp", array(), "method")) {
            // line 22
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Tooltip", "text" => call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "help"), "method"))), "helpWidget" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "helpWidget"), "method"), "isImageTag" => "true", "className" => "help-icon"))), "html", null, true);
            echo "
  ";
        }
        // line 24
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "comment"), "method")) {
            // line 25
            echo "    <div class=\"form-field-comment ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldId", array(), "method"), "html", null, true);
            echo "-comment\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "comment"), "method"))), "html", null, true);
            echo "</div>
  ";
        }
        // line 27
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormFieldJSData", array(), "method")) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFormFieldJSData", array(), "method")), "method"), "html", null, true);
        }
        // line 28
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getInlineJSCode", array(), "method")) {
            // line 29
            echo "    <script type=\"text/javascript\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getInlineJSCode", array(), "method"), "html", null, true);
            echo "</script>
  ";
        }
        // line 31
        echo "</div>

";
        // line 33
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "fieldOnly"), "method")) {
            // line 34
            echo "  <div class=\"clear\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "form_field/form_field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 34,  107 => 33,  103 => 31,  97 => 29,  94 => 28,  89 => 27,  81 => 25,  78 => 24,  72 => 22,  69 => 21,  67 => 20,  63 => 19,  60 => 18,  56 => 16,  50 => 15,  45 => 12,  39 => 10,  37 => 9,  33 => 8,  29 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #}*/
/* */
/* {% if not this.getParam('fieldOnly') %}*/
/*   <div class="{{ this.getLabelContainerClass() }}">*/
/*     <label for="{{ this.getFieldId() }}">*/
/*       {{ this.getFormattedLabel() }}*/
/*       {% if this.hasLabelHelp() %}*/
/*         {{ widget('\\XLite\\View\\Tooltip', text=t(this.getParam('labelHelp')), helpWidget=this.getParam('labelHelpWidget'), isImageTag='true', className='help-icon') }}*/
/*       {% endif %}*/
/*     </label>*/
/*   </div>*/
/*   <div class="star">*/
/*     {% if this.getParam('required') %}*{% else %}&nbsp;{% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
/* <div class="{{ this.getValueContainerClass() }}">*/
/*   {% include this.getDir() ~ '/' ~ this.getFieldTemplate() %}*/
/*   {% if this.hasHelp() %}*/
/*     {{ widget('\\XLite\\View\\Tooltip', text=t(this.getParam('help')), helpWidget=this.getParam('helpWidget'), isImageTag='true', className='help-icon') }}*/
/*   {% endif %}*/
/*   {% if this.getParam('comment') %}*/
/*     <div class="form-field-comment {{ this.getFieldId() }}-comment">{{ t(this.getParam('comment')) }}</div>*/
/*   {% endif %}*/
/*   {% if this.getFormFieldJSData() %}{{ this.displayCommentedData(this.getFormFieldJSData()) }}{% endif %}*/
/*   {% if this.getInlineJSCode() %}*/
/*     <script type="text/javascript">{{ this.getInlineJSCode() }}</script>*/
/*   {% endif %}*/
/* </div>*/
/* */
/* {% if not this.getParam('fieldOnly') %}*/
/*   <div class="clear"></div>*/
/* {% endif %}*/
/* */
