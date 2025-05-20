<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Panda\Core\Http\Response\JsonResponse;
use Panda\Config\EnvLoader;
use Panda\Core\Controllers\Controller;
use Panda\Core\Http\Request\Request;

try {
    EnvLoader::class::load(dirname(__DIR__) . '/.env');
} catch (Exception $e) {
    echo $e->getMessage();
}
$request = new Request($_SERVER, $_GET, $_POST, $_FILES, $_COOKIE);
$router = include '../routes/client.php';
$method = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
try {
    $router->resolve($method, $uri, $request);
} catch (Exception $e) {
    $baseController = new Controller();
    JsonResponse::success(['error' => $e->getMessage()], $e->getCode());
}