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

class Save extends \Magento\Backend\App\Action
{

    /**
     * @var \DCKAP\Contactform\Model\FormFactory
     */
    protected $formFactory;

    /**
     * @var \Magento\Backend\Model\SessionFactory
     */
    protected $sessionFactory;

    /**
     * @param Action\Context $context
     * @param \DCKAP\Contactform\Model\FormFactory $formFactory
     * @param \Magento\Backend\Model\SessionFactory $sessionFactory
     */
    public function __construct(
        Action\Context $context,
        \DCKAP\Contactform\Model\FormFactory $formFactory,
        \Magento\Backend\Model\SessionFactory $sessionFactory
    )
    {
        $this->formFactory = $formFactory;
        $this->sessionFactory = $sessionFactory;
        parent::__construct($context);
    }

    /**
     * {@inheritdoc}
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('DCKAP_Contactform::save');
    }

    /**
     * Save action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        /** @var \Magento\Backend\Model\View\Result\Redirect $resultRedirect */
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($data) {

            $model = $this->formFactory->create();

            $id = $this->getRequest()->getParam('cust_id');
            if ($id) {
                $model->load($id);
            }

            $model->setData($data);

            $this->_eventManager->dispatch(
                'Contactform_form_prepare_save',
                ['post' => $model, 'request' => $this->getRequest()]
            );

            try {
                $model->save();

                $this->sessionFactory->create()->setFormData(false);

            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\RuntimeException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addException($e, __('Something went wrong while saving the link.'));
            }

            $this->_getSession()->setFormData($data);
            //     return $resultRedirect->setPath('*/*/edit', ['cust_id' => $this->getRequest()->getParam('cust_id')]);
        }
        return $resultRedirect->setPath('*/*/');
    }
}
