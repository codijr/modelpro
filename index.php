<?php
/**
 * Esse arquivo recebe as requisições, direciona elas para o router e mostra a resposta.
 * Na maioria dos casos, serão modificados os controladores e views para mudar o fluxo do programa, não esse arquivo.
 */
require_once __DIR__ . '/vendor/autoload.php';

use ModelPro\Core\Router;
use ModelPro\Core\Request;

$router = new Router();
$response = $router->route(new Request());
echo $response;
