
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
<head>
	<link rel="stylesheet" href="style12.css">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style>			
		.input
		{
			Display: flex;
			align-items: center;
			position: absolute;
			width: 719px;
			height: 50px;
			left: 5%;
			top: 150px;
			padding-top: 15px;
			padding-left: 20px;
			color: white;
			background: black;
			border-radius: 10px;
			resize: none;
		}
		.form-item
		{
			Display: flex;
			align-items: center;
			position: absolute;
			width: 719px;
			height: 395px;
			left: 5%;;
			top: 250px;
			color: white;
			padding: 20px;
			color: white;
			background-color: black;
			border-radius: 10px;
			resize: none;
		}

		
		
		.image
		{
			Display: flex;
			align-items: center;
			box-sizing: border-box;
			position: absolute;
			width: 719px;
			height: 52px;
			left: 5%;
			padding-left: 20px;
			top: 700px;
			margin-top: 5px;
			background: #FFFFFF;
			border: 1px solid #000000;
			border-radius: 10px;
			align-items: center;
		}
		.video
		{
			Display: flex;
			align-items: center;
			box-sizing: border-box;
			position: absolute;
			width: 719px;
			height: 52px;
			left: 5%;
			padding-left: 20px;
			top: 800px;
			margin-top: 5px;
			background: #FFFFFF;
			border: 1px solid #000000;
			border-radius: 10px;
			align-items: center;
		}
		.col1
		{
			padding: 20%;
			top: 20%;
			color: black;
		}
		label
		{
			color: black;
		}
		div
		{
			color: black;
		}
		input
		{
			color: black;
		}
		.video-label
		{
			top: 1200x;
			left: 77px;
		}
		.btn-success
		{
			box-sizing: border-box;
			position: absolute;
			width: 719px;
			height: 80px;
			left: 5%;
			top: 95%;
			border-radius: 20px;
			background-color: white;
		}
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
	  <li><a class="menu__item" href="MyWork.php">Ваши работы</a></li>
    </ul>
	</div>
	<body>
		<div class='v'>
		</div>
		<div class="col1">
			<div>
			<form method="POST" action="postgeneric.php" enctype="multipart/form-data">
				<label for="title"></label>
				<textarea class="input" name='title' id='title' placeholder="Название" required></textarea>
			  
				<label for="content">
				<textarea class = 'form-item' name = 'general' id='general' class="form-control" placeholder="Контент" required></textarea><br><br></label>
				<div style="position: absolute; top:72%; left: 5%; font-size: 25px; ">Изображение</div>
				<label for="image"> 
				<input type="file" class="image" id="image" name="image" multiple><br><br>
			  	</label>
				<div style="position: absolute; top:83%; left: 5%; font-size: 25px; ">Видео</div>
				<label for="video">
				<input type="file" class="video" id="video" name="video" multiple><br><br>
			  	</label>
				<button class="btn btn-success">Добавить пост</button> <br>
			</form>
			</div>
		</div>
	</body>
	</div>
</html>else 
	  {
		  echo "<a class='posteto' href='post.php'>Создание статьи</a>"."<a class='news' href='dashboard.php'>Профиль</a>";
	  }
	  ?>
	</div>
</html>

<html>
	<body>
	
		<div class="col">
			<div>
				<form method="post" action="postgeneric.php">
					<label>
						<textarea class="input" name='title' id='title' placeholder="Название" required></textarea>
					</label>
					<label>
						<textarea class = 'form-item' name = 'general' id='general' class="form-control" placeholder="Контент" required></textarea>
					</label>

					<button class="btn btn-success">Добавить пост</button> <br>
				</form>
			</div>
		</div>
	</body>
</html>
