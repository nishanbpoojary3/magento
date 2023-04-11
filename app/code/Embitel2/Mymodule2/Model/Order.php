<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Embitel2\Mymodule2\Model;


class Order extends \Magento\Sales\Model\Order
{
    protected function _canCancel()
    {
        return "overrided function in order!!!!!";
    }

   
}
