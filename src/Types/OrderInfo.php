<?php


namespace balePhp\Types;
/**
 * Class OrderInfo
 * @package balePhp\Types
 * @method string getName()
 * @method string getPhoneNumber()
 * @method string getEmail()
 * @method ShippingAddress getShippingAddress()
 * @method bool issetName()
 * @method bool issetPhoneNumber()
 * @method bool issetEmail()
 * @method ShippingAddress issetShippingAddress()
 */
class OrderInfo extends base
{
    static protected $map = [
        'name' => true,
        'phone_number' => true,
        'email' => true,
        'shipping_address' => ShippingAddress::class,
    ];

    protected $Name;
    protected $PhoneNumber;
    protected $Email;
    protected $ShippingAddress;

    protected function init($key, $value)
    {
        $this->$key = $value;
    }
}