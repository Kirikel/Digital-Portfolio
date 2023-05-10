
<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style>
		textarea
		{
			resize: none;
			border-radius: 10px;
			padding: 15px;
		}
		div
		{
			color: black;
		}
		.profile a
		{
			background-color: black;
			color: #f2f2f2;
			text-align: center;
			text-decoration: none;
			font-size:20px;
			margin-top: 20px;
			margin-bottom: 20px;
		}

			
		.profile a:hover 
		{
			background-color: #ddd;
			color: black;
			float: right;
			margin-top: 20px;
			margin-bottom: 20px;
		}

		.profile a.active
		{
			float: left;
			background-color: #ddd;
			color: black;
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<html>
	<div class="topnav">
      <a class="active" href="general.php">Дом</a>
      <?php 
	  session_start();
	  if($_SESSION['login']==null) 
	  {
		  echo "<a class='news' href='Site.php'> Регистрация </a><a class='news' href='auth1.php'> Авторизация</a>";
	  }
	  else 
	  {
		  echo "<a class='posteto' href='post.php'>Создание статьи</a><a class='news' href='dashboard.php'>Профиль</a>";
	  }
	  ?>
	</div>
    <body>
    <div>
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
			// Выбор таблицы
			$query = "SELECT * FROM users";
			$result = mysqli_query($conn, $query);
			// Отображение статей
			if (mysqli_num_rows($result) > 0) 
			{
				while ($row = mysqli_fetch_assoc($result)) 
				{
					
					echo "<h3>Фамилия: {$row['login']}</h3>";
					echo "<h3>Имя: {$row['name']}</h3>";
					echo "<h3>Обо мне:</h3>";
					$host = "localhost";
					$username = "root";
					$password = "usbw";
					$dbname = "register-bd";
					$connection = mysqli_connect($host, $username, $password, $dbname);


					$id=$row['id'];
					  // Запрос к базе данных
					  // Выводим данные из запроса
					  $query1="SELECT * FROM dopinfo WHERE id_user='$id'";
					  $result1=mysqli_query($connection, $query1);	
					  $row1=mysqli_fetch_assoc($result1);
					  echo "<td><textarea readonly cols='125' rows='15' resize='none'>". $row1["dopinfo"]."</textarea></td>";
					  echo "<h1></h1>";
					  echo '<div class=profile><a class=news href="article.php?id=' . $row['id'] . '">Перейти</a><br>';
					  // Закрываем соединение с базой данных
					  mysqli_close($connection); 
				}
			} 
			else 
			{
				echo 'Статьей не найдено';
			}
			mysqli_close($conn);
		?>
    <div>
  </body>
</html>
