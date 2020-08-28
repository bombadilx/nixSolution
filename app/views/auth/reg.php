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

$result = $db->row("SELECT id FROM users WHERE login='$login'");
$myrow = $result[0];

if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}

$result2 = $db->row("INSERT INTO users (login,password) VALUES('$login','$password')");

if ($result2=='TRUE')
{
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='auth.php'>Главная страница</a>";
}
else {
    echo "Ошибка! Вы не зарегистрированы.";
}
header('Location: login');
