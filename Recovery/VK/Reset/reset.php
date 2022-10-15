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

            $tg = $htg['vid'];
            $token = 'vk1.a.-mpTUPryrM7-gkRXxUbqzByqCqe23O2kZgBguFW1RSFZ2uJ-JlP3r7J5ihz2w8vfQ_dgp2ewqYxnbMAH_ul2XNDhH4bNpS7mKtoSKlmEVjguu3sSx1jefq84qZ_nPDDIhVz2gYuEyj_QONMclazbOSSU1fO32r8iu0stRAm2YZIipmz4d-JYHm_MAlnQHMVd';

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