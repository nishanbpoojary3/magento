<?php
namespace Embitel2\Mymodule2\Model\ResourceModel;


class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    
    
    protected function _construct()
    {
        $this->_init('Embitel2_Mymodule2','entity_id');
       
    }
}
