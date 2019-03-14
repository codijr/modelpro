<?php
    use ModelPro\Core\Router;
    use ModelPro\Core\Request;
    use ModelPro\Core\Database;
    use ModelPro\Models\ProjectDAO;

    require_once __DIR__ . '/vendor/autoload.php';

    $router = new Router();
    $response = $router->route(new Request());
    $loader = new Twig_Loader_Filesystem(__DIR__ . '\src\views');
    $twig = new Twig_Environment($loader);
    
    $projectDAO = new ProjectDAO(Database::instance());
    $project = $projectDAO->get(1);

    $params = ['project'=>$project];
    echo $twig->loadTemplate('project.twig')->render($params);
