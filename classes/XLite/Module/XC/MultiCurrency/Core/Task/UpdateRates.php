<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\MultiCurrency\Core\Task;

use XLite\Module\XC\MultiCurrency\Core\MultiCurrency;

/**
 * Scheduled task that sends automatic cart reminders.
 */
class UpdateRates extends \XLite\Core\Task\Base\Periodic
{
    const INT_1_MIN     = 60;
    const INT_5_MIN     = 300;
    const INT_10_MIN    = 600;
    const INT_15_MIN    = 900;
    const INT_30_MIN    = 1800;
    const INT_1_HOUR    = 3600;
    const INT_2_HOURS   = 7200;
    const INT_4_HOURS   = 14400;
    const INT_6_HOURS   = 21600;
    const INT_12_HOURS  = 43200;
    const INT_1_DAY     = 86400;

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return static::t('Rates update');
    }

    /**
     * Run step
     *
     * @return void
     */
    protected function runStep()
    {
        MultiCurrency::getInstance()->updateRates();
    }

    /**
     * Get period (seconds)
     *
     * @return integer
     */
    protected function getPeriod()
    {
        return \XLite\Core\Config::getInstance()->XC->MultiCurrency->updateInterval;
    }
}