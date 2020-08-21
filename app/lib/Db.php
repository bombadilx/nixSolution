<?php 

namespace app\lib;

use PDO;

class DB {

    protected $db;

    public function __construct() {
        $config = require 'app/config/db.php';
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['name'].'', $config['user'], $config['password']);        
    }

    public function query($sql) {
        $query = $this->db->query($sql);
        return $query;
    }

    public function row($sql)
    {
        $result = $this->query($sql);
        return $result->fetchAll();
    }

    public function column($sql)
    {
        $result = $this->query($sql);
        return $result->fetchColumn();
    }
}