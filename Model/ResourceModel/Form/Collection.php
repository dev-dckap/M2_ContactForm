<?php
/**
 * @author     DCKAP <extensions@dckap.com>
 * @package    DCKAP_Contactform
 * @copyright  Copyright (c) 2016 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\Contactform\Model\ResourceModel\Form;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'cust_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('DCKAP\Contactform\Model\Form', 'DCKAP\Contactform\Model\ResourceModel\Form');
    }

}
