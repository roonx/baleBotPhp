<?php


namespace balePhp\Types;

/**
 * Class File
 * @package balePhp\Types
 * @method string getFileId()
 * @method int getFileSize()
 * @method string getFilePath()
 */
class File extends base
{
    static protected $map = [
        'file_id' => true,
        'file_size' => true,
        'file_path' => true,
    ];
    protected $FileId;
    protected $FileSize;
    protected $FilePath;

    protected function init($key, $value)
    {
        $this->$key = $value;
    }
}