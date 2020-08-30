<?php

namespace app\models;

use app\core\Model;

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

    public function getUser($id)
    {
        $result = $this->select($id);
        return $result;
    }
    public function updateStatus($id,$status)
    {
        $result = $this->update($id,$status);
        return $result;
    }
}
