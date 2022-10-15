<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="auth.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link type="image/x-icon" href="../../Images/err.ico" rel="shortcut icon">
    <title>YUKKA | Авторизация</title>

<?php
$nick = $_POST['nickname'];
$pass = $_POST['password'];
$pass = md5($pass);

$first = '<div id="errBox"><div id="errMsg"><h1>Ошибка</h1>';
$last = ' <a href="../../Recovery/main">Восстановить пароль</a><p></p><a href="main">Назад</a></div></div>';

$bd = new mysqli('localhost','***','***','Users');
$lap = $bd-> query("SELECT * FROM `users` WHERE `nickname` = '$nick' AND `pass` = '$pass'");
$bd->close();
$lap = $lap->fetch_assoc();
if(count($lap)==0)
{
    $text = '<p>Неверный логин или пароль</p>';
    echo "<title>Ошибка</title>";
    echo ''.$first.''.$text.''.$last.'';
    setcookie('auth', '', time() + -3600*24*30, "/");
setcookie('pass', '', time() + -3600*24*30, "/");
    exit;
}
if($_COOKIE['auth'] != '')
{
    $text = '<p>Вы уже вошли в аккаунт</p>';
    echo "<title>Ошибка</title>";
    echo ''.$first.''.$text.''.$last.'';
    exit;
}


setcookie('auth', $nick, time() + 3600*24*30, "/");
setcookie('pass', $pass, time() + 3600*24*30, "/");
header("Location: https://yukkamc.ru");




?>
</head>
<body>
    
</body>
</html>