<?php

namespace Controllers;

use Models\AutoModel;
use Repositories\AutoRepository;

use Exception;

class HomeController
{
    /**
     * @throws Exception
     */

    public function home()
    {
        $AutoModel = new AutoRepository();
        $listType = ['sport', 'new', 'supercar', 'luxury'];
        $auto_type = [];
        foreach ($listType as $type) {
            $auto_type[$type] = $AutoModel->home($type);
        }
        return view(
            'Layout',
            [
                'contentView' => 'client/Home.php',
                'auto_type' => $auto_type
            ]
        ); // Truyền dữ liệu cho View
    }


    public function Detail()
    {
        $autoModel = new AutoRepository();
        $data =  $autoModel->detail($_GET['id']);
        $images = $autoModel->loadImages($_GET['id']);
        
        return view(
            'Layout',
            [
                'contentView' => 'client/Detail.php',
                'data' => $data,
                'images' => $images
            ]
        ); // Truyền dữ liệu cho View
    }
    public function List()
    {
        $autoRepository = new AutoRepository();
        $list = $autoRepository->list();

        return view(
            'Layout',
            [
                'contentView' => 'client/List.php',
                'List' => $list
            ]
        ); // Truyền dữ liệu cho View
    }
    public function news()
    {
        return view(
            'Layout',
            [
                'contentView' => 'client/News.php'
            ]
        ); // Truyền dữ liệu cho View
    }





    // public function deleteUser($id)
    // {
    //     //  dd($_POST);
    //     $userId = $_POST['id'] ?? $_GET['id'] ?? null;
    //     $userModel = new UserModel();
    //     $user = $userModel->find($userId);
    //     // dd($user);
    //     if ($user) {
    //         $user->delete();
    //         return redirect('/admin/home');
    //     }
    // }
    // public function editForm($id)
    // {
    //     $userId = $_POST['id'] ?? $_GET['id'] ?? null;
    //     $userModel = new UserModel();
    //     $user =  $userModel->find($userId);
    //     // dd($user);
    //     return view('EditUser', ['user' => $user]);
    // }
    // public function editUser($id)
    // {
    //     //  dd($_POST);
    //     $userId = $_POST['id'] ?? $_GET['id'] ?? null;
    //     $userModel = new UserModel();
    //     $user =  $userModel->find($userId);
    //    // dd($user);
    //     if ($user) {
    //         $user->user_name = $_POST['username'];
    //         $user->email = $_POST['email'];
    //         $user->save();
    //         return redirect('/admin/home');
    //     }
    // }
    // // adđ user
    // public function addForm()
    // {
    //     return view('AddUser');
    // }
    // public function addUser()
    // {
    //     $userModel= new userModel();
    //     $userModel->user_name= $_POST['username'];
    //     $userModel->email= $_POST['email'];
    //     $userModel->password= password_hash($_POST['password'], PASSWORD_DEFAULT);
    //     $userModel->created_at= date('Y-m-d H:i:s');
    //     $userModel->updated_at= date('Y-m-d H:i:s');
    //     $userModel->save();
    //     return redirect('/admin/home');}
}
