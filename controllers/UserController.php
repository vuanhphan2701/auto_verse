<?php
namespace Controllers;
class UserController{
    
    public function login(){

    $data = ['content_view'=>'admin/login.php'];

    return view('layoutAdmin',$data);
    }

    public function index(){

        $data=['content_view'=>'admin/home.php'];
        return view('layoutAdmin',$data);
    }

}