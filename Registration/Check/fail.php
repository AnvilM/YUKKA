<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  
    <link type="image/x-icon" href="../../Images/err.ico" rel="shortcut icon">
    <link rel="stylesheet" href="fail.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ошибка</title>
    
    <?php
    $type = $_GET['type'];
$first = '<div id="errBox"><div id="errMsg"><h1>Ошибка</h1>';
$last = ' <a href="https://yukkamc.ru">На главную</a></div></div>';

if($type == 'reg')
{
    $text = '<p>У вас уже есть аккаунт</p>';
    echo ''.$first.''.$text.''.$last.'';
}
if($type == 'acc')
{
    $text = '<p>Вы уже вошли в аккаунт</p>';
    echo ''.$first.''.$text.''.$last.'';
}



?>
</head>
<body>
</body>
<footer>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <div class="box">
        <div class="text">
            <p>© yukkamc.ru 2022-2023</p>
            <p>Официальный сайт YUKKA.ru</p>
        </div>
        <div class="links">
            <a href="/Contact/main">Контакты</a>
                <div class="line"></div>
            <a href="/Papers/rules">Правила</a>
                <div class="line"></div>
            <a href="/Papers/eula">Договор - Оферта</a>
                <div class="line"></div>
            <a href="/Papers/privacy">Политика конфиденциальности</a>
                <div class="line"></div>
            <a href="/Artists/main">Авторы работ</a>
        </div>
    </div>
    <style>
        footer
        {
            font-family: 'Nunito', sans-serif;
            margin-top: 650px;
            box-shadow: 0px 0px 35px 5px black;
            position: absolute;
            left: 0;
            width: 100%;
            background-color: #202020;
            color: white;
        }
        footer a
        {
            color: #2288f5;
            text-decoration: none;
            font-size: 17px;
            font-weight: 600;
            transition-property: opacity;
            transition-duration: .2s;
            transition-timing-function: ease-out;
        }
        footer a:hover
        {
            opacity: 60%;
        }

        footer .box
        {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            margin-left: 40px;
            margin-right: 40px;
        }

        footer .box .links
        {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        footer .box .links .line
        {
            border-bottom-style: solid;
            border-bottom-color: white;
            border-bottom-width: 1px;
            margin-right: -10px;
            margin-left: -10px;
        }
        @media(max-width:380px)
        {
            footer .box
            {
                flex-direction: column;
            }
        }
    </style>
</footer>
</html>