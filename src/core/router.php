<?php
namespace ModelPro\Core;

use ModelPro\Controllers\ErrorController;
use ModelPro\Controllers\UserController;

/**
 * Classe do Router, que identifica e corretamente encaminha os parametros de URL
 */
class Router {
    private $routeMap;
    private static $regexPatterns = [
        'number' => '\d+',
        'string' => '\w'
    ];

    public function __construct () {
        $json = file_get_contents(__DIR__ . '/../config/routes.json');
        $this->routeMap = json_decode($json, true);
    }

    public function route (Request $request) {
        $path = $request->getPath();

        // Buscar dentre as rotas definidas a representada pela requisição
        foreach ($this->routeMap as $route => $info) {
            $regexRoute = $this->getRegexRoute($route, $info);
            if (preg_match("@^/$regexRoute$@", $path)) {
                return $this->executeController($route, $path, $info, $request);
            }
        }

        // Se nenhuma rota for encontrada para o caminho definido, executa esse Controller de erro e retorna o output dele.
        $errorController = new ErrorController($request);
        return $errorController->notFound();
    }

    private function getRegexRoute ($route, array $info) {
        if (isset($info['params'])) {
            foreach ($info['params'] as $name => $type) {
                $route = str_replace(':' . $name, self::$regexPatterns[$type], $route);
            }
        }

        return $route;
    }

    private function extractParams ($route, $path) {
        $params = [];

        $pathParts = explode('/', $path);
        $routeParts = explode('/', $route);

        foreach ($routeParts as $key => $routePart) {
            if (strpos($routePart, ':') === 0) {
                $name = substr($routePart, 1);
                $params[$name] = $pathParts[$key+1];
            }
        }

        return $params;
    }

    private function executeController ($route, $path, array $info, Request $request) {
        $controllerName = 'ModelPro\Controllers\\' . $info['controller'] . 'Controller';
        $controller = new $controllerName($request);

        // Se a página necessita de login, checar se o id do usuário está nos cookies.
        // PS: inseguro
        if (isset($info['login']) && $info['login']) {
            if ($request->getCookies()->has('user')) {
                $userId = $request->getCookies()->get('user');
                $controller->setUserId($userId);
            } else {
                // Se precisar e não achar cookie de login, chamar controller de erro.
                $errorController = new UserController($request);
                return $errorController->login();
            }
        }

        $params = $this->extractParams($route, $path);
        return call_user_func_array([$controller, $info['method']], $params);
    }
}