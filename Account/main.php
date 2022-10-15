<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="style.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link type="image/x-icon" href="../Images/icon.ico" rel="shortcut icon">
    <?php /* 
    $nick = $_COOKIE['auth'];

    $bd = new mysqli('localhost','***','***','***');
    $info = $bd->query("SELECT * FROM `users` WHERE `nickname` = '$nick'");
    $bd->close();
    $info = $info->fetch_assoc();

    $pass = $info['pass'];

    if($_COOKIE['pass'] != $pass){
        setcookie('auth', '', time() + -3600*24*30, "/");
        setcookie('pass', '', time() + -3600*24*30, "/");
        header("Location: ../main");
        exit;
    }

        if($_COOKIE['auth'] == '')
        {
            header("Location: ../Auth/main");
            exit;
        }
        echo '<title>YUKKA | '.$nick.'</title>';

    */?>
</head>
<body>
        <div class="message" id="mess">
            <p id="messtext"><?php /*  if($_COOKIE['err'] != ''){echo $_COOKIE['err']; setcookie('err', '', time() + -300, "/");}
            else if($_COOKIE['tip'] != ''){echo'<style>
                #mess
                {
                    color: #02b15b;
                }
            </style>';echo $_COOKIE['tip']; setcookie('tip', '', time() + -300, "/");}
            else{echo 'Ошибка: Файл не выбран';}*/?></p>
        </div>
        <div class="replenishment" id="replenishment">
                    <form action="">
                        <input id="value" type="text" placeholder="Монеты">
                        <button type="submit">Пополнить счёт</button>
                    </form>
                </div>
                <div id="black" class="black" onclick="Back()"></div>
<div class="home"> <a href="https://yukkamc.ru">
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 26.39 26.39" style="enable-background:new 0 0 26.39 26.39;" xml:space="preserve">
<g><g id="c14_house"><path d="M3.588,24.297c0,0-0.024,0.59,0.553,0.59c0.718,0,6.652-0.008,6.652-0.008l0.01-5.451c0,0-0.094-0.898,0.777-0.898h2.761
			c1.031,0,0.968,0.898,0.968,0.898l-0.012,5.434c0,0,5.628,0,6.512,0c0.732,0,0.699-0.734,0.699-0.734V14.076L13.33,5.913
			l-9.742,8.164C3.588,14.077,3.588,24.297,3.588,24.297z"/>
		<path d="M0,13.317c0,0,0.826,1.524,2.631,0l10.781-9.121l10.107,9.064c2.088,1.506,2.871,0,2.871,0L13.412,1.504L0,13.317z"/>
		<polygon points="23.273,4.175 20.674,4.175 20.685,7.328 23.273,9.525"/></g><g id="Capa_1_216_"></g></g></svg></a></div>
    <div class="wrapper">
        <div class="main" id="main">
        <svg class="theme" id="theme" onclick="theme()" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 489.6 489.6" style="enable-background:new 0 0 489.6 489.6;" xml:space="preserve">
