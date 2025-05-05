<?php

namespace Modules\Base\Repositories\Interfaces;

interface BaseRepositoryInterface
{
    public function create(array $data);
    public function findById($id);

    public function getAll();
}
