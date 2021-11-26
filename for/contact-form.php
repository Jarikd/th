<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$tel = htmlspecialchars($_POST["tel"]);
$message = htmlspecialchars($_POST["message"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);

/* Ваш адрес и тема сообщения */
$address ="kievsat-systems@ukr.net";
$sub = "Заявка";

/* Формат письма */
$mes = "\n
Имя отправителя: $name 
Телефон отправителя: $tel"
;



if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$email> \r\n demo.com: $email \r\n"; 
if (mail($address, $sub, $mes, $from)) {
	header('Refresh: 2; URL=http://demo.gerasimchyk.com');
	echo 'Письмо отправлено, через 2 секунд вы вернетесь на сайт ';}
else {
	header('Refresh: 2; URL=http://demo.gerasimchyk.com');
	echo 'Письмо не отправлено, через 2 секунд вы вернетесь на сайт';}
}
exit; /* Выход без сообщения, если поле bezspama чем-то заполнено */
?>