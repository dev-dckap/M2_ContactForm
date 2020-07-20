<?php
/**
 * @author     DCKAP <extensions@dckap.com>
 * @package    DCKAP_Contactform
 * @copyright  Copyright (c) 2016 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\Contactform\Controller\Adminhtml\Form;

use Magento\Backend\App\Action;
use Magento\TestFramework\ErrorLog\Logger;

class Delete extends \Magento\Backend\App\Action
{

    /**
     * @var \DCKAP\Contactform\Model\FormFactory
     */
    protected $formFactory;

    /**
     * Delete constructor.
     * @param Action\Context $context
     * @param \DCKAP\Contactform\Model\FormFactory $formFactory
     */
    public function __construct(
        Action\Context $context,
        \DCKAP\Contactform\Model\FormFactory $formFactory
    )
    {
        $this->formFactory = $formFactory;
        parent::__construct($context);
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('DCKAP_Contactform::Contactform_delete');
    }

    /**
     * @return $this
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('cust_id');
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->formFactory->create();
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('The Contact details has been deleted.'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['cust_id' => $id]);
            }
        }
        $this->messageManager->addError(__('We can\'t find the Contact to delete.'));
        return $resultRedirect->setPath('*/*/');
    }
}
