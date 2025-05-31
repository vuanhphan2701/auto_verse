<?php

namespace Controllers;

use Repositories\NewsRepository;
use Exception;

class NewsController
{
    private NewsRepository $newsRepository;

    public function __construct()
    {
        $this->newsRepository = new NewsRepository();
    }

    // lấy tất cả các tin tức 
    public function index()
    {
        $newsList = $this->newsRepository->getAllNews();
        $data = [
            'newsList' => $newsList,
            'content_view' => 'News/list.php'
        ];
        return view('/admin/Layout', $data);
    }

    // xóa tin tức
    public function delete()
    {
        $this->newsRepository->delete($_GET['id'] ?? null);
        return redirect('/admin/news/');
    }

    // lấy thông tin bài báo theo id
    public function edit()
    {
        $news = $this->newsRepository->getNewsById($_GET['id']);
        $data = [
            'news' => $news,
            'content_view' => 'news/Edit.php'
        ];
        return view('/admin/Layout', $data);
    }

    //save news
    public function save()
    {

        $newsid = $_POST['id'] ?? null;

        $avt = $_FILES['image'] ?? null;


        $folder = rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . 'images';

        $imgMessenger = '';

        if (isset($_FILES['image']['error']) && $_FILES['image']['error'] == 0) {
            $avt = $this->myUpLoad($_FILES['image'], $imgMessenger, $folder);
        }

        $fields = [
            'id' => $newsid,
            'image' => $avt ?? 'null',
            'title' => $_POST['title'] ?? '',
            'description' => $_POST['description'] ?? '',
            'url' => $_POST['url'] ?? '',
            'updated_at' => date('Y-m-d H:i:s'),
            'created_at' => date('Y-m-d H:i:s')
        ];

        $this->newsRepository->save($fields);
        return redirect('/admin/news/');
    }

    // tạo news
    public function create()
    {
        $data = ['content_view' => 'news/Create.php'];
        return view('/admin/Layout', $data);
    }

    // search news
    public function search(){
        $title = $_POST['title'] ?? '';
        $newsList = $this->newsRepository->search($title);
        dd($newsList);
        $data = [
            'newsList' => $newsList,
            'content_view' => 'News/list.php'
        ];
        return view('/admin/Layout', $data);
    }

    //---------------------------------------------------------------------------------------------------

    // upload file
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
