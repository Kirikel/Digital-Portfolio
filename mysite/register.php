<?php
//Проверяем пришли ли данные
if(isset($_POST['login']) && isset($_POST['password']))
{
//Записываем все в переменные
  $login=htmlspecialchars(trim($_POST['login']));
  $password=htmlspecialchars(trim($_POST['password']));
  $name=htmlspecialchars(trim($_POST['name']));
  $surname=htmlspecialchars(trim($_POST['surname']));
  $city=htmlspecialchars(trim($_POST['city']));
//Проверяем на пустоту
  if($login=="" || $password=="" || $name=="" || $surname=="" || $city=="")
  {
    die("Заполните все поля!");
  }
//Подключаем базу данных
  include("bd.php");
//Достаем из БД информацию о введенном логине
  $res=mysql_query("SELECT `login` FROM `users` WHERE `login`='$login' ");
  $data=mysql_fetch_array($res);
//Если он не пуст, то значит такой уже есть
  if(!empty($data['login']))
  {
    die("Такой логин уже существует!");
  }
//Проверяем длину пароля
  if(strlen($password)<7)
  {
    die("Длина пароля не может быть меньше 7 символов!");
  }
//Вставляем данные в БД 
  $query="INSERT INTO `users` (`login`,`password`,`name`,`surname`,`city`) VALUES('$login','$password','$name','$surname','$city') ";
  $result=mysql_query($query);
//Если данные успешно занесены в таблицу
  if($result==true)
  {
    echo "Вы успешно зарегистрированы! <br><a href='index.php'>На главную</a>";
  }
//Если не так, то выводим ошибку
  else
  {
    echo "Error! ----> ". mysql_error();
  }
}
?>