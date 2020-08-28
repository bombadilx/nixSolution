<?php

namespace app\models;

use app\core\Model;

class Profile extends Model {
    
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
