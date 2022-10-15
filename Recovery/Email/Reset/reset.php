<?php
function gen_password($length = 6)
{				
    $chars = 'qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP'; 
    $size = strlen($chars) - 1; 
    $password = ''; 
    while($length--) {
        $password .= $chars[random_int(0, $size)]; 
    }
    return $password;
}


    
        $hash = $_POST['hash'];

        $bd = new mysqli('localhost','***','***','***');
        $htg = $bd->query("SELECT * FROM `users` WHERE `rec` = '$hash'");
        $bd->close();
        $htg = $htg->fetch_assoc();
        if (count($htg)!=0)
        {
            $pass = gen_password(16);
            $text = '<html><body style="text-align: center; background-color: #191919; width: 400px;">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <div class="mess" style="padding:40px;">
        <div class="content">
            <h1><a style="color: #02b15b; text-decoration: none;" href = "https://yukkamc.ru">YUKAKMC</a></h1>
            <h4 style="color: white;">Новый пароль от вашего аккаунта</h4>
            <h1 style="color: #027cff;">'.$pass.'</h1>
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
            $pass = md5($pass);

            $tg = $htg['email'];
           


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
                    $bd-> query("UPDATE users SET pass='$pass' WHERE rec='$hash'");
                    $bd->close();

                    $bd = new mysqli('localhost','***','***','***');
                    $bd-> query("UPDATE users SET rec='' WHERE rec='$hash'");
                    $bd->close();
                    setcookie('auth', '', time() + -3600*24*30, "/");
setcookie('pass', '', time() + -3600*24*30, "/");
                    header("Location: success.php?type=sendpass");
                }
            else
            {
                header("Location: fail.php?type=sendpass");
            }
        }
        else
        {
            header("Location: fail.php?type=notfoundhash");
        }
    
    
?>