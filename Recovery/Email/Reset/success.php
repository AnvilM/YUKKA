<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  
    <link type="image/x-icon" href="../../../Images/icon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="fs.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YUKKA | Восстановление пароля</title>
    
    <?php
$first = '<div id="errBox"><div id="sccMsg"><h1>Успех</h1>';
$last = ' </div></div>';

$type = $_GET['type'];

if($type == 'sendlink')
{
    $text = '<p>Вам отправлена ссылка на восстановление пароля</p>';
    echo ''.$first.''.$text.''.$last.'';
    echo '<p onclick="ID()" id="spam">Не пришла ссылка?</p>';
}

else if($type == 'sendpass')
{
    $first = '<div id="errBox"><div id="sccMsg"><h1>Успех</h1>';
    $last = ' <a href="https://yukkamc.ru">На главную</a></div></div>';
    $text = '<p>Вам отправлен новый пароль</p>';
    echo ''.$first.''.$text.''.$last.'';
    echo '<p onclick="ID()" id="spam">Не пришел пароль?</p>';
}

?>
</head>
<script src="fss.js"></script>
<body>
<div class="message" id="mess">
            <p>Проверьте папку СПАМ</p>
        </div>
</body>
</html>