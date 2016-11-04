<?php

/* /var/www/next/output/xcart/src/skins/customer/order/search/parts/conditions.twig */
class __TwigTemplate_1d35795685906e900349bef3c887c2da05b6d872d561544b44368dba6c66a07d extends \XLite\Core\Templating\Twig\Template
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
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/search/parts/conditions.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Orders search conditions block*/
/*  #*/
/*  # @ListChild (list="orders.search.base", weight="20")*/
/*  #}*/
/* */
/*  {#*/
/*  TODO: reimplement search orders form*/
/* */
/* <div class="search-orders-box">*/
/*   <div class="search-orders-conditions">*/
/*     <a IF="getTotalCount()" href="javascript:void(0);" onclick="javascript:core.toggleText(this,'Hide filter options','#advanced_search_order_options');">{t(#Show filter options#)}</a>*/
/*   </div>*/
/* */
/*   <div id="advanced_search_order_options" style="display:none;">*/
/*     <widget class="\XLite\View\Form\Order\Search" name="order_search_form" />*/
/*       <table cellspacing="0" class="form-table search-orders">*/
/*       <list name="orders.search.conditions" />*/
/*       </table>*/
/*     <widget name="order_search_form" end />*/
/*     <list name="orders.search.panel" />*/
/*   </div>*/
/* </div>*/
/* */
/* #}*/
/* */
