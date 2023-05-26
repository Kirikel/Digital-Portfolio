<?php
	session_start();
	if ($_SESSION['login']!=null)
	{
		header("Location: http://localhost/sitenomai/dashboard.php");
		exit();
	}

?>
<head>
	<link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<html>
	<div class="container-menu">
	</div>	
	<div class="hamburger-menu">
	  <input id="menu__toggle" type="checkbox" />
	  <label class="menu__btn" for="menu__toggle">
		<span></span>
	  </label>
	  <ul class="menu__box">
		<li><a class="menu__item" href="General.php">Главная</a></li>
		<li><a class="menu__item" href="Site.php">Регистрация </a></li>
		<li><a class="menu__item" href="auth.php">Авторизация</a></li>
		<li><a class="menu__item" href="dashboard.php">Профиль</a></li>
	  </ul>
	</div>



<html>

	<head>
		<style>

			.col
			{

				position: absolute;
				width: 500px;
				height: 650px;
				left: 770px;
				top: 250px;

				background: #101010;
				box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
				border-radius: 30px;

			}
			.signup
			{


				position: absolute;
				width: 250px;
				height: 78px;
				left: 160px;
				top: 0px;

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
				left: 56px;
				top: 236px;
				background: #232323;
				border: 1px solid #FFFFFF;
				border-radius: 10px;
				color: white;
			}

			.password
			{
				box-sizing: border-box;
				position: absolute;
				width: 388px;
				height: 44px;
				left: 56px;
				top: 300px;
				color: white;
				background: #232323;
				border: 1px solid #FFFFFF;
				border-radius: 10px;

			}
			.btn-success
			{
				box-sizing: border-box;
				position: absolute;
				width: 388px;
				height: 80px;
				left: 56px;
				top: 428px;
				background: url(button.png);
			}
		</style>
	</head>
	<body>
		<div class="col">
				<div class="signup"> Вход</div>
				<form action="auth2.php" method="post">
					<input class="login" type="text" name="login" class="form-control" id="login" placeholder="Логин" required><br>
					<input class="password" type="password" name="pass" class="form-control" id="pass" placeholder="Пароль" required><br>
					<button class="btn btn-success">Войти</button><br>
				</form> 
		</div>
		
	</body>
</html>
