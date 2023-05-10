<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
	<title>Личный кабинет другого пользователя</title>
	<style>

		h1
		{
			color: black;
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
		
		
	</style>	
</head>
	<div class="topnav">
      <a class="active" href="general.php">Дом</a>
      <?php 
	  session_start();
	  if($_SESSION['login']==null) 
	  {
		  echo "<a class='news' href='Site.php'> Регистрация </a><a class='news' href='auth.html'> Авторизация</a>";
	  }
	  else 
	  {
		  echo "<a class='posteto' href='post.php'>Создание статьи</a><a class='news' href='dashboard.php'>Профиль</a>";
	  }
	  ?>
	</div>
<body>
	<?php
		// Установка соединения с базой данных
		$host = 'localhost';
		$user = 'root';
		$password = 'usbw';
		$database_name = 'register-bd';
		$conn = mysqli_connect($host, $user, $password, $database_name);
		if (!$conn) 
		{
			die('Ошибка соединения: ' . mysqli_connect_error());
		}
		// Получение id статьи
		if (isset($_GET['id']))
		{
			$id = mysqli_real_escape_string($conn, $_GET['id']);
		} 
		else
		{
			header('Location: general.php');
		}
		// Выбор статьи

		$query = "SELECT * FROM users WHERE id = $id";
		$result = mysqli_query($conn, $query);
		// Отображение статьи
		if (mysqli_num_rows($result) > 0) 
		{
			$row = mysqli_fetch_assoc($result);
			echo '<h1>Фамилия:' . $row['login'] . '</h1>';
			echo '<h1>Имя: ' . $row['name'] . '</h1>';

			echo "<h1> Обо мне: </h1>";

			  // Подключаемся к базе данных
			 $host = "localhost";
			 $username = "root";
			 $password = "usbw";
			 $dbname = "register-bd";
			 $connection = mysqli_connect($host, $username, $password, $dbname);


			  $id=$_GET['id'];
			  // Запрос к базе данных
			  // Выводим данные из запроса
			  $query1="SELECT * FROM dopinfo WHERE id_user='$id'";
			  $result1=mysqli_query($connection, $query1);	
			  $row1=mysqli_fetch_assoc($result1);
			  echo "<td><textarea class = 'form-item' readonly cols='120' rows='10' resize='none'>". $row1["dopinfo"]."</textarea></td>";
			  echo "<h1></h1>";
			  mysqli_close($connection); 
		} 
		
		else 
		{
			echo 'Профиль не найден';
		}
		mysqli_close($conn);
	?>
    <div>
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
			  $id=$_GET['id'];
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
    <div>
</body>
