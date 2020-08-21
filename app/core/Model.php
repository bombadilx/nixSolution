<?php

namespace app\core;

use app\lib\Db;

abstract class Model {
    public $articles; 

    public function __construct() {
        $this->articles = new Db();
    }
}