<?php

namespace Embitel2\Mymodule2\Cron;

// use Psr\Log\LoggerInterface;

class Test 
{
//     /**
//      * 
//      * @var LoggerInterface
//      */
//     protected $logger;

//     /**
//      * Test Cron constructor
//      * 
//      * @param LoggerInterface $logger
//      */
//     public function __construct(LoggerInterface $logger,) {
//         $this->logger = $logger;
//     }
//    /**
//     * Write to system.log
//     *
//     * @return void
//     */
    public function execute() {
        // try{
        //     $this->logger->info('Cron Works');
        // } catch(\Exception $ex){
        // $this->logger->info($ex->getMessage());
        // }
        $current_date=date("YMd_his");
        $name_of_file='customer'.$current_date.'.csv';

        $header_data=array(
            'Firstname',
            'Lastname',
            'EmailID',
            'Telephone'
        );
        $header_info=array_combine($header_data,$header_data);
        $data=[];

        $data[]=$header_data;

        $data[]= [
            'Firstname'=>'Nishan',
            'Lastname'=>'Poojary',
            'EmailID'=>'nish@gmail.com',
            'Telephone'=>'1231231231'
        ];

        $fp=fopen('/var/www/html/magento-op/var/export/'.$name_of_file, 'w');

        foreach($data as $fields){
            fputcsv($fp, $fields);
        }
        

        // file_put_contents('/var/www/html/magento-op/var/export/'.$name_of_file,$header_data);
    }
}