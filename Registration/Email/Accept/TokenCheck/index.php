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
        include('../../../Check/accountCheck.php');
        $code = $_POST['code'];
        $token = $_POST['token'];
               

        $salt = '53a9h281g338a1';
        $st2 = '98kh82697w';
        $code = md5($code);
        $code = $salt.''.$code.''.$st2;
        if ($code == $token)
        {
            if(file_exists('../Temp/usr_'.$code.'.tmp'))
            {
                $info = file_get_contents('../Temp/usr_'.$code.'.tmp');
                unlink('../Temp/usr_'.$code.'.tmp');
                $info = explode('&', $info);
                $nick = $info[0];
                $pass =$info[1];
                $tid =$info[2];
                

                echo '<link type="image/x-icon" href="../../../../../Images/icon.ico" rel="shortcut icon">';
                
                if (strlen($nick)>0 && strlen($pass)>0 && strlen($tid)>0)
                {
                    date_default_timezone_set('Europe/Moscow');
                    $date=time();
                    $bd = new mysqli('localhost','***','***','***');
                    $bd-> query("INSERT INTO `users`(`nickname`,`pass`,`tid`,`vid`,`email`,`date`) VALUES ('$nick','$pass',0,0,'$tid','$date')");
                    $bd->close();

                    setcookie('auth', $nick, time() + 3600*24*30, "/");
                    setcookie('pass', $pass, time() + 3600*24*30, "/");
                    mkdir('../../../../Users/'.$nick.'');
                    copy('../../../../Users/steve.png','../../../../Users/'.$nick.'/skin.png');
                    copy('../../../../Users/stevePreviev.png','../../../../Users/'.$nick.'/skinPreviev.png');
                    header("Location: https://yukkamc.ru");
                }

            }
            else
            {
                header("Location: https://yukkamc.ru");
            }
            
        }
        else
        {
            echo '<link type="image/x-icon" href="../../../../../Images/err.ico" rel="shortcut icon">';
            echo '<title>Ошибка</title>';
            echo '<div class="mn">
            <div class="text">
                <h1>Ошибка</h1>
                <h2>Код неверный</h2>
            </div>
        </div>
        <div class="toMain">
                    <h3><a href="https://yukkamc.ru">Вернуться на главную</a></h3>
        </div>';
        }

    ?>
    <title>Регистрация</title>
</head>
<body>
    
</body>
</html>