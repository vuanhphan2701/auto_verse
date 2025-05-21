<?php 
use Panda\Core\Routes\Router;
use Controllers\ProductController;
$prefix = basename(__FILE__,'.php');
$router = new Router($prefix);

//vùng cấu hình route
// list users
$router->get('/home/', [ProductController::class, 'index']);
// detail 
$router->get('/detail/', [ProductController::class, 'detail']);
// list auto
$router->get('/list/', [ProductController::class, 'list']);
// list new
$router->get('/news/', [ProductController::class, 'news']);

// --------------------- admin -----------------------------

return $router;
?>