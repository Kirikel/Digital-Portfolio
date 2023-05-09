<?php
//Если пришли данные на обработку
if(isset($_POST['login']) && isset($_POST['password']))
{
//Подключаемся к базе данных
  include("bd.php");
//Записываем все в переменные
  $login=htmlspecialchars(trim($_POST['login']));
  $password=htmlspecialchars(trim($_POST['password']));
//Достаем из таблицы инфу о пользователе по логину
  $res=mysql_query("SELECT * FROM `users` WHERE `login`='$login' ");
  $data=mysql_fetch_array($res);
//Если такого нет, то пишем что нет
  if(empty($data['login']))
  {
    die("Такого пользователя не существует!");
  }
//Если пароли не совпадают
  if($password!=$data['password'])
  {
    die("Введенный пароль неверен!");
  }
//Запускаем пользователю сессию
  session_start();
//Записываем в переменные login и id
  $_SESSION['login']=$data['login'];
  $_SESSION['id']=$data['id'];
//Переадресовываем на главную
  header("location: index.php");
}
?>