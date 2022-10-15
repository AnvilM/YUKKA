<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  
    <link type="image/x-icon" href="../../../Images/err.ico" rel="shortcut icon">
    <link rel="stylesheet" href="fs.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ошибка</title>
    
    <?php
$first = '<div id="errBox"><div id="errMsg"><h1>Ошибка</h1>';
$last = ' <a href="../../main">Назад</a></div></div>';

$type = $_GET['type'];
if($type == 'notfoundtg')
{
    $text = '<p>Пользователь не найден</p>';
    echo ''.$first.''.$text.''.$last.'';
}
else if($type == 'sendlink')
{
    $text = '<p>Не удалось отправить ссылку, попробуйте позже</p>';
    echo ''.$first.''.$text.''.$last.'';
}

else if($type == 'sendpass')
{
    $text = '<p>Не удалось отправить пароль, попробуйте позже</p>';
    echo ''.$first.''.$text.''.$last.'';
}

else if($type == 'notfoundhash')
{
    $text = '<p>Неверная ссылка, возможно, вы уже сбросили пароль.</p>';
    echo ''.$first.''.$text.''.$last.'';
}

else if($type == 'invalidid')
{
    $text = '<p>Некорректное значение Telegram ID</p>';
    echo ''.$first.''.$text.''.$last.'';
}

else
{
    $text = '<p>Ошибка</p>';
    echo ''.$first.''.$text.''.$last.'';
}

?>
</head>
<body>
</body>
</html>