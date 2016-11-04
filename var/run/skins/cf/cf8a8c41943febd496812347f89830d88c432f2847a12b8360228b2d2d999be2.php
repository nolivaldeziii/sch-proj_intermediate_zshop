<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/Sale/product/parts/sale_price_block.twig */
class __TwigTemplate_ba983637d89f14c7493b3662086a71d7e07a84a7bb19b9ac5da84d44f2c70d48 extends \XLite\Core\Templating\Twig\Template
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
<tr>
  <td class=\"name-attribute\">&nbsp;</td>
  <td class=\"star\">&nbsp;</td>
  <td class=\"value-attribute\">
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Sale\\View\\ProductModifySale"))), "html", null, true);
        echo "
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/Sale/product/parts/sale_price_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 11,  19 => 6,);
    }
}
/* {##*/
/*  # Product element*/
/*  #*/
/*  # @ListChild (list="product.modify.list", weight="560")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td class="name-attribute">&nbsp;</td>*/
/*   <td class="star">&nbsp;</td>*/
/*   <td class="value-attribute">*/
/*     {{ widget('\\XLite\\Module\\CDev\\Sale\\View\\ProductModifySale') }}*/
/*   </td>*/
/* </tr>*/
/* */
