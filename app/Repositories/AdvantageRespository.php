<?php

namespace  App\Repositories;
use App\Models\Advantage as Model;

class AdvantageRespository extends CoreRepository{

    public function __construct()
    {
        parent::__construct();
    }

    protected function getModelClass()
    {
        return Model::class;
    }


    public function getAll(){

        return $this->model->get(['img','advantages_ua','advantages_en']);
    }

}
