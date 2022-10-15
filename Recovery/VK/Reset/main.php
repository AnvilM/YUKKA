<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link type="image/x-icon" href="../../../Images/icon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>YUKKA | Восстановление пароля</title>
</head>
<body>
    <?php
        if ($_REQUEST['hash'])
        {
            $hash = $_REQUEST['hash'];
        }
        else
        {
            header("Location: https://yukkamc.ru");
        }


    ?>
        <div class="main">
            <h1>Восстановление пароля</h1>
            <div class="box">
                <p id="errMsg" class="msg"></p>
            </div>
            <div class="authFields">
                <div class="fields">
                    <form id="form" action="reset.php" method="POST">
                            <input name="hash" type="hidden" value="<?=$hash?>">
                            <button type="submit">Сбросить пароль</button>
                    </form>
                </div>


            </div>

    </div>
</body>
</html>