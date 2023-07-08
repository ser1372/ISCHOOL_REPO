<?php

namespace App\Services;
class TelegramServices
{

    public function telegramSendMessage($chatId, $msg, $token = '6153244256:AAFWKB1Vc6lmSUJPjUu-PAim6gYk_-cD4Lk')
    {
        if (!empty($chatId)) {
            $url = "https://api.telegram.org/bot{$token}/sendMessage?";
            $url .= http_build_query(['chat_id' => $chatId, 'text' => $msg, 'parse_mode' => 'HTML']);
            file_get_contents($url);
            return true;
        }
        return false;
    }

}