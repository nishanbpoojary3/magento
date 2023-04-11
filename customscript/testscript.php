<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('memory_limit', '5G');
error_reporting(E_ALL);
 
use \Magento\Framework\App\Bootstrap;
require realpath(__DIR__) . '/../app/bootstrap.php';
$bootstrap = Bootstrap::create(BP, $_SERVER);
$objectManager = $bootstrap->getObjectManager();

//$bootstrap->getObjectManager()->get('\Magento\Framework\App\State')->setAreaCode("frontend");
 
//$storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
//$storeId = $storeManager->getStore()->getId();
//$websiteId = $storeManager->getStore($storeId)->getWebsiteId();
 
$sku='AXE SIGNATURE';
$productModel=$objectManager->create('\Magento\Catalog\Model\ProductRepository')->get($sku);


//try {
//       $customerModel = $objectManager->get('\Magento\Customer\Model\CustomerFactory')->create();
//       $customerModel->setWebsiteId($sku);
//       $email = 'name@example.com';


$productModel_data=[
        'id'=>$productModel->getId(),
        'sku'=>$productModel->getSku(),
        'name'=>$productModel->getName(),
        'description'=>$productModel->getDescription()
        ];
        $cfile=fopen('result.csv', 'w');
        fputcsv($cfile,$productModel_data);
        fclose($cfile);
        
        
        //$productModel->save();
        
        echo 'Created product successfully'; //. $customerModel->getId() . "<br>";
        
  //  } catch (Exception $e) {
 //       echo $e->getMessage();
   // }
