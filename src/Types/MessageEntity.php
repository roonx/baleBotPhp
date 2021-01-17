<?php


namespace balePhp\Types;

/**
 * Class MessageEntity
 * @package balePhp\Types
 * @method string getType()
 * @method int getOffset()
 * @method int getLength()
 * @method string getUrl()
 * @method User getUser()
 * @method bool issetType()
 * @method bool issetOffset()
 * @method bool issetLength()
 * @method bool issetUrl()
 * @method bool issetUser()
 */
class MessageEntity extends base
{
    static protected $map = [
        'type' => true,
        'offset' => true,
        'length' => true,
        'url' => true,
        'user' => User::class,
    ];
    protected $Type;
    protected $Offset;
    protected $Length;
    protected $Url;
    protected $User;

    protected function init($key, $value)
    {
        $this->$key = $value;
    }
}