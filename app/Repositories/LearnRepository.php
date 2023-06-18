<?php

namespace App\Repositories;

use App\Models\Learn as Model;

class LearnRepository extends CoreRepository
{

    public function __construct()
    {
        parent::__construct();
    }

    protected function getModelClass()
    {
        return Model::class;
    }


    public function getAll()
    {
        return $this->model->get();
    }

}
