<?php


namespace balePhp\Types;

/**
 * Class Video
 * @package balePhp\Types
 * @method string getFileId()
 * @method int getWidth()
 * @method int getHeight()
 * @method int getDuration()
 * @method PhotoSize getThumb()
 * @method string getMimeType()
 * @method int getFileSize()
 * @method bool issetFileId()
 * @method bool issetWidth()
 * @method bool issetHeight()
 * @method bool issetDuration()
 * @method bool issetThumb()
 * @method bool issetMimeType()
 * @method bool issetFileSize()
 */
class Video extends base
{
    static protected $map = [
        'file_id' => true,
        'width' => true,
        'height' => true,
        'duration' => true,
        'thumb' => PhotoSize::class,
        'mime_type' => true,
        'file_size' => true
    ];

    protected $FileId;
    protected $Width;
    protected $Height;
    protected $Duration;
    protected $Thumb;
    protected $MimeType;
    protected $FileSize;

    protected function init($key, $value)
    {
        $this->$key = $value;
    }
}