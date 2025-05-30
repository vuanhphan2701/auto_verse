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

    /**
     * @throws Exception
     */
    public function index()
    {
        $newsList = $this->newsRepository->getAllNews();
        $data = [
            'newsList' => $newsList,
            'content_view' => 'News/list.php'
        ];
        return view('/admin/Layout', $data);
    }
}
