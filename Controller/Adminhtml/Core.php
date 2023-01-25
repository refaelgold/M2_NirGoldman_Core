<?php

declare(strict_types=1);

namespace NirGoldman\Core\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\ActionInterface;

abstract class Core extends Action implements ActionInterface
{
    public const ADMIN_RESOURCE_VIEW = 'NirGoldman_Core::index';

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * Init page
     *
     * @param \Magento\Backend\Model\View\Result\Page $resultPage
     * @return \Magento\Backend\Model\View\Result\Page
     */
    protected function initPage($resultPage)
    {
        $resultPage->setActiveMenu('NirGoldman_Core::index')
            ->addBreadcrumb(__('Nir Goldman'), __('Nir Goldman'));

        return $resultPage;
    }

    /**
     * Check the permission to run it
     *
     * @return boolean
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed(self::ADMIN_RESOURCE_VIEW);
    }
}
