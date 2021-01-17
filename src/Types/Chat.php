<?php


namespace balePhp\Types;

/**
 * Class Chat
 * @package balePhp\Types
 * @method int getId()
 * @method string getType()
 * @method string getTitle()
 * @method string getFastName()
 * @method string getLastName()
 * @method string getUsername()
 * @method string getDescription()
 * @method string getInviteLink()
 * @method message getPinnedMessage()
 * @method string getStickerSetName()
 * @method bool getCanSetStickerSet()
 * @method bool issetId()
 * @method bool issetType()
 * @method bool issetTitle()
 * @method bool issetFastName()
 * @method bool issetLastName()
 * @method bool issetUsername()
 * @method bool issetDescription()
 * @method bool issetInviteLink()
 * @method bool issetPinnedMessage()
 * @method bool issetStickerSetName()
 * @method bool issetCanSetStickerSet()
 */
class Chat extends base
{
    static protected $map = [
        'id' => true,
        'type' => true,
        'title' => true,
        'username' => true,
        'first_name' => true,
        'last_name' => true,
        'bio' => true,
        'description' => true,
        'invite_link' => true,
        'pinned_message' => Message::class,
        'sticker_set_name' => true,
        'can_set_sticker_set' => true,
    ];
    protected $Id;
    protected $Type;
    protected $Title;
    protected $FirstName;
    protected $LastName;
    protected $Username;
    protected $Description;
    protected $InviteLink;
    protected $PinnedMessage;
    protected $StickerSetName;
    protected $CanSetStickerSet;
    protected $Bio;


    protected function init($key, $value)
    {
        $this->$key = $value;
    }

}