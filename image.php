<?php
session_start(); //старт сессии
Header("Content-type: image/jpeg"); // будем передавать jpeg
Header("Content-type: image/png"); // будем передавать png
$img = imagecreatefromjpeg('http://liuzin.96.lt/images/fon1.jpg'); //используемый фон 
$color = imagecolorexact($img, 106, 90, 205); //цвет 
$text=rand(100000,999999); //рандомное число
$_SESSION["captcha"]=$text; //запись переменной captcha (в которой будет $text)
imagestring ($img, 5, 45, 18, $text, $color); //рисование капчи (на фоне шрифтом 5, (45;18)) 
imagejpeg($img); //создает JPEG изображение 
imagedestroy($img); //удаляет его
?> 

