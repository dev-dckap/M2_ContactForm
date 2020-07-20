<?php
/**
 * @author     DCKAP <extensions@dckap.com>
 * @package    DCKAP_Contactform
 * @copyright  Copyright (c) 2016 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\Contactform\Ui\Component\Listing\Column;

use Magento\Framework\View\Element\UiComponent\ContextInterface;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Ui\Component\Listing\Columns\Column;
use Magento\Framework\UrlInterface;

class FormActions extends Column
{

    /** Url path */

    const FORM_URL_PATH_DELETE = 'formadmin/form/delete';


    /** @var UrlInterface */
    protected $urlBuilder;

    /**
     * @var string
     */
    const NAME = 'logo';

    /**
     * @var string
     */
    const ALT_FIELD = 'name';

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $_storeManager;

    /**
     * @param ContextInterface $context
     * @param UiComponentFactory $uiComponentFactory
     * @param UrlInterface $urlBuilder
     * @param array $components
     * @param array $data
     * @param string $editUrl
     */
    public function __construct(
        ContextInterface $context,
        UiComponentFactory $uiComponentFactory,
        \Magento\Framework\UrlInterface $urlBuilder,
        array $components = [],
        array $data = [],
        \Magento\Store\Model\StoreManagerInterface $storeManager
    )
    {
        parent::__construct($context, $uiComponentFactory, $components, $data);
        $this->_storeManager = $storeManager;
        $this->urlBuilder = $urlBuilder;
    }


    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)

    {
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                $name = $this->getData('name');
                $item[$name]['delete'] = [
                    'href' => $this->urlBuilder->getUrl(self::FORM_URL_PATH_DELETE, ['cust_id' => $item['cust_id']]),
                    'label' => 'delete',
                    'confirm' => [
                        'title' => __('Delete "${ $.$data.name }"'),
                        'message' => __('Are you sure you want to delete this contact?')
                    ]
                ];


            }
        }

        return $dataSource;
    }
}
