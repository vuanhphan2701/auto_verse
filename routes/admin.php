<?php
    
use Panda\Core\Routes\Router;
use Controllers\ProductController;
use Controllers\UserController;
use Controllers\NewsController;

$prefix = basename(__FILE__, '.php');
$router = new Router($prefix);

$router->get('/home/',[ProductController::class,'listAdmin']);// get all product


$router->get('/delete/',[ProductController::class,'delete']);// delete product


$router->get('/edit/',[ProductController::class,'getProductById']);// get product by id

$router->post('/save/', [ProductController::class, 'save']);// save     

$router->get('/create/', [ProductController::class, 'create']);// create


$router->post('/search/', [ProductController::class, 'search']);// search product



//----------------------------news-----------------------------------

$router->get('/news/', [NewsController::class, 'index']); // List news

$router->get('/news/create/', [NewsController::class, 'create']); // Show create form

$router->post('/news/save/', [NewsController::class, 'save']); // Handle create/update form submission

$router->get('/news/edit/', [NewsController::class, 'edit']); // Show edit form

$router->get('/news/delete/', [NewsController::class, 'delete']); // Delete news item

$router->post('/news/search/', [NewsController::class, 'search']); // Search news items

//----------------------------user-----------------------------------
$router->get('/users/login/',[UserController::class, 'login']);// login user


$router->get('/users/', [UserController::class, 'index']); // List users

$router->get('/users/create/', [UserController::class, 'create']); // Show create user form

$router->post('/users/save/', [UserController::class, 'save']); // Handle create/update user form

$router->get('/users/edit/', [UserController::class, 'edit']); // Show edit user form

$router->get('/users/delete/', [UserController::class, 'delete']); // Delete user

$router->post('/users/search/', [UserController::class, 'search']); // Search users
return $router;
