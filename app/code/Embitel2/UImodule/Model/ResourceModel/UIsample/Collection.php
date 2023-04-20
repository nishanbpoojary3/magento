<?php
namespace Embitel2\UImodule\Model\ResourceModel\UIsample;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;



class Collection extends AbstractCollection
{
    /**
     
     * @var string
     */
    protected $id_fieldname='id';
    
    protected function _construct()
    {
        $this->_init(
            'Embitel2\UImodule\Model\UIsample',
            'Embitel2\UImodule\Model\ResourceModel\UIsample'

        );
    }
    
}