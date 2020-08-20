<?php

namespace app\core;

abstract class Model {
    public $articles; 

    public function __construct() {
        require_once 'app/views/main/articles.php';
        $this->articles = $articles;
    }
}