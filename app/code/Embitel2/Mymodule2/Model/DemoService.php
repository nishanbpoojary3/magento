<?php

namespace Embitel2\Mymodule2\Model;
use Magento\Customer\Model\GroupFactory;

class DemoService implements \Embitel2\Mymodule2\Api\DemoInterface
{
    protected $_group;
    public function __construct(
        GroupFactory $group
    ){
        $this->_group=$group;
    }

    /**
     * Get name
     * 
     * @return string
     */
    public function getProfile()
    {
        return [
        [
            'Firstname'=>'Nishan',
            'Lastname'=>'Poojary',
            'Email'=>'hero@gmail.com',
            'Telephone'=>'1112223330',
            'City'=>'Bengaluru',
            'State'=>'Karnataka',
            'Country'=>'India',
        ],
        [
            'Firstname'=>'Ramesh',
            'Lastname'=>'Kapoor',
            'Email'=>'kapoor@gmail.com',
            'Telephone'=>'1234543210',
            'City'=>'Venice',
            'State'=>'Unknown',
            'Country'=>'USA',
        ],
        [
            'Firstname'=>'Brain',
            'Lastname'=>'Nicolas',
            'Email'=>'brain@gmail.com',
            'Telephone'=>'5556667770',
            'City'=>'Mumbai',
            'State'=>'Maharastra',
            'Country'=>'India',
        ],
    ];
    }
    /**
     * set data
     * 
     * @param string[] $postData
     * @return array
     */
    public function setCustomergroup($postData)
    {
        try{
            $data=[
                'customer_group_code'=>$postData['groupName'],
                'tax_class_id' => 3
            ];
            $group = $this->_group->create();
            $group->setData($data);
            $group->save();
    
            return[
                'groupId'=>1,
                'groupName'=>"CodeZero"
            ];




            //update customer by $postData

            // return[[
            //     'Group Id' => 333,
            //     'Group Name'=>'CodeZero'
            // ]];
        }
        catch (\Throwable $th)
        {
            $th->getMessage();
        }
        }
     
    }

