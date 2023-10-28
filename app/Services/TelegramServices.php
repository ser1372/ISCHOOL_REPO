<?php

namespace App\Services;

use Telegram\Bot\Api;
use Telegram\Bot\Exceptions\TelegramSDKException;

class TelegramServices
{
    protected Api $telegram;

    /**
     * Create a new controller instance.
     *
     * @param Api $telegram
     */
    final public function __construct(Api $telegram)
    {
        $this->telegram = $telegram;
    }

    /**
     * Show the bot information.
     */
    final public function show(): \Telegram\Bot\Objects\User
    {
        $response = $this->telegram->getMe();

        return $response;
    }

    /**
     * Send message in chat
     * @throws TelegramSDKException
     */
    final public function sendMessage(int $chatId, string $msg): \Telegram\Bot\Objects\Message
    {

        return $this->telegram->sendMessage([
            'chat_id' => $chatId,
            'text' => $msg
        ]);

    }

}
