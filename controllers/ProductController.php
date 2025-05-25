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
            'content_view' => 'home.php'
        ];

        return view('/admin/layout', $data);
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
            'content_view' => 'edit.php'
        ];

        return view('/admin/layout', $data);
    }

    // edit sản phẩm
    public function save()
    {
        $productId = $_POST['id'] ?? null;
        $imageName = null;
        $uploadMessage = '';

        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $uploadDirectory = 'images';

            $imageName = $this->handleFileUpload(
                $_FILES['image'],
                $uploadMessage,
                $uploadDirectory
            );
            if ($imageName === false) {

                throw new Exception($uploadMessage);
            }
        } elseif ($productId) {
            $existingProduct = $this->productRepository->detail($productId);
           
            if ($existingProduct) {
                $imageName = $existingProduct->image; 
            }
        }

        $fields = [
            'id' => $productId,
            'name' => $_POST['name'] ?? null,
            'title' => $_POST['title'] ?? null,
            'description' => $_POST['description'] ?? null,
            'image' => $imageName,
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

        if (is_null($fields['id'])) {
            unset($fields['id']);
        }

        $this->productRepository->save($fields);

        return redirect('/admin/home/');
    }

    private function handleFileUpload(array $file, string &$uploadMessage = '', string $destinationFolder, array $allowedExtensions = ['.jpg', '.png', '.jpeg', '.gif', '.webp'], string $fileNamePrefix = 'product_', int $maxSizeMB = 2): string|false
    {
        if ($file['error'] !== UPLOAD_ERR_OK) {
            $uploadMessage = 'File upload error: ' . $file['error'];
            return false;
        }

        $maxSizeBytes = $maxSizeMB * 1024 * 1024;
        if ($file['size'] <= 0 || $file['size'] > $maxSizeBytes) {
            $uploadMessage = 'File size must be between 0 and ' . $maxSizeMB . 'MB.';
            return false;
        }

        $extension = strtolower(strrchr($file['name'], '.'));
        if (!in_array($extension, $allowedExtensions)) {
            $uploadMessage = 'Invalid file type. Allowed types: ' . implode(', ', $allowedExtensions);
            return false;
        }

        
        $targetDirectory = rtrim($destinationFolder, DIRECTORY_SEPARATOR); 

        $newFileName = $fileNamePrefix . time() . uniqid() . $extension;
        $fullPath = $targetDirectory . DIRECTORY_SEPARATOR . $newFileName;

     
        if (move_uploaded_file($file['tmp_name'], $fullPath)) { 
            return $newFileName; 
            $uploadMessage = 'Failed to move uploaded file. Check permissions and path: ' . $fullPath;
            return false;
        }
    }

    // tạo thêm sản phẩm
    public function create()
    {
        $data = ['content_view' => 'create.php'];
        return view('admin/layout', $data);
    }
}
