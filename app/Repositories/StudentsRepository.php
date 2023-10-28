<?php

namespace App\Repositories;

use App\Models\Student as Model;
use App\Services\TelegramServices;

class StudentsRepository extends CoreRepository
{
    private mixed $telegramServices;

    final public function __construct()
    {
        parent::__construct();
        $this->telegramServices = app(TelegramServices::class);
    }

    final protected function getModelClass()
    {
        return Model::class;
    }


    final public function create($data)
    {
        $model = new $this->model;
        $model->name = $data['name'];
        $model->city = $data['city'];
        $model->country = $data['country'];
        $model->phone_or_telegram = $data['tel'];
        $model->email = $data['email'];
        $model->source = $data['source'];
        return $model->save();
    }

}
