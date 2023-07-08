<?php

namespace App\Repositories;

use App\Models\Student as Model;
use App\Services\TelegramServices;

class StudentsRepository extends CoreRepository
{
    private mixed $telegramServices;

    public function __construct()
    {
        parent::__construct();
        $this->telegramServices = app(TelegramServices::class);
    }

    protected function getModelClass()
    {
        return Model::class;
    }


    public function create($data)
    {
        $model = new $this->model;
        $model->name = $data['name'];
        $model->city = $data['city'];
        $model->country = $data['country'];
        $model->phone_or_telegram = $data['tel'];
        $model->email = $data['email'];
        $model->source = $data['source'];
        $msg = 'Новая заявка на сайте имя ученика: ' . $data['name'] . ' Город: ' . $data['city'] . ' Телефон или ник ТГ:' . $data['tel'];
        $this->telegramServices->telegramSendMessage('443241569', $msg);
        return $model->save();
    }

}