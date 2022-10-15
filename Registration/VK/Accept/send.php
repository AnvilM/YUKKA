<?php



function send()
{
    include('../../Check/accountCheck.php');
    $token = 'vk1.a.-mpTUPryrM7-gkRXxUbqzByqCqe23O2kZgBguFW1RSFZ2uJ-JlP3r7J5ihz2w8vfQ_dgp2ewqYxnbMAH_ul2XNDhH4bNpS7mKtoSKlmEVjguu3sSx1jefq84qZ_nPDDIhVz2gYuEyj_QONMclazbOSSU1fO32r8iu0stRAm2YZIipmz4d-JYHm_MAlnQHMVd';
    $code = rand(1000,9999);
    global $nick;
    global $tg;
    global $pass;
    $salt = '53a9h281g338a1';
    $st2 = '98kh82697w';

    $request_params = array(
    'message' => $code,
    'peer_id' => $tg,
    'access_token' => $token,
    'v' => '5.103',
    'random_id' => '0'
    );
    $get_params = http_build_query($request_params);
    file_get_contents('https://api.vk.com/method/messages.send?'. $get_params);

    
    $code = md5($code);
    $code = $salt.''.$code.''.$st2;

    $files = scandir('Temp');
    $i = 2;
    while ($i < count($files))
    {
        if(time()-filectime('Temp/'.$files[$i].'')>=21600)
        {
            unlink('dir/'.$files[$i].'');
        }
        $i = $i+1;
    }

    file_put_contents('../Accept/Temp/usr_'.$code.'.tmp', ''.$nick.'&'.$pass.'&'.$tg.'');

    header("Location: ../Accept/index?token=$code");
    
}

?>