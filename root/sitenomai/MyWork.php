
<?php session_start();
	if ($_SESSION['login']==null)
	{
		header("Location: http://localhost/sitenomai/Site.php");
		exit();
	}
	$host = "localhost";
	$username = "root";
	$password = "usbw";
	$dbname = "register-bd";
	$connection = mysqli_connect($host, $username, $password, $dbname);

?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<head>
	<title>Мои работы</title>
	<style>	
		h1
		{
			color: black;
		}
		.content
		{
			width: 719px;
			height: 395px;
			color: black;
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
			color: black;
			padding: 20px;
			background: rgba(44, 44, 44, 0.15);
			border-radius: 10px;
			resize: none;
		}
		.button
		{
			display: block;
			box-sizing: border-box;
			width:5%;
			height: auto;
			margin-bottom: 20px;
			margin-top: 20px;
			background-color: white;
		}
		.container
		{
			text-align: center;
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
		h1
		{
			color: black;
		}
		.container
		{
			margin-top: 15%;
		}
		textarea 
		{
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		#container { text-align: center width: 50%; margin:0 auto; margin-top: 5%; }
		
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
		.profile
		{
			text-align:center;
		}
		h1
		{
			text-align: center;
		}
		.center 
		{
			margin: 0 auto; 
			width: 25%;
			line-height: 1px; 
			margin-top: 5%;
		}
		.container-menu
		{
	
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 25px;
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
			  $id=$_SESSION['id'];
			  $query1="SELECT * FROM posts WHERE id_user='$id'";
			  $result1=mysqli_query($connection, $query1);	
			  echo "<h1>Ваши работы:</h1>";

			  while ($row1 = mysqli_fetch_assoc($result1)) 
			  {
				if($row1['id_user']!=0)
				{	
					echo '<div id="container">';
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
	</div>
</body>
</html>



		