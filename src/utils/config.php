<?php
namespace ModelPro\Utils;

/**
 * Singleton das configurações.
 */
class Config {
    private static $data;

    private function __construct () {
        $json = file_get_contents(__DIR__ . '/../config/app.json');
        self::$data = json_decode($json, true);
    }

    public static function instance () {
        static $instance = false;
        if ($instance === false) {
            $instance = new static();
        }
        return $instance;
    }

    public function get ($key) {
        if (self::$data[$key] !== null) {
            return self::$data[$key];
        } else {
            throw new NotFoundException("Chave $key não encontrada em config");
        }
    }
}