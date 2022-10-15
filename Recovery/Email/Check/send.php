<?php




    $tg = $_POST['tg'];
    $hash = md5($tg . time());
    
    $link = 'http://yukkamc.ru/Recovery/Email/Reset/main?hash='.$hash.'';
    $text = '<html><body style="text-align: center; background-color: #191919; width: 400px;">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <div class="mess" style="padding:40px; width: 400px; background-color: #191919;">
            <div class="content">
                <h1 style="text-align: center;"><a style="color: #02b15b; text-decoration: none;" href = "https://yukkamc.ru">YUKAKMC</a></h1>
                <h4 style="color: white; text-align: center;">Для восстановления пароля перейдите по</h4>
                <h1 style="color: #027cff; text-align: center;"><a style="text-decoration: none;" href = "'.$link.'">Ссылке</a></h1>
            </div>
            <div class="info" style="display: flex; justify-content: space-around; padding: 20px; background-color: #303030; margin-top: 40px;">
                <div class="nu" style="width: 50%; text-align: left;">
                    <p style="color: white;">Если вы не регистрировались на нашем проекте, пожалуйста, проигнорируйте это письм.</p>
                </div>
                <div class="us" style="width: 50%; text-align: left;">
                    <p style="color: white;">Не имея данный код, другие пользователи не смогут привязать вашу почту, к своему аккаунту.</p>
                </div>
            </div>
        </div>
    </body></html>';






    if(mail(
        $tg,
        'Восстановление пароля',
        $text,
        "From: no-reply@yukkamc.ru\r\n"
        ."Content-type: text/html; charset=utf-8\r\n"
        ."X-Mailer: PHP mail script"
    ))
        {
            $bd = new mysqli('localhost','***','***','***');
            $htg = $bd->query("SELECT * FROM `users` WHERE `email` = '$tg'");
            $bd->close();
            $htg = $htg->fetch_assoc();
            
            if (count($htg)!=0)
            {
                $bd = new mysqli('localhost','***','***','***');
                $bd-> query("UPDATE users SET rec='$hash' WHERE email='$tg'");
                $bd->close();
                
                header("Location: ../../Email/Reset/success.php?type=sendlink");
            }
            
            else{header("Location: ../../Email/Reset/fail.php?type=notfoundtg");}

        }
    else {header("Location: ../../Email/Reset/fail.php?type=sendlink");}



?>