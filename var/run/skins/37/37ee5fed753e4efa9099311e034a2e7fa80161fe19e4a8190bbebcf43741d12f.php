<?php

/* /var/www/next/output/xcart/src/skins/mail/common/order/invoice/parts/items/item.name.twig */
class __TwigTemplate_03babdb6c43ba71218360f3bca21978bfcd09a1ffa5746c47b814edee704c975 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item\">
  <strong class=\"item-name\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getName", array(), "method"), "html", null, true);
        echo "</strong>

  ";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isViewListVisible", array(0 => "invoice.item.name", 1 => array("item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()))), "method")) {
            // line 10
            echo "    <ul class=\"subitem additional simple-list\">
    ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.item.name", "item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())))), "html", null, true);
            echo "
    </ul>
  ";
        }
        // line 14
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/mail/common/order/invoice/parts/items/item.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 14,  32 => 11,  29 => 10,  27 => 9,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Name item cell*/
/*  #*/
/*  # @ListChild (list="invoice.item", weight="10")*/
/*  #}*/
/* <td class="item">*/
/*   <strong class="item-name">{{ this.item.getName() }}</strong>*/
/* */
/*   {% if this.isViewListVisible('invoice.item.name', {'item': this.item}) %}*/
/*     <ul class="subitem additional simple-list">*/
/*     {{ widget_list('invoice.item.name', item=this.item) }}*/
/*     </ul>*/
/*   {% endif %}*/
/* </td>*/
/* */
