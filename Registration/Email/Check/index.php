<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    include('../../Check/accountCheck.php');
$nick = $_POST['nickname'];
$tg = $_POST['telegram'];
$pass = $_POST['password'];
$pass2 = $_POST['rePassword'];
$pass = md5($pass);
$pass2 = md5($pass2);
$first = '<div id="errBox"><div id="errMsg"><h1>Ошибка</h1>';
$last = ' <a href="../main">Назад</a></div></div>';
$text = '';
//htg
$bd = new mysqli('localhost','***','***','Users');
$hn = $bd->query("SELECT * FROM `users` WHERE `email` = '$tg'");
$bd->close();
$hn = $hn->fetch_assoc();
if (count($hn)!=0)
{
    
    $last = ' <a href="../../../Recovery/main">Восстановить пароль</a><p></p><a href="../main">Ввести другой Telegram ID</a></div></div>';
    $text = '<p>Данный Email Занят</p>';
    echo '<link type="image/x-icon" href="../../../Images/err.ico" rel="shortcut icon">';
    echo "<title>Ошибка</title>";
    echo ''.$first.''.$text.''.$last.'';
    exit;
    
}

//hn
$bd = new mysqli('localhost','***','***','Users');
$hn = $bd->query("SELECT * FROM `users` WHERE `nickname` = '$nick'");
$bd->close();
$hn = $hn->fetch_assoc();
if (count($hn)!=0)
{
    $text = '<p>Никнейм занят</p>';
    echo '<link type="image/x-icon" href="../../../Images/err.ico" rel="shortcut icon">';
    echo "<title>Ошибка</title>";
    echo ''.$first.''.$text.''.$last.'';
    exit;
}
//n
if (strlen($nick)<3 || strlen($nick)>16 || preg_match('/[^0-9A-Za-z]/', $nick) == true)
{
    $text = '<p>Длина никнейма должна быть не менее трёх и не более шестнадцати символов</p><br><p>Никнейм может содержать только цифры и латинские буквы</p>';
    echo '<link type="image/x-icon" href="../../../Images/err.ico" rel="shortcut icon">';
    echo "<title>Ошибка</title>";
    echo ''.$first.''.$text.''.$last.'';
    exit;
}
//t
if (!filter_var($tg, FILTER_VALIDATE_EMAIL)|| strlen($tg)<=0)
{
    $text = '<p>Некорректное значение Telegram ID</p>';
    echo '<link type="image/x-icon" href="../../../Images/err.ico" rel="shortcut icon">';
    echo "<title>Ошибка</title>";
    echo ''.$first.''.$text.''.$last.'';
    exit;
}


//p
if (strlen($pass)<8)
{
    $text = '<p>Длина пароля должна быть не менее восьми символов</p>';
    echo '<link type="image/x-icon" href="../../../Images/err.ico" rel="shortcut icon">';
    echo "<title>Ошибка</title>";
    echo ''.$first.''.$text.''.$last.'';
    exit;
}


//pp
if ($pass != $pass2)
{
    $text = '<p>Пароли не совпадают</p>';
    echo '<link type="image/x-icon" href="../../../Images/err.ico" rel="shortcut icon">';
    echo "<title>Ошибка</title>";
    echo ''.$first.''.$text.''.$last.'';
    exit;
}
require('../Accept/send.php');
send();


?>

</head>
<body>
    
</body>
</html>



