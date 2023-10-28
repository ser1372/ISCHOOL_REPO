<?php

namespace App\Repositories;

use App\Models\Advantage as Model;

class AdvantageRepository extends CoreRepository
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

        return $this->model->get(['img', 'advantages_ua', 'advantages_en']);
    }

}
