<?php
$nick = $_COOKIE['auth'];
$data = new mysqli('localhost','***','***','Users');
$donate = $data->query("SELECT * FROM `donate` WHERE `nickname` = '$nick'");
$data->close();
$donate = $donate->fetch_assoc();
    
                             
$donate = $donate['donate'];
$donate = explode("&", $donate);


if (isset($_POST["skin"]))
{
    if($_FILES['file']['tmp_name'] == ''){setcookie('err', 'Ошибка: Файл не выбран', time() + 300, "/"); header('Location: ../main');exit;}
    if(getimagesize($_FILES['file']['tmp_name'])[0] >=128){if(!in_array('1', $donate)){setcookie('err', 'Вы не можете загружать HD Скины', time() + 300, "/"); header('Location: ../main');exit;}}
    if((getimagesize($_FILES['file']['tmp_name'])[0] != 1024 || getimagesize($_FILES['file']['tmp_name'])[1] != 512)
    &&(getimagesize($_FILES['file']['tmp_name'])[0] != 512 || getimagesize($_FILES['file']['tmp_name'])[1] != 256)
    &&(getimagesize($_FILES['file']['tmp_name'])[0] != 256 || getimagesize($_FILES['file']['tmp_name'])[1] != 128)
    &&(getimagesize($_FILES['file']['tmp_name'])[0] != 128 || getimagesize($_FILES['file']['tmp_name'])[1] != 64)
    &&(getimagesize($_FILES['file']['tmp_name'])[0] != 64 || getimagesize($_FILES['file']['tmp_name'])[1] != 32)
    &&(getimagesize($_FILES['file']['tmp_name'])[0] != 64 || getimagesize($_FILES['file']['tmp_name'])[1] != 64)
    ){setcookie('err', 'Недопустимое разрешение файла', time() + 300, "/"); header('Location: ../main');exit;}
    header('Content-Type: image/png');
    if(getimagesize($_FILES['file']['tmp_name'])[0]/2==getimagesize($_FILES['file']['tmp_name'])[1]){$thumb = imagecreatetruecolor(1024, 512);}
    else if(getimagesize($_FILES['file']['tmp_name'])[0]==getimagesize($_FILES['file']['tmp_name'])[1]){$thumb = imagecreatetruecolor(1024, 1024);}
    imagesavealpha($thumb, true);
    $alpha = imagecolorallocatealpha($thumb, 255, 255, 255, 127);
    imagefill($thumb, 0, 0, $alpha);
    if(getimagesize($_FILES['file']['tmp_name'])[0]/2==getimagesize($_FILES['file']['tmp_name'])[1]){imagecopyresized($thumb, imagecreatefrompng($_FILES['file']['tmp_name']), 0, 0, 0, 0, 1024, 512, getimagesize($_FILES['file']['tmp_name'])[0], getimagesize($_FILES['file']['tmp_name'])[1]);}
    else if(getimagesize($_FILES['file']['tmp_name'])[0]==getimagesize($_FILES['file']['tmp_name'])[1]){imagecopyresized($thumb, imagecreatefrompng($_FILES['file']['tmp_name']), 0, 0, 0, 0, 1024, 1024, getimagesize($_FILES['file']['tmp_name'])[0], getimagesize($_FILES['file']['tmp_name'])[1]);}
    imagepng($thumb,'../../Users/'.$_COOKIE['auth'].'/skinPreviev.png');
    copy($_FILES['file']['tmp_name'], '../../Users/'.$_COOKIE['auth'].'/skin.png');
}

else if (isset($_POST["cape"])) 
{
    if($_FILES['file']['tmp_name'] == ''){setcookie('err', 'Ошибка: Файл не выбран', time() + 300, "/"); header('Location: ../main');exit;}
    if(getimagesize($_FILES['file']['tmp_name'])[0] >=128){if(!in_array('1', $donate)){setcookie('err', 'Вы не можете загружать HD Скины', time() + 300, "/"); header('Location: ../main');exit;}}
    if((getimagesize($_FILES['file']['tmp_name'])[0] != 1024 || getimagesize($_FILES['file']['tmp_name'])[1] != 512)
    &&(getimagesize($_FILES['file']['tmp_name'])[0] != 512 || getimagesize($_FILES['file']['tmp_name'])[1] != 256)
    &&(getimagesize($_FILES['file']['tmp_name'])[0] != 256 || getimagesize($_FILES['file']['tmp_name'])[1] != 128)
    &&(getimagesize($_FILES['file']['tmp_name'])[0] != 128 || getimagesize($_FILES['file']['tmp_name'])[1] != 64)
    &&(getimagesize($_FILES['file']['tmp_name'])[0] != 64 || getimagesize($_FILES['file']['tmp_name'])[1] != 32)
    ){setcookie('err', 'Недопустимое разрешение файла', time() + 300, "/"); header('Location: ../main');exit;}
    header('Content-Type: image/png');
    if(getimagesize($_FILES['file']['tmp_name'])[0]/2==getimagesize($_FILES['file']['tmp_name'])[1]){$thumb = imagecreatetruecolor(1024, 512);}
    else if(getimagesize($_FILES['file']['tmp_name'])[0]==getimagesize($_FILES['file']['tmp_name'])[1]){$thumb = imagecreatetruecolor(1024, 1024);}
    imagesavealpha($thumb, true);
    $alpha = imagecolorallocatealpha($thumb, 255, 255, 255, 127);
    imagefill($thumb, 0, 0, $alpha);
    if(getimagesize($_FILES['file']['tmp_name'])[0]/2==getimagesize($_FILES['file']['tmp_name'])[1]){imagecopyresized($thumb, imagecreatefrompng($_FILES['file']['tmp_name']), 0, 0, 0, 0, 1024, 512, getimagesize($_FILES['file']['tmp_name'])[0], getimagesize($_FILES['file']['tmp_name'])[1]);}
    else if(getimagesize($_FILES['file']['tmp_name'])[0]==getimagesize($_FILES['file']['tmp_name'])[1]){imagecopyresized($thumb, imagecreatefrompng($_FILES['file']['tmp_name']), 0, 0, 0, 0, 1024, 1024, getimagesize($_FILES['file']['tmp_name'])[0], getimagesize($_FILES['file']['tmp_name'])[1]);}
    imagepng($thumb,'../../Users/'.$_COOKIE['auth'].'/capePreviev.png');
    copy($_FILES['file']['tmp_name'], '../../Users/'.$_COOKIE['auth'].'/cape.png');
}
else if (isset($_POST["skindie"]))
{
    header('Content-Type: image/png');
    $thumb = imagecreatetruecolor(1024, 1024);
    imagesavealpha($thumb, true);
    $alpha = imagecolorallocatealpha($thumb, 255, 255, 255, 127);
    imagefill($thumb, 0, 0, $alpha);
    imagecopyresized($thumb, imagecreatefrompng('../../Users/steve.png'), 0, 0, 0, 0, 1024, 1024, 64, 64);
    imagepng($thumb,'../../Users/'.$_COOKIE['auth'].'/skinPreviev.png');
    copy('../../Users/steve.png','../../Users/'.$_COOKIE['auth'].'/skin.png');
} 

else if (isset($_POST["capedie"]))
{
    unlink('../../Users/'.$_COOKIE['auth'].'/capePreviev.png');
    unlink('../../Users/'.$_COOKIE['auth'].'/cape.png');
} 
sleep(2);
setcookie('tip', 'Если скин не обновился нажмите CTRL + SHIFT + R', time() + 300, "/");
header('Location: ../main');
?>