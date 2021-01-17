<?php


namespace telegramBotApiPhp\Types;


/**
 * Class Audio
 * @package telegramBotApiPhp\Types
 * @method string getFileId()
 * @method int getDuration()
 * @method string getPerformer()
 * @method string getTitle()
 * @method string getMimeType()
 * @method int getFileSize()
 * @method bool issetFileId()
 * @method bool issetDuration()
 * @method bool issetPerformer()
 * @method bool issetTitle()
 * @method bool issetMimeType()
 * @method bool issetFileSize()
 */
class Audio extends base
{
    static protected $map = [
        'file_id' => true,
        'duration' => true,
        'performer' => true,
        'title' => true,
        'mime_type' => true,
        'file_size' => true,
    ];
    protected $FileId;
    protected $Duration;
    protected $Performer;
    protected $Title;
    protected $MimeType;
    protected $FileSize;

    protected function init($key, $value)
    {
        $this->$key = $value;
    }
}