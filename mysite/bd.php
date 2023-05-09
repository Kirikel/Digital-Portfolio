<?php
//Подключаемся к mysql серверу
//имя - localhost
//юзер - root
//пароль - нету
$mysql_connect=mysql_connect("localhost","root","");
//Выбираем базу данных mysite
$db=mysql_select_db("mysite");
?>