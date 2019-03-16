<?php
    require_once __DIR__ . '/vendor/autoload.php';
    
    use ModelPro\Core\Router;
    use ModelPro\Core\Request;

    $router = new Router();
    $response = $router->route(new Request());
    echo $response;
