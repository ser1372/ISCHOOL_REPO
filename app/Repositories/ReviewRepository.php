<?php


namespace App\Repositories;

use App\Models\Review as Model;

class ReviewRepository extends CoreRepository
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
