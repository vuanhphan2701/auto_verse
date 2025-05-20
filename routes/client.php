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

$router->get('/list/', [ProductController::class, 'list']);
$router->get('/news/', [ProductController::class, 'news']);


return $router;
?>