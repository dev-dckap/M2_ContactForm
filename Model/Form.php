<?php
/**
 * @author     DCKAP <extensions@dckap.com>
 * @package    DCKAP_Contactform
 * @copyright  Copyright (c) 2016 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\Contactform\Model;

use DCKAP\Contactform\Api\Data\FormInterface;
use Magento\Framework\DataObject\IdentityInterface;

class Form extends \Magento\Framework\Model\AbstractModel implements FormInterface, IdentityInterface
{


    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'form_cache_id';

    /**
     * @var string
     */
    protected $_cacheTag = 'form_cache_id';

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'form_event';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()

    {
        $this->_init('DCKAP\Contactform\Model\ResourceModel\Form');
    }


    /**
     * @return array
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->getData(self::CUST_ID);
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }


    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * @return mixed
     */
    public function getContactNumber()
    {
        return $this->getData(self::CONTACT_NUMBER);
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->getData(self::MESSAGE);
    }

    /**
     * @return mixed
     */
    public function getCreationTime()
    {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * @param mixed $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(self::CUST_ID, $id);
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * @param string $contactnumber
     * @return $this
     */
    public function setContactNumber($contactnumber)
    {
        return $this->setData(self::CONTACT_NUMBER, $contactnumber);
    }

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        return $this->setData(self::MESSAGE, $message);
    }

    /**
     * @param string $creation_time
     * @return $this
     */
    public function setCreationTime($creation_time)
    {
        return $this->setData(self::CREATION_TIME, $creation_time);
    }

    /**
     * @param $item
     */
    public function deleteContact($item)
    {
        $item->delete();
    }


}
