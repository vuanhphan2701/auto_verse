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

    // xóa news
    public function delete($id): void
    {
        $news = $this->model->find($id);
        if ($news) {
            $news->delete();
        } else {
            throw new \Exception("News with ID {$id} not found.");
        }
    }

    // lấy thông tin bài báo theo id
    public function getNewsById($id): object
    {
        return $this->model->find($id);
    }

    // save news
    public function save(array $fields): mixed
    {
        foreach ($fields as $key => $value) {
            $this->model->$key = $value;
        }
        return $this->model->save();
    }

    // search news
    public function search($title): array
    {
        return DB::table('news')
            ->where('title', 'LIKE', "%{$title}%")
            ->get();
    }
}
