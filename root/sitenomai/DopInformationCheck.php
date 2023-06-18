
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
<html>

	<head>
		<style>
			
		.input
		{
			Display: flex;
			align-items: center;
			position: absolute;
			width: 719px;
			height: 50px;
			left: 77px;
			top: 60px;
			padding-left: 20px;
			padding-top: 15px;
			color: white;
			background: rgba(44, 44, 44, 0.15);
			border-radius: 30px;
			resize: none;
		}
		.form-item
		{
			Display: flex;
			align-items: center;
			position: absolute;
			width: 719px;
			height: 395px;
			left: 5%;
			top: 150px;
			padding-left: 20px;
			padding-top: 15px;
			color: white;
			background: rgba(44, 44, 44, 0.15);
			border-radius: 30px;
			resize: none;
			background-color: black;
			color: white;
		}

		
		.btn-success
		{
			box-sizing: border-box;
			position: absolute;
			width: 719px;
			height: 80px;
			left: 5%;
			top: 65%;
			border-radius: 20px;
			background-color: white;
			font-size: 25px;
		}
		</style>
	</head>
	<body>
	
		<div class='v'>
		</div>
		<div class="col1">
			<div>
			<form method="POST" action="DopInformation.php" >
				<label>
				<textarea class = 'form-item' name = 'dopinform' id='dopinform' class="form-form-control" placeholder="Контент" required></textarea><br><br></label>
				</label>
				<button class="btn btn-success">Добавить информацию</button> <br>
			</form>
			</div>
		</div>
	</body>
</html>