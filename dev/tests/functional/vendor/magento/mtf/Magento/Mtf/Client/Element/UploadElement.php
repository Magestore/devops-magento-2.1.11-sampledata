<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Mtf\Client\Element;

/**
 * Upload file element.
 */
class UploadElement extends SimpleElement
{
    /**
     * Upload file by path.
     *
     * @param string $value
     * @return void
     * @throws \Exception
     */
    public function setValue($value)
    {
        if (!realpath($value)) {
            throw new \Exception("File by specified path '$value' isn't exist.");
        }
        $this->driver->uploadFile($this, $value);
    }

    /**
     * Get the value.
     *
     * @return null|string
     * @throws \Exception
     */
    public function getValue()
    {
        throw new \Exception('Not applicable for this class of elements.');
    }
}
