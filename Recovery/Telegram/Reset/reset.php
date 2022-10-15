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
            $text = 'Новый пароль для вашего аккаунта: '.$pass.'';
            $pass = md5($pass);

            $tg = $htg['tid'];
            $token = "5401136523:AAGYoG-OlZG_pfsr9qZUuka9zNPFA1ufNh4";
    


            if(fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$tg}&parse_mode=html&text={$text}","r"))
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