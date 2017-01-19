<?php

namespace TypiCMS\Modules\Roles\Repositories;

use TypiCMS\Modules\Core\Repositories\EloquentRepository;
use TypiCMS\Modules\Roles\Models\Role;

class EloquentRole extends EloquentRepository
{
    protected $repositoryId = 'roles';

    protected $model = Role::class;

    /**
     * Get all models.
     *
     * @param array $with Eager load related models
     * @param bool  $all  Show published or all
     *
     * @return Collection|NestedCollection
     */
    public function all(array $with = [], $all = false)
    {
        return $this->with($with)->order()->get();
    }
}
