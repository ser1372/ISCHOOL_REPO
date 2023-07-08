<?php

namespace  App\Repositories;
use App\Models\Price as Model;

class PricesRepository extends CoreRepository{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAll(){
        return $this->model->get();
    }
}
