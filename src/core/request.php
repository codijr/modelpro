<?php
namespace ModelPro\Core;

/**
 * Classe para filtrar as requisições/cookies e manipulá-las de forma mais segura.
 */
class Request {
    const GET = 'GET';
    const POST = 'POST';

    private $domain;
    private $path;
    private $method;
    private $params;
    private $cookies;

    public function __construct () {
        $this->domain = $_SERVER['HTTP_HOST'];
        $this->path = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->params = new FilteredMap(array_merge($_POST, $_GET));
        $this->cookies = new FilteredMap($_COOKIE);
    }

    public function getUrl () {
        return $this->domain . $this->path;
    }

    public function getDomain () {
        return $this->domain;
    }

    public function getPath () {
        return $this->path;
    }

    public function getMethod () {
        return $this->method;
    }

    public function isGet () {
        return $this->method === self::GET;
    }

    public function isPost () {
        return $this->method === self::POST;
    }

    public function getParams () {
        return $this->params;
    }

    public function getCookies () {
        return $this->cookies;
    }
}

class FilteredMap {
    private $map;

    public function __construct (array $basemap) {
        $this->map = $basemap;
    }

    public function has ($name) {
        return isset($this->map[$name]);
    }

    public function get ($name) {
        return isset($this->map[$name]) ? $this->map[$name] : null;
    }

    public function getInt ($name) {
        return (int) $this->get($name);
    }

    public function getNumber ($name) {
        return (float) $this->get($name);
    }

    public function getString ($name, $filter = true) {
        $value = (string) $this->get($name);
        return $filter ? addslashes($value) : $value;
    }
}