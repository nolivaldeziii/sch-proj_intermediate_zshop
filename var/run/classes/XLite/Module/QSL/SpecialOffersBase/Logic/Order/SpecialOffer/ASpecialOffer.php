<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * X-Cart
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the software license agreement
 * that is bundled with this package in the file LICENSE.txt.
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to licensing@x-cart.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not modify this file if you wish to upgrade X-Cart to newer versions
 * in the future. If you wish to customize X-Cart for your needs please
 * refer to http://www.x-cart.com/ for more information.
 *
 * @category  X-Cart 5
 * @author    Qualiteam software Ltd <info@x-cart.com>
 * @copyright Copyright (c) 2011-2016 Qualiteam software Ltd <info@x-cart.com>. All rights reserved
 * @link      http://www.x-cart.com/
 */

namespace XLite\Module\QSL\SpecialOffersBase\Logic\Order\SpecialOffer;

/**
 * Abstract special offer logic.
 */
abstract class ASpecialOffer extends \XLite\Base
{
    /**
     * Epsilon constant used when comparing float values.
     */
    const EPS = 0.000000001;

    /**
     * Applies the special offer to the order being processed by the special offer modifier.
     *
     * @param \XLite\Module\QSL\SpecialOffersBase\Model\SpecialOffer                 $offer    Special offer model.
     * @param \XLite\Module\QSL\SpecialOffersBase\Logic\Order\Modifier\SpecialOffers $modifier Order modifier.
     *
     * @return void
     */
    abstract public function applyOffer(
            \XLite\Module\QSL\SpecialOffersBase\Model\SpecialOffer $offer,
            \XLite\Module\QSL\SpecialOffersBase\Logic\Order\Modifier\SpecialOffers $modifier
    );

    /**
     * Checks if the offer has correct settings and can be applied on the order.
     *
     * @param \XLite\Module\QSL\SpecialOffersBase\Model\SpecialOffer                 $offer    Special offer model.
     * @param \XLite\Module\QSL\SpecialOffersBase\Logic\Order\Modifier\SpecialOffers $modifier Order modifier.
     * 
     * @return boolean
     */
    public function canApplyOffer(
            \XLite\Module\QSL\SpecialOffersBase\Model\SpecialOffer $offer,
            \XLite\Module\QSL\SpecialOffersBase\Logic\Order\Modifier\SpecialOffers $modifier
    ) {
        return true;
    }

}