<?php 
namespace Embitel2\UImodule\Model;
use Magento\Framework\Model\AbstractModel;

class UIsample extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Embitel2\UImodule\Model\ResourceModel\UIsample');
    }
}
