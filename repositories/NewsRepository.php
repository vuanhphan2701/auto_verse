<?php

namespace Repositories;

use Models\News;
use Panda\Core\Repositories\BaseRepository;
use Panda\Core\Database\DB;
use Panda\Core\Repositories\Repository;

class NewsRepository extends Repository
{
    protected mixed $model = News::class;

    public function getAllNews(): array
    {
        return $this->model->all();
    }
}
