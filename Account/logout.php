<?php
setcookie('auth', '', time() + -3600*24*30, "/");
setcookie('pass', '', time() + -3600*24*30, "/");
header("Location: https://yukkamc.ru");

?>