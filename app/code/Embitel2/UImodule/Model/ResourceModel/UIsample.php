<?php
namespace Embitel2\UImodule\Model\ResourceModel;


class UIsample extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
    protected function _construct()
    {
        $this->_init('Embitel1_UImodule','entity_id');
    }
}
