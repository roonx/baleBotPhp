<?php


namespace balePhp\Types;

/**
 * Class PhotoSize
 * @package balePhp\Types
 * @method string getFileId()
 * @method int getWidth()
 * @method int getHeight()
 * @method int getFileSize()
 * @method bool issetFileId()
 * @method bool issetWidth()
 * @method bool issetHeight()
 * @method bool issetFileSize()
 */
class PhotoSize extends base
{
    static protected $map = [
        'file_id' => true,
        'width' => true,
        'height' => true,
        'file_size' => true,
    ];
    protected $FileId;
    protected $Width;
    protected $Height;
    protected $FileSize;

    protected function init($key, $value)
    {
        $this->$key = $value;
    }
}