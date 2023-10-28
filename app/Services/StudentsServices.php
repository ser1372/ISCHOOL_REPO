<?php

namespace App\Services;

use App\Repositories\StudentsRepository;
use Telegram\Bot\Exceptions\TelegramSDKException;

class StudentsServices
{
    private StudentsRepository $studentsRepository;
    private TelegramServices $telegramServices;

    final public function __construct(StudentsRepository $studentsRepository, TelegramServices $telegramServices)
    {
        $this->studentsRepository = $studentsRepository;
        $this->telegramServices = $telegramServices;
    }

    /**
     * @throws TelegramSDKException
     */
    final public function create($data)
    {
        $msg = 'Новая заявка на сайте имя ученика: ' . $data['name'] . ' Город: ' . $data['city'] . ' Телефон или ник ТГ:' . $data['tel'];
        $this->telegramServices->sendMessage('443241569', $msg);
        return $this->studentsRepository->create($data);
    }

}
