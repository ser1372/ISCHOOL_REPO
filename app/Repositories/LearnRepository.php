<?php

namespace App\Repositories;

use App\Models\Learn as Model;

class LearnRepository extends CoreRepository
{

    final public function __construct()
    {
        parent::__construct();
    }

    final protected function getModelClass()
    {
        return Model::class;
    }


    final public function getAll()
    {
        return $this->model->get();
    }

}
