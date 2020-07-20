<?php
/**
 * @author     DCKAP <extensions@dckap.com>
 * @package    DCKAP_Contactform
 * @copyright  Copyright (c) 2016 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\Contactform\Controller\Adminhtml\Form;

use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;
use DCKAP\Contactform\Model\ResourceModel\Form\CollectionFactory;
use Magento\Framework\Controller\ResultFactory;

/**
 * Class MassDisable
 */
class MassDelete extends \Magento\Backend\App\Action
{
    /**
     * @var Filter
     */
    protected $filter;

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @var Form
     */
    protected $form;


    /**
     * @param Context $context
     * @param Filter $filter
     * @param CollectionFactory $collectionFactory
     * @param \DCKAP\Contactform\Model\Form $form
     */
    public function __construct(
        Context $context,
        Filter $filter,
        CollectionFactory $collectionFactory,
        \DCKAP\Contactform\Model\Form $form
    )
    {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        $this->form = $form;
        parent::__construct($context);
    }

    /**
     * Execute action
     *
     * @return \Magento\Backend\Model\View\Result\Redirect
     * @throws \Magento\Framework\Exception\LocalizedException|\Exception
     */
    public function execute()
    {

        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        try {
            $collection = $this->filter->getCollection($this->collectionFactory->create());
            $collectionSize = $collection->getSize();
            foreach ($collection as $item) {
                $this->form->deleteContact($item);
            }
            $this->messageManager->addSuccess(__('A total of %1 contact(s) have been deleted.', $collectionSize));
            return $resultRedirect->setPath('*/*/');
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
            return $resultRedirect->setPath('*/*/');
        }
    }
}
