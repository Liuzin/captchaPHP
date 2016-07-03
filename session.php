<?php
session_start(); //старт сессии
if($_SESSION["captcha"]==$_GET["suspense"]){ echo 'Верно!'; } //проверка совпадения переменных
else {echo 'Пробуй еще!'; }
?>