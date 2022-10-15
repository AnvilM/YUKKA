<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link type="image/x-icon" href="Images/icon.ico" rel="shortcut icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YUKKA</title>
</head>
<body>
    <div class="menu">
        <div class="start">
            <a href="/Start/main" class="play">Начать играть</a>
            <a href="/Papers/rules">Правила</a>
        </div>
        <div class="account">
            <?php
                if($_COOKIE['auth'] == '')
                {
                    echo '<a href="/Registration/main">Регистрация</a>
                    <a href="/Auth/main">Вход</a>';
                }
                else
                {
                    echo '<a href ="/Account/logout"><svg width="36px" class="logout" height="36px" viewBox="0 0 36 36" version="1.1"  preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path d="M23,4H7A2,2,0,0,0,5,6V30a2,2,0,0,0,2,2H23a2,2,0,0,0,2-2V24H15.63a1,1,0,0,1-1-1,1,1,0,0,1,1-1H25V6A2,2,0,0,0,23,4Z" class="clr-i-solid clr-i-solid-path-1"></path><path d="M28.16,17.28a1,1,0,0,0-1.41,1.41L30.13,22H25v2h5.13l-3.38,3.46a1,1,0,1,0,1.41,1.41L34,23.07Z" class="clr-i-solid clr-i-solid-path-2"></path>
                    <rect x="0" y="0" width="36" height="36" fill-opacity="0"/>
                </svg></a>
                    <a href="/Account/main"> <svg width="24px" class="acc" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g>
                        <path fill="none" d="M0 0h24v24H0z"/>
                        <path d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zM6.023 15.416C7.491 17.606 9.695 19 12.16 19c2.464 0 4.669-1.393 6.136-3.584A8.968 8.968 0 0 0 12.16 13a8.968 8.968 0 0 0-6.137 2.416zM12 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </g></svg></a>
                ';
                }
            ?>
        </div>
    </div>
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
            <div class="trade info">
                <div class="text">
                    <h1>Торгуй</h1>
                    <p>Обменивайся с игроками сервера на недостающие тебе предметы, а со специальным модом это стало ещё удобнее.</p>
                </div>
                <img src="/Images/trade.png" alt="image">
            </div>
            <div class="battle info">
                <div class="text">
                    <h1>Сражайся</h1>
                    <p>Сражайся с огромным количеством монстров, используя ещё большее количество оружия.</p>
                </div>
                <img src="/Images/battle.png" alt="image">
            </div>
            <div class="collect info">
                <div class="text">
                    <h1>Коллекционируй</h1>
                    <p>Коллекционируй различные редкие или уникальные предметы на сервере.</p>
                </div>
                <img src="/Images/collect.png" alt="image">
            </div>
            <div class="home info">
                <div class="text">
                    <h1>Чувствуй себя как дома</h1>
                    <p>Расслабься и получай удовольствие от игры на нашем уютном сервере, ведь наши игроки всегда рады поприветствовать новеньких.</p>
                </div>
                <img src="/Images/home.png" alt="image">    
            </div>
            <div class="start">
                <div class="btn" onclick="start()">
                    <h1>Начать</h1>
                </div>
            </div>
        </div>
    </div>
    <script src="/script.js"></script>
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

