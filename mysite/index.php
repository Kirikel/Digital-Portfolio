<html>
	<head>
		<title>Система регистрации на PHP</title>
	</head>
	<body>
		<?php
		//Запускаем сессию для работы с кукис файлами
		session_start();
		//Если отсутствуют логин и айди,
		//отображаем форму входа и регистрации
		if(!isset($_SESSION['login']) || !isset($_SESSION['id']))
		{
		?>
		<center>
		<form action="register.php" method="POST">
		<h3>Регистрация</h3>
		Логин: <br> <input type="text" name="login">
		<br>
		Пароль: <br> <input type="password" name="password">
		<br>
		Имя: <br> <input type="text" name="name">
		<br>
		Фамилия: <br> <input type="text" name="surname">
		<br>
		Город: <br> <input type="text" name="city">
		<br>
		<input type="submit" value="Зарегистрироваться">
		</form>
		<form action="login.php" method="POST">
		<h3>Вход</h3>
		Логин: <br> <input type="text" name="login">
		<br>
		Пароль: <br> <input type="password" name="password">
		<br>
		<input type="submit" value="Вход">
		</form>
		</center>
		<?php
		}
		//Если сессия запущена, то есть присутствуют файлы 
		//кукис, и в них есть логин и айди
		//то отображаем профиль пользователя
		//Для этого достаем из базы все данные по логину
		//и выводим их на странице
		if(isset($_SESSION['login']) && isset($_SESSION['id']))
		{
		  include("bd.php");
		  $user=$_SESSION['login'];
		  $res=mysql_query("SELECT * FROM `users` WHERE `login`='$user' ");
		  $user_data=mysql_fetch_array($res);
		  echo "<center>";
		  echo "Ваш логин: <b>". $user_data['login']."</b><br>";
		  echo "Ваше имя: <b>". $user_data['name']."</b><br>";
		  echo "Ваша фамилия: <b>". $user_data['surname']."</b><br>";
		  echo "Место жительства: <b>". $user_data['city']."</b><br>";
		  echo "<a href='exit.php'>Выход</a>";
		  echo "</center>";
		}
		?>
	</body>
</html>