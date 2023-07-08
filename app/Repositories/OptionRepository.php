<?php

namespace App\Repositories;

use App\Models\Option as Model;

class OptionRepository extends CoreRepository
{

    public function __construct()
    {
        parent::__construct();
    }

    protected function getModelClass()
    {
        return Model::class;
    }

    public function getOption($name)
    {
        return $this->model->where('name', $name)->first();
    }

}