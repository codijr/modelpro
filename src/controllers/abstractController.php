<?php
namespace ModelPro\Controllers;

use ModelPro\Core\Config;
use ModelPro\Core\Database;
use ModelPro\Core\Request;
use Twig_Environment;
use Twig_Loader_Filesystem;

class AbstractController {
    protected $request;
    protected $database;
    protected $config;
    protected $view;
    protected $log;

    public function __construct (Request $request) {
        $this->request = $request;
        $this->database = Database::instance();
        $this->config = Config::instance();

        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../views');
        $this->view = new Twig_Environment($loader);
    }

    public function render ($template, array $params) {
        return $this->view->loadTemplate($template)->render($params);
    }
}