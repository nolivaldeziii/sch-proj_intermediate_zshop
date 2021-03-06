<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Export;

/**
 * Progress section 
 */
class Progress extends \XLite\View\AView
{
    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'export/progress.twig';
    }

    /**
     * Get time label 
     * 
     * @return string
     */
    protected function getTimeLabel()
    {
        return \XLite\Core\Translation::formatTimePeriod($this->getGenerator()->getTimeRemain());
    }

    /**
     * Check - current event driver is blocking or not
     * 
     * @return boolean
     */
    protected function isBlocking()
    {
        return \XLite\Core\EventTask::getInstance()->getDriver()->isBlocking();
    }

    /**
     * Get export event name
     *
     * @return string
     */
    protected function getEventName()
    {
        return \XLite\Logic\Export\Generator::getEventName();
    }
}

