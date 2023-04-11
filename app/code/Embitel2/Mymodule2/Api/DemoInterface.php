<?php

namespace Embitel2\Mymodule2\Api;

/**
 * Interface for managing Demo API
 * @api
 */

interface DemoInterface
{

    /**
     * GET name
     * @return string
     */
    public function getProfile();
    
    /**
     * set data
     * 
     * @param string[] $postData
     * @return array
     */
    public function setCustomergroup($postData);
}