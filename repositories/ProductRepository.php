<?php

namespace Repositories;

use Models\Product;
use Panda\core\Database\DB;
use Panda\Core\Repositories\Repository;

class ProductRepository extends Repository
{
    protected mixed $model = Product::class;

    //load giao diện index
    public function home($auto_type):array
    {
     return DB::table('auto')
            ->where('auto_type','=',$auto_type)
            ->get();
    }

    // láy chi thiết sản phẩm
    public function detail($id):object
    {
         return $this->model->find($id);
    }

    public function loadImages($id):array
    {
       $sql='SELECT * FROM images INNER JOIN auto 
             ON images.image_id = auto.id
             WHERE auto.id = ?';
       return DB::query($sql,[$id]);
    }

    // lấy danh sách Auto
    public function list():array
    {
      return $this->model->all();
    }


}