<g><g><path d="M316.353,410.5V429c0,14.7-10.8,26.8-24.9,28.7l-4.5,16.6c-2.6,8.9-10.8,15.3-19.8,15.3h-44.7c-9.6,0-17.9-6.4-19.8-15.3
			l-4.5-16.6c-14-1.9-24.9-14-24.9-28.7v-18.5c0-9.6,7.7-17.9,17.9-17.9h107.8C308.653,393.3,316.353,401,316.353,410.5z
			 M330.453,334.9c-3.2,20.1-20.9,35.2-41.2,35.2h-88.9c-20.8,0-38.2-14.8-41.2-35.2c-3.6-23.2-14.5-45.2-30.7-62
			c-28.6-30-44.6-68.9-45.3-109.8c-0.7-89.3,71-162.5,159.8-163.1h1.2c89.5,0,162.3,72.3,162.3,161.1c0,41.6-16.5,82.4-45.3,111.9
			C344.753,289.9,334.053,311.3,330.453,334.9z M335.753,248.2c22.4-23,35.3-54.7,35.3-87.2c0-69.3-56.9-125.6-126.9-125.6h-1
			c-69.2,0.5-125.1,57.6-124.6,127.3c0.5,31.8,13.1,62.2,35.4,85.6c21.2,21.8,35.5,50.7,40.2,81.2c0.5,3.6,3.5,5.1,6.2,5.1h27.7
			V230.7l-37-37c-6.5-6.5-6.5-17.1,0-23.7l0,0c6.5-6.5,17.1-6.5,23.7,0l30,30l30-30c6.5-6.5,17.1-6.5,23.7,0l0,0
			c6.5,6.5,6.5,17.1,0,23.7l-37,37v103.9h27.7c3.3,0,5.8-2.7,6.2-5.2C300.153,298.7,314.053,270.5,335.753,248.2z"/></g></g></svg>
                <?php /*               
            
                if($info['email'] != ''){$contacts = $info['email']; $ctype = 'email';}
                else if($info['vid'] != 0){$contacts = $info['vid']; $ctype = 'vk';}
                else {$contacts = $info['tid']; $ctype = 'tg';}
                if($ctype == 'email'){$contacts = ''.mb_substr($contacts, 0, 5).'*****@'.explode('@',$contacts)[1].'';}
                else{$contacts = ''.mb_substr($contacts, 0, 5).'*****';}
                $date = date('G:i d.m.Y',$info['date']);
                
                clearstatcache();
                
        if($_COOKIE['err'] != '' || $_COOKIE['tip'] != '')
    {
        echo "<script>errSend();
        function errSend()
        {
            let mess = document.getElementById('mess');
            mess.classList.add('active');
            setTimeout(errDone, 5 * 1000);
        }

        function errDone()
{
    let mess = document.getElementById('mess');
    mess.classList.remove('active');
    setTimeout(change, 200);
}
</script>";
    }
                
                
    $data = new mysqli('localhost','***','***','***');
    $donate = $data->query("SELECT * FROM `donate` WHERE `nickname` = '$nick'");
    $data->close();
    $donateinfo = $donate->fetch_assoc();
    
                             
    $donate = $donateinfo['donate'];
    $money = $donateinfo['money'];
    $donate = explode("&", $donate);
                                      

                                     */
                                 //Это убюрать--------------------
                                    $donate = array();
                                 //Эьо убрать---------------------

                ?>
            <div class="user">
                <div class="skin">
                    <img id="previev" src="<?php    echo '../Users/'.$_COOKIE['auth'].'/skinPreviev.png'; ?>" alt="" style="display:none;">
                    <img id="cape" src="<?php    echo '../Users/'.$_COOKIE['auth'].'/capePreviev.png'; ?>" alt="" style="display:none;">
                    <canvas id="canvas"></canvas>
                    <form action="Check/check.php" method="POST" id="sac" enctype="multipart/form-data">
                        <label class="button">
                            <input id="skinb" type="file" name="file" style="display: none;" accept=".png"/>
                            <span>Выбрать Файл</span>
                        </label>
                        <div class="change">
                            <div class="Change">
                                <label id="first">
                                    <button type="submit" name="skin" style="display: none;"></button>
                                    <span>Изменить Скин</span>
                                </label>
                                <label id="second">
                                    <button id="die" type="submit" name="skindie" style="display: none;"></button>
                                    <span>X</span>
                                </label>
                            </div>
                            <div class="Change">
                                <label id="first">
                                    <button id="dietwo" type="submit" name="cape" style="display: none;"></button>
                                    <span>Изменить Плащ</span>
                                </label>
                                <label id="second">
                                    <button id="die" type="submit" name="capedie" style="display: none;"></button>
                                    <span>X</span>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="box">
                    <div class="info">
                        <div class="first">
                            <table>
                                <tr>
                                    <td>Никнейм:</td>
                                    <td class="sec">Anvil<?php /*  echo $nick;*/?></td>
                                </tr>
                                <tr>
                                    <?php /* 
                                        if($ctype == 'email'){echo '<td>Почта</td> <td>'.$contacts.'</td>';}
                                        else if($ctype == 'vk'){echo '<td>VK ID</td> <td>'.$contacts.'</td>';}
                                        else{echo '<td>Telegram ID</td> <td>'.$contacts.'</td>';}
                                    
                                    */?>
                                    <td>Почта:</td>
                                    <td class="sec">211an*****@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Дата регистрации:</td>
                                    <td class="sec">18.10.2022<?php /*  echo $date; */?></td>
                                </tr>
                                <tr>
                                    <td>Часов в игре:</td>
                                    <td class="sec">0</td>
                                </tr>
                            </table>
                        </div>
                        <div class="second">
                            <table>
                                <?php 


                                
                                        echo '<tr class="Skin true">
                                        <td>Скин</td>
                                        <td>✓</td>
                                            </tr>';
                                            if(in_array('1', $donate))
                                            {
                                                echo ' <tr class="hdskin true">
                                                <td>HD Скин</td>
                                                <td>✓</td>
                                            </tr>';
                                            }
                                            else
                                            {
                                                echo ' <tr class="hdskin">
                                                <td>HD Скин</td>
                                                <td></td>
                                            </tr>';
                                            }
                                            
                                        echo '<tr class="cape true">
                                        <td>Плащ</td>
                                        <td>✓</td></tr>';
                                        
                                        if(in_array('2', $donate))
                                            {
                                                echo '<tr class="hdcape true">
                                                <td>HD Плащ</td>
                                                <td>✓</td>
                                            </tr>';
                                            }
                                            else
                                            {
                                                echo '<tr class="hdcape">
                                                <td>HD Плащ</td>
                                                <td></td>
                                            </tr>';
                                            }
                            
                                ?>
                            </table>
                        </div>
                    </div>
                    <div class="donate">
                        <div class="bx">
                            <div class="money">
                                <img src="../Images/money.png">
                                <div class="balance-box">
                                    <div class="balance-value"><?php // echo $money; ?></div>
                                    <div class="balance">Монеты</div>
                                </div>
                            </div>
                        </div>
                        <div class="bx">
                            <div class="replenish" onclick="Replenishment()">
                            <img src="../Images/wallet.png">
                            <div class="replenish-box">
                                <div class="replenish-value">Пополнить</div>
                                <div class="replenish-value">Баланс</div>
                            </div>
                            </div>
                        </div>
                        <div class="bx">
                            <div class="store">
                            <img src="../Images/store.png">
                            <div class="store-box">
                                <div class="store-value">Привилегии</div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="skin.js"></script>
    <script src="script.js"></script>
