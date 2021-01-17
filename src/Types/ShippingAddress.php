<?php


namespace balePhp\Types;

/**
 * Class ShippingAddress
 * @package balePhp\Types
 * @method string getCountryCode()
 * @method string getState()
 * @method string getCity()
 * @method string getStreetLine1()
 * @method string getStreetLine2()
 * @method string getPostCode()
 * @method bool issetCountryCode()
 * @method bool issetState()
 * @method bool issetCity()
 * @method bool issetStreetLine1()
 * @method bool issetStreetLine2()
 * @method bool issetPostCode()
 */
class ShippingAddress extends base
{
    static protected $map = [
        'country_code' => true,
        'state' => true,
        'city' => true,
        'street_line1' => true,
        'street_line2' => true,
        'post_code' => true,
    ];
    protected $CountryCode;
    protected $State;
    protected $City;
    protected $StreetLine1;
    protected $StreetLine2;
    protected $PostCode;

    protected function init($key, $value)
    {
        $this->$key = $value;
    }
}