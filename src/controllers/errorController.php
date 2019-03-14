<?php
namespace ModelPro\Controllers;

use ModelPro\Core\Request;

class ErrorController {
    private $request;

    public function __construct (Request $request) {
        $this->request = $request;
    }

    public function notFound () {
        return "caminho errado :(";
    }

    public function login () {
        return "login doko";
    }
}