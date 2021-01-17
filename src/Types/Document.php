<?php


namespace balePhp\Types;

/**
 * Class Document
 * @package balePhp\Types
 * @method string getFileId()
 * @method PhotoSize getThumb()
 * @method string getFileName()
 * @method string getMimeType()
 * @method int getFileSize()
 * @method bool issetFileId()
 * @method bool issetThumb()
 * @method bool issetFileName()
 * @method bool issetMimeType()
 * @method bool issetFileSize()
 */
class Document extends base
{
    static protected $map = [
        'file_id' => true,
        'thumb' => PhotoSize::class,
        'file_name' => true,
        'mime_type' => true,
        'file_size' => true
    ];
    protected $FileId;
    protected $FileName;
    protected $Thumb;
    protected $MimeType;
    protected $FileSize;

    protected function init($key, $value)
    {
        $this->$key = $value;
    }
}