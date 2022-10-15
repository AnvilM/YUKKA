<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link type="image/x-icon" href="../Images/icon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="check.css">
    <title>YUKKA</title>
</head>
</html>
<?php
    $first = '<div id="errBox"><div id="errMsg"><h1>Ошибка</h1>';
    $last = ' <a href="main">Назад</a></div></div>';
    $text = '';
    $token = "5401136523:AAGYoG-OlZG_pfsr9qZUuka9zNPFA1ufNh4";
    $tg = $_POST['tg'];
    if (preg_match('/[^\d]/', $tg) || strlen($tg)<=0)
{
    header("Location: ../Reset/fail.php?type=invalidid");
    exit;
}
require ('send.php');
?>