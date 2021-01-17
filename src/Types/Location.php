<?php


namespace balePhp\Types;

/**
 * Class Location
 * @package balePhp\Types
 * @method float getLongitude()
 * @method float getLatitude()
 * @method bool issetLongitude()
 * @method bool issetLatitude()
 */
class Location extends base
{
    static protected $map = [
        'longitude' => true,
        'latitude' => true,
    ];
    protected $Longitude;
    protected $Latitude;


    protected function init($key, $value)
    {
        $this->$key = $value;
    }
}