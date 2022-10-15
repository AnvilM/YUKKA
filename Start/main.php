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
    <script src="script.js"></script>
    <title>YUKKA | Начать играть</title>
</head>
<body>
<div class="message" id="mess">
            <p>Вы уже вошли в аккаунт</p>
        </div>
    <div class="home"> <a href="https://yukkamc.ru">
    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 26.39 26.39" style="enable-background:new 0 0 26.39 26.39;" xml:space="preserve">
<g>
	<g id="c14_house">
		<path d="M3.588,24.297c0,0-0.024,0.59,0.553,0.59c0.718,0,6.652-0.008,6.652-0.008l0.01-5.451c0,0-0.094-0.898,0.777-0.898h2.761
			c1.031,0,0.968,0.898,0.968,0.898l-0.012,5.434c0,0,5.628,0,6.512,0c0.732,0,0.699-0.734,0.699-0.734V14.076L13.33,5.913
			l-9.742,8.164C3.588,14.077,3.588,24.297,3.588,24.297z"/>
		<path d="M0,13.317c0,0,0.826,1.524,2.631,0l10.781-9.121l10.107,9.064c2.088,1.506,2.871,0,2.871,0L13.412,1.504L0,13.317z"/>
		<polygon points="23.273,4.175 20.674,4.175 20.685,7.328 23.273,9.525 		"/>
	</g>
	<g id="Capa_1_216_">
	</g>
</g>
</svg>
</a>
    </div>
    <h1>Начать играть</h1>
    <div class="main">
        <div class="info"> 
            <div class="box">
                <div class="reg inf">
                    <?php if($_COOKIE['auth'] == ''){echo '<h3>Аккаунт</h3>';}else{echo '<h3 id="done">✓Аккаунт</h3>';}?>
                    <p>Так как на нашем проекте используется система авторизации, для начала, вам необходимо зарегистрировать личный аккаунт на нашем сайте. Перед началом игры ознакомьтесь со <a href="../Papers/rules">Сводом правил</a> нашего сервера</p>
                    <p>В случае, если вы уже зарегистрировались на нашем сайте, войдите в свой аккаунт.</p>
                    <div class="btns">
                    <?php if($_COOKIE['auth'] == '')
                    {echo '<button onclick="Reg()">Регистрация</button>
                        <button onclick="Auth()">Войти в аккаунт</button>';}
                    else{echo '<button onclick="Already()">Регистрация</button>
                        <button onclick="Already()">Войти в аккаунт</button>';}
                        ?>
                    </div>
                </div>
                <div class="line"></div>
                <div class="launcher inf">
                    <h3>Лаунчер</h3>
                    <p>Если вы уже зарегистрировались и выполнили вход в аккаунт, вам нужно скачать наш лаунчер, так как на нашем сервере установленны модификации, зайти на него можно только через лаунчер.</p>
                    <?php if($_COOKIE['auth'] == '')
                    {
                        echo '<p>Если у вас ещё нет аккаунта на нашем сайте, пожалуйста, <a href="../Registration/main">Зарегистрируйтесь</a> или <a href="../Auth/main">Войдите в аккаунт</a>.</p>';
                    }
                    else
                    {
                        echo '<p>Если у вас ещё нет аккаунта на нашем сайте, пожалуйста, <a onclick="Already()">Зарегистрируйтесь</a> или <a onclick="Already()">Войдите в аккаунт</a>.</p>';
                    }
                    ?>
                    <div class="btns">
                        <button onclick="Download()">Скачать для Windows</button>
                    </div>
                </div>
                <div class="line2"></div>
            </div>
            <div class="play">
                <p>Что бы зайти на сервер откройте лаунчер, введите логин и пароль, от ранее созданного аккаунта и выберите сервер, затем нажмите кнопку играть</p>
            </div>
        </div>
    </div>
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