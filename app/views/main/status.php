<?php

use app\lib\Db;

$id = $_SESSION['id'];

$db = new Db;

$status = $_POST['status'];

$db->query("UPDATE users SET status = '$status' WHERE id ='$id'");


header("Location: profile");
