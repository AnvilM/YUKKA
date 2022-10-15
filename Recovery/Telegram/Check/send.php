<?php
    $tg = $_POST['tg'];
    $token = "5401136523:AAGYoG-OlZG_pfsr9qZUuka9zNPFA1ufNh4";
    $hash = md5($tg . time());
    
    $link = 'http://yukkamc.ru/Recovery/Telegram/Reset/main?hash='.$hash.'';
    $text = 'Для сброса пароля перейдите по <a href="'.$link.'">Ссылке</a>';


    if(fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$tg}&parse_mode=html&text={$text}","r"))
        {
            $bd = new mysqli('localhost','***','***','***');
            $htg = $bd->query("SELECT * FROM `users` WHERE `tid` = '$tg'");
            $bd->close();
            $htg = $htg->fetch_assoc();
            
            if (count($htg)!=0)
            {
                $bd = new mysqli('localhost','***','***','***');
                $bd-> query("UPDATE users SET rec='$hash' WHERE tid='$tg'");
                $bd->close();
                
                header("Location: ../Reset/success.php?type=sendlink");
            }
            
            else{header("Location: ../Reset/fail.php?type=notfoundtg");}

        }
    else {header("Location: ../Reset/fail.php?type=sendlink");}



?>