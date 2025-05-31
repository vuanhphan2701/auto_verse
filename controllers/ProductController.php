<?php

namespace Controllers;

use Repositories\ProductRepository;

use Exception;

class ProductController
{
    /**
     * @throws Exception
     */
    private ProductRepository $productRepository;

    public function __construct()
    {
        $this->productRepository = new ProductRepository();
    }

    //load giao diện index
    public function index()
    {
        $listType = ['sport', 'new', 'supercar', 'luxury'];
        $autoType = [];

        foreach ($listType as $type) {
            $autoType[$type] = $this->productRepository->getProductByType($type);
        }

        $data =  [
            'content_view' => 'home.php',
            'auto_type' => $autoType
        ];

        return view('/client/Layout', $data);
    }

    // láy chi thiết sản phẩm
    public function detail()
    {
        $data =  $this->productRepository->detail($_GET['id']);
        $images = $this->productRepository->loadImages($_GET['id']);

        $data = [
            'data' => $data,
            'images' => $images,
            'content_view' => 'Detail.php'
        ];

        return view('/client/Layout', $data);
    }

    // lấy danh sách Auto
    public function list()
    {
        $list = $this->productRepository->list();

        $data = [
            'list' => $list,
            'content_view' => 'List.php'
        ];

        return view('/client/Layout', $data);
    }

    // load tin tức
    public function news()
    {
        $data =  ['content_view' => 'News.php'];

        return view('/client/Layout', $data);
    }

    //----------------------------------------------------Admin---------------------------------------------------

    // lấy danh sách tất cả auto
    public function listAdmin()
    {
        $listAuto = $this->productRepository->list();

        $data = [
            'list' => $listAuto,
            'content_view' => 'product/Home.php'
        ];

        return view('/admin/Layout', $data);
    }

    // xóa sản phẩm
    public function delete()
    {
        $id = $_GET['id'] ?? null;
        $this->productRepository->delete($id);

        return redirect('/admin/home/');
    }

    // lây thông tin Edit sản phầm
    public function getProductById()
    {
        $id = $_GET['id'] ?? $_POST['id'] ?? null;
        $detail = $this->productRepository->detail($id);

        $data = [
            'product' => $detail,
            'content_view' => 'product/Edit.php'
        ];

        return view('/admin/Layout', $data);
    }

    // lưu sản phẩm
    public function save()
    {
        $productId = $_POST['id'] ?? null;

        $avt = $_FILES['image'] ?? null;

        $imgMessenger = '';

        // lấy folder lưu trữ hình ảnh
        $uploadTargetDirectory = rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'images';

        if (isset($_FILES['image']['error']) && $_FILES['image']['error'] == 0) {
            $avt = $this->myUpload(
                $_FILES['image'] ?? null,
                $imgMessenger,
                $uploadTargetDirectory,
            );
        } else {
            if (!$_POST['avt_2']) {
                unlink($avt);
                $avt = '';
            }
        }

        // lấy giá trị user chỉnh sửa
        $fields = [
            'id' => $productId,
            'name' => $_POST['name'] ?? null,
            'title' => $_POST['title'] ?? null,
            'description' => $_POST['description'] ?? null,
            'image' => $avt,
            'auto_type' => $_POST['auto_type'] ?? null,
            'engine' => $_POST['engine'] ?? null,
            'power' => $_POST['power'] ?? null,
            'hop_so' => $_POST['hop_so'] ?? null,
            'dan_dong' => $_POST['dan_dong'] ?? null,
            'trong_luong' => $_POST['trong_luong'] ?? null,
            'chieu_dai' => $_POST['chieu_dai'] ?? null,
            'chieu_rong' => $_POST['chieu_rong'] ?? null,
            'chieu_cao' => $_POST['chieu_cao'] ?? null
        ];

        // lưu thông tin sản phẩm
        $this->productRepository->save($fields);

        return redirect('/admin/home/');
    }

    // tạo thêm sản phẩm
    public function create()
    {
        $data = ['content_view' => 'product/Create.php'];
        return view('admin/Layout', $data);
    }

    // tim kiếm sản phẩm
    public function search()
    {
        $search = $this->productRepository->search($_POST['name'] ?? null);

        $data = [
            'search' => $search,
            'key' => $_POST['name'] ?? null,
            'content_view' => 'product/Search.php'
        ];

        return view('/admin/Layout', $data);
    }



    
    //--------------------------------------- upload file-----------------------------------
    function myUpload($file, &$imgMessenger = '', $forder, $type = ['.jpg', '.png', '.jpeg', '.ico', '.svg', '.webp'], $name = 'file_', $maxsize = 2)
    {
        if (isset($file['error'], $file['tmp_name']) && $file['error'] == 0 && $file['tmp_name']) {

            $size1 = $maxsize * 1024 * 1024;

            if ($file['size'] < 0 && $file['size'] >= $size1) {
                $imgmsg = 'file need to < ' . $maxsize . 'mb';
                return false;
            }

            $ext = strtolower(substr($file['name'], strrpos($file['name'], '.')));

            if (!in_array($ext, $type)) {
                $imgmsg = 'chi cho phep dinh dang sau ' . implode(',', $type);
                return false;
            }

            $fullpath = $forder . '/' . $name . time() . $ext;

            if (move_uploaded_file($file['tmp_name'], $fullpath)) {
                return basename($fullpath);
            } else {
                $imgmsg = 'upload ko thanh cong';
                return false;
            }
        } else {
            $imgmsg = 'file ko hop le';
            return false;
        }
    }
}
