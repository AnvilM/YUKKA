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

$text = '<html><body style="text-align: center; background-color: #191919; width: 400px;">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <div class="mess" style="padding:40px; width: 400px; background-color: #191919;">
        <div class="content">
            <h1 style="text-align: center;"><a style="color: #02b15b; text-decoration: none;" href = "https://yukkamc.ru">YUKAKMC</a></h1>
            <h4 style="color: white; text-align: center;">Код подтверждения, необходимый для регистрации.</h4>
            <h1 style="color: #027cff; text-align: center;">'.$code.'</h1>
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

    mail(
    $tg,
    'Код подтверждения',
    $text,
    "From: no-reply@yukkamc.ru\r\n"
    ."Content-type: text/html; charset=utf-8\r\n"
    ."X-Mailer: PHP mail script"
);

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