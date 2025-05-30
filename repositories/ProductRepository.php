<?php

namespace Repositories;

use Models\Product;
use Panda\core\Database\DB;
use Panda\Core\Repositories\Repository;

class ProductRepository extends Repository
{
    protected mixed $model = Product::class;

    //load giao diện index
    public function getProductByType($type): array
    {
        return DB::table('auto')
            ->where('auto_type', '=', $type)
            ->get();
    }

    // láy chi thiết sản phẩm
    public function detail($id): object
    {
        return $this->model->find($id);
    }

    public function loadImages($id): array
    {
        $sql = 'SELECT * FROM images INNER JOIN auto 
             ON images.image_id = auto.id
             WHERE auto.id = ?';

        return DB::query($sql, [$id]);
    }

    // lấy danh sách Auto
    public function list(): array
    {
        return $this->model->all();
    }


    // xóa sản phẩm
    public function delete($id): void
    {
        $product = $this->model->find($id);

        if (isset($product)) {
            $product->delete();
        } else {
            throw new \Exception("Product not found");
        }
    }

    // lưu update &insert sản phẩm
    public function save(array $fields): mixed
    {
        foreach ($fields as $key => $value) {
            $this->model->$key = $value;
        }

        return $this->model->save();
    }


    // tìm kiếm sản phẩm
    public function search($name): array
    {
        return  DB::table('auto')
            ->where('name', 'LIKE', "%{$name}%")
            ->get();
    }
}
