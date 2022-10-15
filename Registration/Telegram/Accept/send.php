<?php



function send()
{
    include('../../Check/accountCheck.php');
    $token = "5401136523:AAGYoG-OlZG_pfsr9qZUuka9zNPFA1ufNh4";
    $code = rand(1000,9999);
    global $nick;
    global $tg;
    global $pass;
    $salt = '53a9h281g338a1';
    $st2 = '98kh82697w';


    fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$tg}&parse_mode=html&text={$code}","r");
    $code = md5($code);
    $code = $salt.''.$code.''.$st2;

    $files = scandir('../Accept/Temp');
    $i = 2;
    while ($i < count($files))
    {
        if(time()-filectime('../Accept/Temp/'.$files[$i].'')>=21600)
        {
            unlink('../Accept/Temp/'.$files[$i].'');
        }
        $i = $i+1;
    }

    file_put_contents('../Accept/Temp/usr_'.$code.'.tmp', ''.$nick.'&'.$pass.'&'.$tg.'');

    header("Location: ../Accept/index?token=$code");
    
}

?>