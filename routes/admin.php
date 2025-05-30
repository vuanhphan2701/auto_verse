<?php
    
use Panda\Core\Routes\Router;
use Controllers\ProductController;
use Controllers\UserController;
use Controllers\NewsController;

$prefix = basename(__FILE__, '.php');
$router = new Router($prefix);
//login
$router->get('/login/',[UserController::class, 'login']);

// get all product
$router->get('/home/',[ProductController::class,'listAdmin']);

// delete product
$router->get('/delete/',[ProductController::class,'delete']);

// get product by id
$router->get('/edit/',[ProductController::class,'getProductById']);
// save     
$router->post('/save/', [ProductController::class, 'save']);
// create
$router->get('/create/', [ProductController::class, 'create']);
// search product
$router->post('/search/', [ProductController::class, 'search']);



//----------------------------news-----------------------------------
// get all news
$router->get('/news/', [NewsController::class, 'index']); // List news
$router->get('/news/create/', [NewsController::class, 'create']); // Show create form
$router->post('/news/save/', [NewsController::class, 'save']); // Handle create/update form submission
$router->get('/news/edit/', [NewsController::class, 'edit']); // Show edit form
$router->get('/news/delete/', [NewsController::class, 'delete']); 
return $router;
