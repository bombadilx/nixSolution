<?php

namespace app\core;

class View {
    
    public $path;
    public $route;
    public $layout = 'layout';

    public function __construct($route) {
        $this->route = $route;
        $this->path =  $route['controller'] .'/'. $route['action'];
    }

    public function render($title, $vars = []) {
        ob_start();
        require 'app/views/' . $this->path . '.php';
        $content = ob_get_clean();
        require_once 'app/views/layouts/' .$this->layout. '.php';
    }
}
