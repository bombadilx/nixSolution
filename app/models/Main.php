<?php

namespace app\models;

use app\core\Model;

class Main extends Model {
    
    public function getPost() {
        $articles = new Articles;
        $result = $articles->selectAll();
        return $result;        
    }
    public function getUser($id)
    {
        $user = new Users;
        $result = $user->select($id);
        return $result;
    }
    public function updateStatus($id,$status)
    {
        $user = new Users;
        $result = $user->update($id,$status);
        return $result;
    }
}

class Articles extends Model
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
}

class Users extends Model
{
    private $id;
    private $name;
    private $img;
    private $status;
    private $user;

    public function select($id)
    {
        $this->user = $this->db->row("SELECT * FROM users WHERE id = '$id'");
        return $this->user;
    }

    public function create()
    {
        # code...
    }

    public function delete()
    {
        # code...
    }

    public function update($id, $status)
    {
        $this->user = $this->db->row("UPDATE users SET status = '$status' WHERE id = '$id'");
    }
}

