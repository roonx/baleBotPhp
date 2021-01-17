<?php


namespace balePhp\Types;

/**
 * Class Voice
 * @package balePhp\Types
 * @method string getFileId()
 * @method int getDuration()
 * @method string getMimeType()
 * @method int getFileSize()
 * @method bool issetFileId()
 * @method bool issetDuration()
 * @method bool issetMimeType()
 * @method bool issetFileSize()
 */
class Voice extends base
{
    static protected $map = [
        'file_id' => true,
        'duration' => true,
        'mime_type' => true,
        'file_size' => true
    ];

    protected $FileId;
    protected $Duration;
    protected $MimeType;
    protected $FileSize;

    protected function init($key, $value)
    {
        $this->$key = $value;
    }
}