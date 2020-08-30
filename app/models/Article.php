<?php

namespace app\models;

use app\core\Model;

class Article extends Model
{
    private $id;
    private $title;
    private $img;
    private $descriptions;

    private $articles;

    public function selectAll()
    {
        $this->articles = $this->db->row("SELECT * FROM article");
        return $this->articles;
    }

    public function create($title,$img,$descriptions)
    {
        # code...
    }

    public function delete($id)
    {
        # code...
    }

    public function update($title,$img,$descriptions)
    {
        # code...
    }

    public function getPost() {
        $result = $this->selectAll();
        
        return $result;        
    }
}
