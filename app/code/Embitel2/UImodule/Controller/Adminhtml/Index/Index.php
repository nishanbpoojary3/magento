<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Embitel2\UImodule\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Index action.
 */
class Index extends Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Embitel2_UImodule::uimodule';

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @var DataPersistorInterface
     */
    private $dataPersistor;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param DataPersistorInterface $dataPersistor
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,

    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        
    }

    /**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Embitel2_UImodule::uimodule');
        $resultPage->addBreadcrumb(__('UImodule'), __('UImodule'));
        $resultPage->addBreadcrumb(__('Manage Pages'), __('Manage Pages'));
        $resultPage->getConfig()->getTitle()->prepend(__('UIMODULE'));

        // $this->dataPersistor->clear('cms_page');

        return $resultPage;
    }
}