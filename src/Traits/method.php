<?php


namespace balePhp\Traits;


use balePhp\Types\{returned,
    returnedChat,
    returnedChatMember,
    returnedFile,
    returnedInt,
    returnedMessage,
    returnedUser
};

trait method
{


    /**
     * @return returnedMessage
     */
    public function sendMessage($chat_id, $text, $reply_markup = null, $reply_to_message_id = null)
    {
        return returnedMessage::create($this->bot('sendMessage', compact('chat_id', 'text', 'reply_markup', 'reply_to_message_id')));
    }

    /**
     * @return returnedMessage
     */
    public function editMessageText($chat_id, $text, $message_id, $reply_markup = null)
    {
        return returnedMessage::create($this->bot('editMessageText', compact('chat_id', 'message_id', 'text', 'reply_markup')));
    }

    /**
     * @return returned
     */
    public function deleteMessage($chat_id, int $message_id)
    {
        return returned::create($this->bot('deleteMessage', compact('chat_id', 'message_id')));
    }

    /**
     * @return returnedMessage
     */
    public function getUpdates($offset = 0, int $limit = 10)
    {
        return returnedMessage::create($this->bot('getUpdates', compact('offset', 'limit')));
    }

    /**
     * @return returned
     */
    public function setWebhook($url)
    {
        return returned::create($this->bot('setWebhook', compact('url')));
    }

    /**
     * @return returned
     */
    public function deleteWebhook()
    {
        return returned::create($this->bot('deleteWebhook'));
    }

    /**
     * @return returnedUser
     */
    public function getMe()
    {
        return returnedUser::create($this->bot('getMe'));
    }


    /**
     * @return returnedMessage
     */
    public function sendPhoto($chat_id, $photo, string $caption = null, array $reply_markup = null, int $reply_to_message_id = null)
    {
        return returnedMessage::create($this->bot('sendPhoto', compact('chat_id', 'photo', 'caption', 'reply_to_message_id', 'reply_markup')));
    }

    /**
     * @return returnedMessage
     */
    public function sendAudio($chat_id, string $audio, string $caption = null, string $title = null, int $duration = null, int $reply_to_message_id = null)
    {
        return returnedMessage::create($this->bot('sendAudio', compact('chat_id', 'audio', 'caption', 'duration', 'title', 'reply_to_message_id')));
    }

    /**
     * @return returnedMessage
     */
    public function sendDocument($chat_id, $document, string $caption = null, int $reply_to_message_id = null)
    {
        return returnedMessage::create($this->bot('sendDocument', compact('chat_id', 'document', 'caption', 'reply_to_message_id')));
    }

    /**
     * @return returnedMessage
     */
    public function sendVideo($chat_id, string $video, string $caption = null, int $reply_to_message_id = null, int $duration = null, int $width = null, int $height = null)
    {
        return returnedMessage::create($this->bot('sendVideo', compact('chat_id', 'video', 'caption', 'duration', 'width', 'height', 'reply_to_message_id')));
    }


    /**
     * @return returnedMessage
     */
    public function sendVoice($chat_id, string $voice, string $caption = null, $duration = null, int $reply_to_message_id = null)
    {
        return returnedMessage::create($this->bot('sendVoice', compact('chat_id', 'voice', 'caption', 'duration', 'reply_to_message_id')));
    }

    /**
     * @return returnedMessage
     */
    public function sendLocation($chat_id, float $latitude, float $longitude, int $reply_to_message_id = null)
    {
        return returnedMessage::create($this->bot('sendLocation', compact('chat_id', 'latitude', 'longitude', 'reply_to_message_id')));
    }

    /**
     * @return returnedMessage
     */
    public function sendContact($chat_id, string $phone_number, string $first_name, string $last_name, int $reply_to_message_id = null)
    {
        return $this->bot('sendContact', compact('chat_id', 'phone_number', 'first_name', 'last_name', 'reply_to_message_id'));
    }

    /**
     * @return returnedFile
     */
    public function getFile(string $file_id)
    {
        return returnedFile::create($this->bot('getFile', compact('file_id')));
    }

    /**
     * @return returnedChat
     */
    public function getChat($chat_id)
    {
        return returnedChat::create($this->bot('getChat', compact('chat_id')));
    }

    /**
     * @return returnedChatMember
     */
    public function getChatAdministrators($chat_id)
    {
        return returnedChatMember::create($this->bot('getChatAdministrators', compact('chat_id')));
    }

    /**
     * @return returnedInt
     */
    public function getChatMembersCount($chat_id)
    {
        return returnedInt::create($this->bot('getChatMembersCount', compact('chat_id')));
    }

    /**
     * @return returnedChatMember
     */
    public function getChatMember($chat_id, int $user_id)
    {
        return returnedChatMember::create($this->bot('getChatMember', compact('chat_id', 'user_id')));
    }


    /**
     * @return returnedMessage
     */
    public function sendInvoice(int $chat_id, string $title, string $description, string $payload, string $provider_token, string $start_parameter, string $currency, array $prices, string $provider_data = null, string $photo_url = null, int $photo_size = null, int $photo_width = null, int $photo_height = null, bool $need_name = false, bool $need_phone_number = false, bool $need_email = false, bool $need_shipping_address = false, bool $send_phone_number_to_provider = false, bool $send_email_to_provider = false, bool $is_flexible = false, int $reply_to_message_id = null, array $reply_markup = null)
    {
        return returnedMessage::create($this->bot('sendInvoice', compact('chat_id', 'title', 'description', 'payload', 'provider_token', 'start_parameter', 'currency', 'prices', 'provider_data', 'photo_url', 'photo_size', 'photo_width', 'photo_height', 'need_name', 'need_phone_number', 'need_email', 'need_shipping_address', 'send_phone_number_to_provider', 'send_email_to_provider', 'is_flexible', 'disable_notification', 'reply_to_message_id', 'reply_markup')));
    }

}
