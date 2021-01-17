<?php


namespace balePhp\Types;

use balePhp\Types\base;

/**
 * Class message
 * @package balePhp\Types
 * @method int getDate()
 * @method string getText()
 * @method int getMessageId()
 * @method User getFrom()
 * @method Chat getChat()
 * @method User getForwardFrom()
 * @method Chat getForwardFromChat()
 * @method int getForwardFromMessageId()
 * @method int getForwardDate()
 * @method Message getReplyToMessage()
 * @method int getEditDate()
 * @method ArrayOfMessageEntity getEntities()
 * @method Audio getAudio()
 * @method Document getDocument()
 * @method ArrayOfPhotoSize getPhoto()
 * @method Video getVideo()
 * @method Voice getVoice()
 * @method string getCaption()
 * @method ArrayOfMessageEntity getCaptionEntities()
 * @method Contact getContact()
 * @method Location getLocation()
 * @method ArrayOfUser getNewChatMembers()
 * @method User getLeftChatMember()
 * @method string getNewChatTitle()
 * @method PhotoSize getNewChatPhoto()
 * @method bool getDeleteChatPhoto()
 * @method bool getGroupChatCreated()
 * @method bool getSupergroupChatCreated()
 * @method bool getChannelChatCreated()
 * @method Message getPinnedMessage()
 * @method Invoice getInvoice()
 * @method SuccessfulPayment getSuccessfulPayment()
 * @method string getGameShortName()
 * @method bool issetDate()
 * @method bool issetText()
 * @method bool issetMessageId()
 * @method bool issetFrom()
 * @method bool issetChat()
 * @method bool issetForwardFrom()
 * @method bool issetForwardFromChat()
 * @method bool issetForwardFromMessageId()
 * @method bool issetForwardDate()
 * @method bool issetReplyToMessage()
 * @method bool issetEditDate()
 * @method bool issetSenderChat()
 * @method bool issetEntities()
 * @method bool issetAudio()
 * @method bool issetDocument()
 * @method bool issetPhoto()
 * @method bool issetVideo()
 * @method bool issetVoice()
 * @method bool issetCaption()
 * @method bool issetCaptionEntities()
 * @method bool issetContact()
 * @method bool issetLocation()
 * @method bool issetNewChatMembers()
 * @method bool issetLeftChatMember()
 * @method bool issetNewChatTitle()
 * @method bool issetNewChatPhoto()
 * @method bool issetDeleteChatPhoto()
 * @method bool issetGroupChatCreated()
 * @method bool issetSupergroupChatCreated()
 * @method bool issetChannelChatCreated()
 * @method bool issetPinnedMessage()
 * @method bool issetInvoice()
 * @method bool issetSuccessfulPayment()
 * @method bool issetGameShortName()
 */
class Message extends base
{
    static protected $map = [
        'message_id' => true,
        'date' => true,
        'text' => true,
        'from' => User::class,
        'chat' => Chat::class,
        'forward_from' => User::class,
        'forward_from_chat' => Chat::class,
        'forward_from_message_id' => true,
        'forward_date' => true,
        'reply_to_message' => Message::class,
        'edit_date' => true,
        'entities' => ArrayOfMessageEntity::class,
        'audio' => Audio::class,
        'document' => Document::class,
        'photo' => ArrayOfPhotoSize::class,
        'video' => Video::class,
        'voice' => Voice::class,
        'caption' => true,
        'caption_entities' => ArrayOfMessageEntity::class,
        'contact' => Contact::class,
        'location' => Location::class,
        'new_chat_members' => ArrayOfUser::class,
        'left_chat_member' => User::class,
        'new_chat_title' => true,
        'new_chat_photo' => ArrayOfPhotoSize::class,
        'delete_chat_photo' => true,
        'group_chat_created' => true,
        'supergroup_chat_created' => true,
        'channel_chat_created' => true,
        'pinned_message' => Message::class,
        'invoice' => Invoice::class,
        'game_short_name' => true,
        'pre_checkout_query' => PreCheckoutQuery::class,
    ];

    protected $MessageId;
    protected $Text;
    protected $Date;
    protected $From;
    protected $Chat;
    protected $ForwardFrom;
    protected $ForwardFromChat;
    protected $ForwardFromMessageId;
    protected $ForwardDate;
    protected $ReplyToMessage;
    protected $EditDate;
    protected $Entities;
    protected $Audio;
    protected $Document;
    protected $Photo;
    protected $Video;
    protected $Voice;
    protected $Caption;
    protected $CaptionEntities;
    protected $Contact;
    protected $Location;
    protected $NewChatMembers;
    protected $LeftChatMember;
    protected $NewChatTitle;
    protected $NewChatPhoto;
    protected $DeleteChatPhoto;
    protected $GroupChatCreated;
    protected $SupergroupChatCreated;
    protected $ChannelChatCreated;
    protected $PinnedMessage;
    protected $Invoice;
    protected $SuccessfulPayment;
    protected $GameShortName;


    protected function init($key, $value)
    {
        $this->$key = $value;
    }
}