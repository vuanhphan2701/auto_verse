<?php 
use Panda\Core\Routes\Router;
use Controllers\HomeController;
$prefix = basename(__FILE__,'.php');
$router = new Router($prefix);

//vùng cấu hình route
// list users
$router->get('/home/', [HomeController::class, 'Home']);
// detail 
$router->get('/detail/', [HomeController::class, 'Detail']);

$router->get('/list/', [HomeController::class, 'List']);
$router->get('/news/', [HomeController::class, 'news']);



// delete user
$router->post('/user/delete', [HomeController::class, 'deleteUser']); 
// edit user
$router->post('/user/edit', [HomeController::class, 'editForm']);
$router->post('/user/saveEdit', [HomeController::class, 'editUser']);
// add user
$router->get('/user/add',[HomeController::class, 'addForm']);
$router->post('/user/saveAdd', [HomeController::class, 'addUser']);

$router->get('/resource/css/style.css',[HomeController::class, 'listUsers']);




return $router;
?>