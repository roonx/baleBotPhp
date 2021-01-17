<?php


namespace balePhp\Types;

use balePhp\Types\base;

/**
 * Class User
 * @package balePhp\Types
 * @method int getId()
 * @method bool getIsBot()
 * @method string getFirstName()
 * @method string getLastName()
 * @method string getUsername()
 * @method string getLanguageCode()
 * @method bool issetId()
 * @method bool issetIsBot()
 * @method bool issetFirstName()
 * @method bool issetLastName()
 * @method bool issetUsername()
 * @method bool issetLanguageCode()
 */
class User extends base
{
    static protected $map = [
        'id' => true,
        'is_bot' => true,
        'first_name' => true,
        'last_name' => true,
        'username' => true,
        'language_code' => true,
    ];

    protected $Id;
    protected $IsBot;
    protected $FirstName;
    protected $LastName;
    protected $Username;
    protected $LanguageCode;

    protected function init($key, $value)
    {
        $this->$key = $value;
    }

}