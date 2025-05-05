<?php

namespace Modules\Base\Repositories\Eloquent;

use Modules\Base\app\Models\Base;
use Modules\Base\Repositories\Interfaces\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface
{
    public function create(array $data)
    {
        return Base::create($data);
    }

    public function findById($id)
    {
        return Base::findOrFail($id);
    }

    public function getAll()
    {
        return Base::all();
    }
}
