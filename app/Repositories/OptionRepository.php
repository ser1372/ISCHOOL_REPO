<?php

namespace App\Repositories;

use App\Models\Option as Model;

class OptionRepository extends CoreRepository
{

    final public function __construct()
    {
        parent::__construct();
    }

    final protected function getModelClass()
    {
        return Model::class;
    }

    final public function getOption($name)
    {
        return $this->model->where('name', $name)->first();
    }

}
