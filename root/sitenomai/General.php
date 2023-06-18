<head>
    <link rel="stylesheet" href="style12.css">
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
			background-color: white;
			color: black;
			text-align: center;
			text-decoration: none;
			font-size:20px;
			margin-top: 20px;
			margin-bottom: 20px;
		}

			
		.profile a:hover 
		{
			background-color: black;
			color: white;

			margin-top: 20px;
			margin-bottom: 20px;
		}
		.profile a.active
		{

			background-color: black;
			color: white;
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
	  <style>
	table {
  border-collapse: collapse;
  width: 100%;
}
thead {
  font-weight: bold;
}
th,
td {
  padding: 0.5rem;
  text-align: left;
  border: 1px solid black;
}
	.container
	{
		margin-top: 15%;
	}
	.dopinfo
	{
		background-color: black;
		color: white;
	}
	.container
	{
		text-align: center;
	}
	#container { text-align: center width: 25%; margin:0 auto; margin-top: 5%; background-color: black; color: white; border-radius: 5%;}
  </style>
</head>
<html>
	<div style="font-size: 50px;" class="container-menu">
		MyCase
	</div>	
	<div class="hamburger-menu">
    <input id="menu__toggle" type="checkbox" />
    <label class="menu__btn" for="menu__toggle">
      <span></span>
    </label>

    <ul class="menu__box">
      <li><a class="menu__item" href="General.php">Главная</a></li>
      <li><a class="menu__item" href="Site.php">Регистрация</a></li>
      <li><a class="menu__item" href="auth1.php">Авторизация</a></li>
      <li><a class="menu__item" href="dashboard.php">Профиль</a></li>
      <li><a class="menu__item" href="post.php">Создание постов</a></li>
	  <li><a class="menu__item" href="DopInformationCheck.php">Обо мне</a></li>
    </ul>
	</div>

	<body>
	<div class='container'>
	
	
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
				echo "<tbody>";
				while ($row = mysqli_fetch_assoc($result)) 
				{
					echo '<div style="width: 25%; border-radius: 2" id="container">';
					echo "<tr>";
					$host = "localhost";
					$username = "root";
					$password = "usbw";
					$dbname = "register-bd";
					$connection = mysqli_connect($host, $username, $password, $dbname);

					
					$id=$row['id'];	
					$query = "SELECT * FROM user_img WHERE id_user='$id'";
					$result1 = mysqli_query($connection, $query);
					$row2 = mysqli_fetch_assoc($result1);
					if ($row2!="")
					{
						echo '<td><img width="200" height="200" src="'.$row2["imageurl"].'" alt="My Image"></td>';
					}
					echo "<td><h3>Фамилия: {$row['login']}</h3></td>";
					echo "<td><h3>Имя: {$row['name']}</h3></td>";
					echo "<td><h3>Обо мне:</h3></td>";
					

					
					  // Запрос к базе данных
					  // Выводим данные из запроса
					  $query1="SELECT * FROM dopinfo WHERE id_user='$id'";
					  $result1=mysqli_query($connection, $query1);	
					  $row1=mysqli_fetch_assoc($result1);
					  echo "<td><textarea class='dopinfo' readonly cols='50' rows='15' resize='none'>". $row1["dopinfo"]."</textarea></td>";
					  echo "<h1></h1>";
					  echo '<div class=profile><td><a class=news href="article.php?id=' . $row['id'] . '">Перейти</a><br></td></div>';
					  // Закрываем соединение с базой данных

					 echo "</div>";
					  mysqli_close($connection); 
				}
				
			} 
			else 
			{
				echo 'Статьей не найдено';
			}
			mysqli_close($conn);
		?>
    </div>
  </body>
</html>