<?php

namespace application\core;

class View 
{

    public $path;
    public $route;

    public function __construct($route) {
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
    }

    public function render($title, $vars = []) {
        extract($vars);
        //debug($this->path);
        if(file_exists('application/views/'.$this->path.'.php')) {
            ob_start();
            $data = $vars;
            require 'application/views/'.$this->path.'.php';
        } else {
            View::errorCode(404);
        }
        
    }

    public static function errorCode($code) {
        http_response_code($code);
        require 'application/views/errors/'.$code.'.php';
        exit;
    }

    public function redirect($url) {
        header('location: '.$url);
        exit;
    }


}