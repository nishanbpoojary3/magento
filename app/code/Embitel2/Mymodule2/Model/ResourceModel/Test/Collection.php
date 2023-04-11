<?php
namespace Embitel2\Mymodule2\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    
    
    protected function _construct()
    {
        $this->_init(
            'Embitel2\Mymodule2\Model\Test',
            'Embitel2\Mymodule2\Model\ResourceModel\Test'
        );
       
    }
}
