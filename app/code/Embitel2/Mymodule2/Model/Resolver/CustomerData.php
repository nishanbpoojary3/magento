<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
// declare(strict_types=1);

namespace Embitel2\Mymodule2\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;


class CustomerData implements ResolverInterface
{
   public function resolve(
    Field $field,
    $context,
    ResolveInfo $info,
    array $value=null,
    array $args=null
   )
{
    $data=[
        [
            'id'=>'1',
            'firstname'=>'Nishan',
            'lastname'=>'Poojary',
            'email'=>'abc@gmail.com',
            'telephone'=>'1231231231',
            'city'=>'Karkala',
            'state'=>'Karnataka',
            'country'=>'India'
        ],
        [
            'id'=>'2',
            'firstname'=>'Ramesh',
            'lastname'=>'Shetty',
            'email'=>'shetty@gmail.com',
            'telephone'=>'9876543210',
            'city'=>'Manglore',
            'state'=>'Karnataka',
            'country'=>'India'
        ],
        
        [
            'id'=>'3',
            'firstname'=>'Arjith',
            'lastname'=>'Singh',
            'email'=>'singh@gmail.com',
            'telephone'=>'9876543222',
            'city'=>'Manglore',
            'state'=>'Karnataka',
            'country'=>'India'
        ]
        ];
        
        return[
            'total_count'=>count($data),
            'details'=> $data
        ];
}
}

