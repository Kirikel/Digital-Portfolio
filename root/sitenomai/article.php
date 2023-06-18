<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style12.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
	<title>Личный кабинет другого пользователя</title>
	<style>

		h1
		{
			color: black;
			position: center;
		}
		.content
		{
			width: 719px;
			height: 395px;
			color: black;
			resize: none;
			position: center;
		}
		textarea
		{
			resize: none;
			cclor: black;
		}
		.form-item
		{
			left: 10px;
			width: 719px;
			height: 395px;
			color: black;
			padding: 20px;
			background-color: black;
			border-radius: 10px;
			resize: none;
			color: white;

		}
		h1
		{
			text-align: center;
		}
		.container
		{
			margin-top: 10%;
			text-align: center;
		}
		textarea 
		{
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		#container { text-align: center width: %; margin:0 auto; margin-top: 5%; background-color: black; color: white; border-radius: 5%;}
		
		.my
		{
			left: 10px;
			color: black;
			padding: 20px;
			background-color: black;
			border-radius: 10px;
			resize: none;
			color: white;
		}
		.s
		{
			left: 10px;
			padding: 20px;
			background-color: black;
			border-radius: 10px;
			resize: none;
			color: white;
			font-weight: bold; 
			font-size: 20px;
		    width: 645px;
		}
	</style>	
</head>
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
	  <li><a class="menu__item" href="MyWork.php">Ваши работы</a></li>
    </ul>
	</div>
<body>
	<div class="container">
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

      $id=$_GET['id'];
	  $query = "SELECT * FROM user_img WHERE id_user='$id'";
	  $result = mysqli_query($connection, $query);
	  $row2 = mysqli_fetch_assoc($result);
	  echo '<img width="200" height="200" src="'.$row2["imageurl"].'" alt="My Image"></div>';
	?>	

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
			  echo "<td><textarea style='font-size: 15px; 'class = 'form-item' readonly cols='120' rows='10' resize='none'>". $row1["dopinfo"]."</textarea></td>";
			  echo "<h1></h1>";
			  mysqli_close($connection); 
		} 
		
		else 
		{
			echo 'Профиль не найден';
		}
		mysqli_close($conn);
	?>

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
				echo '<div style="width: 37%;" id="container">';
					echo "<div><textarea class='s' readonly cols='80' rows='2' resize='none'>" . $row1["title"] ."</textarea></div>";
					echo "<a></a>";
					echo "<div><textarea class='my' readonly cols='80' rows='29' resize='none'>". $row1["general"] . "</textarea></div>";
					echo "<a></a>";
					echo "<a></a>";
					if ($row1['post_image']!="")
					{
					echo '<div><img width="70%" height="25%" src="'.$row1["post_image"].'" alt="My Image"></img></div>';
					}
					if ($row1['post_video']!='')
					{
						echo  '<div><video width="70%" height="25%" src="'.$row1["post_video"].'" controls autoplay></div>';
					}
					echo "</div>";				
					
			    }
			  }

			  
			  // Закрываем соединение с базой данных
			  mysqli_close($connection);
		?>

</body>
