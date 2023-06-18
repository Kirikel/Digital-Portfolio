<?php 
	session_start();
	if ($_SESSION['login']!=null)
	{
		header("Location: http://localhost/sitenomai/dashboard.php");
		exit();
	}
?>

<head>
	<link rel="stylesheet" href="style12.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<html>

<html>

	<head>
		<style>
			



			.name
			{
				box-sizing: border-box;
				position: absolute;
				width: 388px;
				height: 44px;
				left: 8%;
				top: 35%;
				color: white;
				margin: auto;
				background: #232323;
				border: 1px solid #FFFFFF;
				border-radius: 10px;
			}


			.posteto
			{
				display: inline;
			}
			.news
			{
				display: inline;
			}
			

			.col
			{

				position: absolute;
				top:15%;
				left:25%;
				height: 60%;
				right:25%;
				width:25%;
				background: #101010;
				box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
				border-radius: 30px;
				margin: auto;
			}
			.signup
			{


				position: absolute;
				width: 5%;
				height: 5%;
				left: 27%;
				top: 2%;

				font-family: 'Jura';
				font-style: normal;
				font-weight: 700;
				font-size: 40px;
				line-height: 47px;
				display: flex;
				align-items: center;
				text-align: center;
				color: white;

			}
			.login
			{

				box-sizing: border-box;
				position: absolute;
				width: 388px;
				height: 44px;
				left: 8%;
				top: 25%;
				color: white;
				margin: auto;
				background: #232323;
				border: 1px solid #FFFFFF;
				border-radius: 10px;

			}

			.password
			{
				box-sizing: border-box;
				position: absolute;
				width: 388px;
				height: 44px;
				left: 8%;
				top: 45%;
				color: white;
				margin: auto;
				background: #232323;
				border: 1px solid #FFFFFF;
				border-radius: 10px;

			}
			.btn-success
			{
				box-sizing: border-box;
				position: absolute;
				width: 84%;
				height: 15%;
				left: 8%;
				top: 60%;
				font-size: 25px;
			}
		</style>
	</head>
	<body>
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
		<div class="col">
			<div class="signup">Регистрация </div>
				<form action="check.php" method="post">
					<input class="login" type="text" name="login" class="form-control" id="login" placeholder="Фамилия" required><br>
					<input class="name" type="text" name="name" class="form-control" id="name" placeholder="Имя" required><br>
					<input class="password" type="password" name="pass" class="form-control" id="pass" placeholder="Пароль" required><br>
					<button class="btn btn-success">Зарегистрироваться</button><br>
				</form> 
			</div>
		</div>
		
	</body>
</html>
