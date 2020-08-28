<?php

use app\lib\Db;

$name = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$path = "app/image/". $name;
$id = $_SESSION['id'];
move_uploaded_file($tmp_name, $path);

$db = new Db;

$db->query("UPDATE users SET img = '$path' WHERE id ='$id'");

header("Location: profile");