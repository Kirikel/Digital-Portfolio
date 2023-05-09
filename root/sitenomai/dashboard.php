<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
	<title>Личный кабинет пользователя</title>
	<style>	
		h1
		{
			color: white;
		}
		.content
		{
			width: 719px;
			height: 395px;
			color: white;
			resize: none;
		}
		textarea
		{
			resize: none;
		}
		.form-item
		{
			left: 10px;
			width: 719px;
			height: 395px;
			color: white;
			padding: 20px;
			background: rgba(44, 44, 44, 0.15);
			border-radius: 10px;
			resize: none;
		}
		.button
		{
			display: block;
			box-sizing: border-box;
			width:4%;
			height: auto;
			margin-bottom: 20px;
			margin-top: 20px;
			background-color: white;
		}
	</style>	
</head>

	<div class="topnav">
      <a class="active" href="general.php">Дом</a>
      <?php 
	  session_start();
	  if($_SESSION['login']==null) 
	  {
		  echo "<a class='news' href='Site.php'> Регистрация </a><a class='news' href='auth.php'> Авторизация</a> ";
	  }
	  else 
	  {
		  echo "<a class='posteto' href='post.php'>Создание статьи</a><a class='news' href='dashboard.php'>Профиль</a><a class=news' href='DopInformationCheck.php'>Добавить информацию о себе </a>";
	  }
	  ?>
	</div>
<body>

	<div class='container'>
	<h1><div>  Фамилия: <?php
      // Подключаемся к базе данных
      $host = "localhost";
      $username = "root";
      $password = "usbw";
      $dbname = "register-bd";
      $connection = mysqli_connect($host, $username, $password, $dbname);

      // Проверяем подключение к базе данных
      if (mysqli_connect_errno()) {
        echo "Ошибка подключения к базе данных: " . mysqli_connect_error();
        exit();
      }
		$login=$_SESSION['login'];
      // Запрос к базе данных
      $query = "SELECT * FROM users WHERE login='$login'";

      // Выполняем запрос
      $result = mysqli_query($connection, $query);

      // Проверяем результат запроса
      if (!$result) {
        echo "Ошибка выполнения запроса: " . mysqli_error($connection);
        exit();
      }

      // Выводим данные из запроса
      $row = mysqli_fetch_assoc($result);
	  $_SESSION['id']=$row['id'];
	  $_SESSION['name']=$row['login'];
      echo $_SESSION['name'];
      // Закрываем соединение с базой данных
      mysqli_close($connection);
	 ?>
	</div> <h1>
	<h1>  <div> Имя: <?php echo $_SESSION['name'];?></div> <h1>


		

	<h1> Обо мне: </h1>
	<?php
			  // Подключаемся к базе данных
			 $host = "localhost";
			 $username = "root";
			 $password = "usbw";
			 $dbname = "register-bd";
			 $connection = mysqli_connect($host, $username, $password, $dbname);

			  // Проверяем подключение к базе данных
			 if (mysqli_connect_errno()) {
				echo "Ошибка подключения к базе данных: " . mysqli_connect_error();
				exit();
			 }
			  $id=$_SESSION['id'];
			  $query1="SELECT * FROM dopinfo WHERE id_user='$id'";
			  $result1=mysqli_query($connection, $query1);	
			  $row1=mysqli_fetch_assoc($result1);
			  echo "<td><textarea class = 'form-item' readonly cols='120' rows='10' resize='none'>". $row1["dopinfo"]."</textarea></td>";
			  echo "<h1></h1>";
			  // Закрываем соединение с базой данных
			  mysqli_close($connection); 
	?>

	<p></p>
	<div class='container-button'>
	<a class='button'; href="logout.php">Выйти</a>
	</div>
    <?php
			  // Подключаемся к базе данных
			 $host = "localhost";
			 $username = "root";
			 $password = "usbw";
			 $dbname = "register-bd";
			 $connection = mysqli_connect($host, $username, $password, $dbname);

			  // Проверяем подключение к базе данных
			 if (mysqli_connect_errno()) {
				echo "Ошибка подключения к базе данных: " . mysqli_connect_error();
				exit();
			 }
			  $id=$_SESSION['id'];
			  $query1="SELECT * FROM posts WHERE id_user='$id'";
			  $result1=mysqli_query($connection, $query1);	
			  echo "<h1>Мои работы:</h1>";

			  while ($row1 = mysqli_fetch_assoc($result1)) 
			  {
				if($row1['id_user']!=0)
				{	
					echo "<div class='column'>";
					echo "<textarea class='my' readonly cols='80' rows='2' resize='none'>" . $row1["title"] ."</textarea>";
					echo "<a></a>";
					echo "<textarea class='my' readonly cols='80' rows='29' resize='none'>". $row1["general"] . "</textarea>";
					echo "<a></a>";
					echo "<textarea class='my' readonly cols='80' rows='2' resize='none'>" . $row1["timef"] . "</textarea>";
					echo "<a></a>";
					echo "</div>";				
					
			    }
			  }

			  
			  // Закрываем соединение с базой данных
			  mysqli_close($connection);
    ?>

</body>
</html>
