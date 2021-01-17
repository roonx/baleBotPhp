<?php


namespace balePhp\Types;

/**
 * Class Contact
 * @package balePhp\Types
 * @method string getPhoneNumber()
 * @method string getFirstName()
 * @method string getLastName()
 * @method string getUserId()
 * @method bool issetPhoneNumber()
 * @method bool issetFirstName()
 * @method bool issetLastName()
 * @method bool issetUserId()
 */
class Contact extends base
{
    static protected $map = [
        'phone_number' => true,
        'first_name' => true,
        'last_name' => true,
        'user_id' => true,
    ];
    protected $PhoneNumber;
    protected $FirstName;
    protected $LastName;
    protected $UserId;

    protected function init($key, $value)
    {
        $this->$key = $value;
    }
}