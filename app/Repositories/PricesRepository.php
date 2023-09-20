<?php

namespace App\Repositories;

use App\Models\Price as Model;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class PricesRepository extends CoreRepository
{
    final public function __construct()
    {
        parent::__construct();
    }

    final protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    final public function getAll()
    {
        return $this->model->get();
    }
}