</body>
<footer>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <div class="box">
        <div class="text">
            <p>© yukkamc.ru 2022-2023</p>
            <p>Официальный сайт YUKKA.ru</p>
        </div>
        <div class="links">
            <a href="/Contact/main">Контакты</a>
                <div class="line"></div>
            <a href="/Papers/rules">Правила</a>
                <div class="line"></div>
            <a href="/Papers/eula">Договор - Оферта</a>
                <div class="line"></div>
            <a href="/Papers/privacy">Политика конфиденциальности</a>
                <div class="line"></div>
            <a href="/Artists/main">Авторы работ</a>
        </div>
    </div>
    <style>
        footer
        {
            font-family: 'Nunito', sans-serif;
            margin-top: 650px;
            box-shadow: 0px 0px 35px 5px black;
            position: absolute;
            left: 0;
            width: 100%;
            background-color: #202020;
            color: white;
        }
        footer a
        {
            color: #2288f5;
            text-decoration: none;
            font-size: 17px;
            font-weight: 600;
            transition-property: opacity;
            transition-duration: .2s;
            transition-timing-function: ease-out;
        }
        footer a:hover
        {
            opacity: 60%;
        }

        footer .box
        {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            margin-left: 40px;
            margin-right: 40px;
        }

        footer .box .links
        {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        footer .box .links .line
        {
            border-bottom-style: solid;
            border-bottom-color: white;
            border-bottom-width: 1px;
            margin-right: -10px;
            margin-left: -10px;
        }
        @media(max-width:380px)
        {
            footer .box
            {
                flex-direction: column;
            }
        }
    </style>
</footer>
</html>