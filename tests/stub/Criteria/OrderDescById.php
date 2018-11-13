<?php

namespace CodePress\CodeDatabase\Contracts\Criteria;


use CodePress\CodeDatabase\Contracts\CriteriaInterface;
use CodePress\CodeDatabase\Contracts\RepositoryInterface;

class OrderDescById implements CriteriaInterface
{


    public function apply($model, RepositoryInterface $repository)
    {
        return $model->orderBy('id', 'desc');

    }
}