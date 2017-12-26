<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Mtf\Config;

/**
 * Interface SchemaLocatorInterface
 */
interface SchemaLocatorInterface
{
    /**
     * Get path to merged config schema
     *
     * @return string|null
     */
    public function getSchema();

    /**
     * Get path to per file validation schema
     *
     * @return string|null
     */
    public function getPerFileSchema();
}
