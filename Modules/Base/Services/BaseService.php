<?php

namespace Modules\Base\Services;

use Modules\Base\Repositories\Interfaces\BaseRepositoryInterface;

class BaseService
{
    protected $baseRepository;

    public function __construct(BaseRepositoryInterface $baseRepository)
    {
        $this->baseRepository = $baseRepository;
    }

    public function getAll()
    {
        return $this->baseRepository->getAll();
    }
    public function create(array $data)
    {
        return $this->baseRepository->create($data);
    }
}
