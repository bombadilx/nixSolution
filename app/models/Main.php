<?php

namespace app\models;

use app\core\Model;

class Main extends Model {
    
    public function getPost() {
        $result = $this->articles->row("SELECT id,title,descriptions,img FROM article");
        return $result;
    }
}
