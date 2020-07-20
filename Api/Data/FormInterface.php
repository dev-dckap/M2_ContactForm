<?php
/**
 * @author     DCKAP <extensions@dckap.com>
 * @package    DCKAP_Contactform
 * @copyright  Copyright (c) 2016 DCKAP Inc (http://www.dckap.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace DCKAP\Contactform\Api\Data;

interface FormInterface
{
    /**
     * Constants for keys of data array.
     */
    const CUST_ID = 'cust_id';
    const NAME = 'name';
    const EMAIL = 'email';
    const CONTACT_NUMBER = 'contact_number';
    const MESSAGE = 'message';
    const CREATION_TIME = 'creation_time';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get Name
     *
     * @return string
     */
    public function getNAME();

    /**
     * Get Email
     *
     * @return string|null
     */
    public function getEmail();


    /**
     * Get  contactnumber
     *
     * @return string|null
     */
    public function getContactNumber();

    /**
     * Get  message
     *
     * @return string|null
     */
    public function getMessage();

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime();


    /**
     * Set ID
     *
     * @param int $id
     * @return \DCKAP\Contactform\Api\Data\FormInterface
     */
    public function setId($cust_id);

    /**
     * Set Name
     *
     * @param string $name
     * @return \DCKAP\Contactform\Api\Data\FormInterface
     */
    public function setName($name);

    /**
     * Set Email
     *
     * @param string $email
     * @return \DCKAP\Contactform\Api\Data\FormInterface
     */
    public function setEmail($email);


    /**
     * Set Contactnumber
     *
     * @param string $contact_number
     * @return \DCKAP\Contactform\Api\Data\FormInterface
     */
    public function setContactNumber($contact_number);

    /**
     * Set Message
     *
     * @param string $message
     * @return \DCKAP\Contactform\Api\Data\FormInterface
     */
    public function setMessage($message);

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return \DCKAP\Contactform\Api\Data\FormInterface
     */
    public function setCreationTime($creationTime);


}
