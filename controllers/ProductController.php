<?php

namespace Controllers;

use Repositories\ProductRepository;

use Exception;

class ProductController
{
    /**
     * @throws Exception
     */
    private ProductRepository $ProductRepository;

    public function __construct()
    {
        $this->ProductRepository = new ProductRepository();
    }

    //load giao diện index
    public function index()
    {
        $listType = ['sport', 'new', 'supercar', 'luxury'];
        $auto_type = [];

        foreach ($listType as $type) {
            $auto_type[$type] = $this->ProductRepository->home($type);
        }

        $data=  [
            'content_view' => 'home.php',
            'auto_type' => $auto_type
        ];
        return view('/client/Layout', $data);
    }

    // láy chi thiết sản phẩm
    public function detail()
    {
        $data =  $this->ProductRepository->detail($_GET['id']);
        $images = $this->ProductRepository->loadImages($_GET['id']);
        $data=[
            'data' => $data,
            'images' => $images,
            'content_view' => 'Detail.php'
        ];
        return view('/client/Layout',$data);
    }

    // lấy danh sách Auto
    public function list()
    {
        $list = $this->ProductRepository->list();
        $data= [
            'list' => $list,
            'content_view' => 'List.php'
        ];
        return view('/client/Layout',$data);
    }

    // load tin tức
    public function news()
    {
        $data =  ['content_view' => 'News.php'];
        return view('/client/Layout',$data);
    }

//----------------------------------------------------Admin---------------------------------------------------
    // lấy danh sách tất cả auto
    public function listAdmin()
    {
        $listAuto = $this->ProductRepository->list();
        $data= [
            'list' => $listAuto,
            'content_view' => 'home.php'
        ];
        return view('/admin/layout',$data);
    }

    // xóa sản phẩm
    public function delete(){
        $id = $_GET['id'];
        $this->ProductRepository->delete($id);
        return redirect('/admin/home/');
    }


    // lây thông tin Edit sản phầm
    public function getProductById(){
        $id = $_GET['id'] ?? $_POST['id'] ?? null;
        $detail= $this->ProductRepository->find($id);
       // dd($detail);
        $data = [
            'product'=>$detail,
            'content_view'=>'edit.php'
        ];
        return view('/admin/layout', $data);
    }

    // edit sản phẩm
    public function save(){
        $field= ['id'=>8, 'name'=> 'a'];
        $this->ProductRepository->save($field);
        return redirect('/admin/home');
    }
    
    // tạo thêm sản phẩm
    public function create(){

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
