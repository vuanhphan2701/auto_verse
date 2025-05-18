<?php

namespace Repositories;

use Models\AutoModel;
use Panda\core\Database\DB;

class AutoRepository
{
    public function home($auto_type)
    {
        $sql = "SELECT * FROM `auto` WHERE `auto_type` = ?";
        $params = [$auto_type];
        $stmt = DB::query($sql, $params);
        return $stmt;
    }
    public function detail($id)
    {
        $autoModel = new AutoModel();
        $detail =  $autoModel->find($id);
        //dd($detail);
        return $detail;
    }
    public function loadImages($id){
        $sql= "SELECT * FROM `images` WHERE image_id = (SELECT Id FROM auto WHERE Id = ?)";
        $params = [$id];
        $stmt = DB::query($sql, $params);
        return $stmt;
    }
    public function list(){
        $autoModel = new AutoModel();
        $list =  $autoModel->all();
       //dd($list);
       return $list;
    }
}
