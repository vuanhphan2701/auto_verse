<?php

namespace Controllers;

class UserController
{

    public function login()
    {
        $data = ['content_view' => 'user/login.php'];
        dd($_POST);

        return view('admin/LayoutLogin', $data);
    }

    public function index()
    {

        $data = ['content_view' => '/home.php'];
        return view('layoutAdmin', $data);
    }
}
