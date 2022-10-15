<?php




    $tg = $_POST['tg'];
    $token = 'vk1.a.-mpTUPryrM7-gkRXxUbqzByqCqe23O2kZgBguFW1RSFZ2uJ-JlP3r7J5ihz2w8vfQ_dgp2ewqYxnbMAH_ul2XNDhH4bNpS7mKtoSKlmEVjguu3sSx1jefq84qZ_nPDDIhVz2gYuEyj_QONMclazbOSSU1fO32r8iu0stRAm2YZIipmz4d-JYHm_MAlnQHMVd';
    $hash = md5($tg . time());
    
    $link = 'http://yukkamc.ru/Recovery/VK/Reset/main?hash='.$hash.'';
    $text = 'Для сброса пароля перейдите по Ссылке: '.$link.'';

    $request_params = array(
        'message' => $text,
        'peer_id' => $tg,
        'access_token' => $token,
        'v' => '5.103',
        'random_id' => '0'
        );
    
        $get_params = http_build_query($request_params);


    if(file_get_contents('https://api.vk.com/method/messages.send?'. $get_params))
        {
            $bd = new mysqli('localhost','***','***','***');
            $htg = $bd->query("SELECT * FROM `users` WHERE `vid` = '$tg'");
            $bd->close();
            $htg = $htg->fetch_assoc();
            
            if (count($htg)!=0)
            {
                $bd = new mysqli('localhost','***','***','***');
                $bd-> query("UPDATE users SET rec='$hash' WHERE vid='$tg'");
                $bd->close();
                
                header("Location: ../../VK/Reset/success.php?type=sendlink");
            }
            
            else{header("Location: ../../VK/Reset/fail.php?type=notfoundtg");}

        }
    else {header("Location: ../../VK/Reset/fail.php?type=sendlink");}



?>