<?php 

use app\lib\Db;

session_start();

if (isset($_POST['login'])) 
{ 
    $login = $_POST['login']; 

    if ($login == '')
    { 
        unset($login);
    } 

}

if (isset($_POST['password'])) 
{ 
    $password=$_POST['password'];

    if ($password =='') 
    { 
        unset($password);
    } 
}

if (empty($login) or empty($password))
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}

$db = new Db;

$result = $db->row("SELECT * FROM users WHERE login='$login'");

$myrow = $result[0];

if (empty($myrow['password']))
{
    exit ("Извините, введённый вами login или пароль неверный.");
}
else {
    if ($myrow['password']==$password) {
        $_SESSION['login']= $myrow['login'];
        $_SESSION['id']= $myrow['id']; //эти данные очень часто используются, вот их и будет "носить с собой" вошедший пользователь
        echo "Вы успешно вошли на сайт! <a href='auth.php'>Главная страница</a>";
    }
    else {
        exit ("Извините, введённый вами login или пароль неверный.");
    }
}

header('Location: login');
