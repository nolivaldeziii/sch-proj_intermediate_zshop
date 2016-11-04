<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/button/add_review.twig */
class __TwigTemplate_63300701476090d46498efca32ffdec6a5e6f865cb7a6300500658c7d6aac5ac extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"product-reviews-button\">
    ";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowedAddReview", array(), "method")) {
            // line 8
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\AddReview", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Add review")), "style" => "regular-main-button", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
            echo "
    ";
        }
        // line 10
        echo "    ";
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowedAddReview", array(), "method")) {
            // line 11
            echo "      <div class=\"add-review-button-disabled\">
          ";
            // line 12
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShouldBeALink", array(), "method")) {
                // line 13
                echo "              <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "product_reviews", "", array("product_id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method"), "category_id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getCategoryId", array(), "method")))), "html", null, true);
                echo "\">
                  ";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddReviewMessage", array(), "method"), "html", null, true);
                echo "
              </a>
          ";
            } else {
                // line 17
                echo "              ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddReviewMessage", array(), "method"), "html", null, true);
                echo "
          ";
            }
            // line 19
            echo "      </div>
    ";
        }
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/button/add_review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  55 => 19,  49 => 17,  43 => 14,  38 => 13,  36 => 12,  33 => 11,  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Button 'Add review'*/
/*  #*/
/*  # @ListChild (list="reviews.general", weight="20")*/
/*  #}*/
/* <div id="product-reviews-button">*/
/*     {% if this.isAllowedAddReview() %}*/
/*       {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\AddReview', label=t('Add review'), style='regular-main-button', product=this.product) }}*/
/*     {% endif %}*/
/*     {% if not this.isAllowedAddReview() %}*/
/*       <div class="add-review-button-disabled">*/
/*           {% if this.isShouldBeALink() %}*/
/*               <a href="{{ url('product_reviews', '', {'product_id': this.product.getProductId(), 'category_id': this.product.getCategoryId()}) }}">*/
/*                   {{ this.getAddReviewMessage() }}*/
/*               </a>*/
/*           {% else %}*/
/*               {{ this.getAddReviewMessage() }}*/
/*           {% endif %}*/
/*       </div>*/
/*     {% endif %}*/
/* </div>*/
/* */
