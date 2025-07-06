<?php
namespace App\Core;

class Controller {

    protected function getMethod() {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    protected function prepareRequest() {
        $body = [];
        if (self::getMethod() === 'get') {
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        if (self::getMethod() === 'post') {
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        return $body;
    }
}
?>