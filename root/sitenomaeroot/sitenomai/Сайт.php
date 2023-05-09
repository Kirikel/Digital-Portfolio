
<head>
	<link rel="stylesheet" href="style2.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<html>
	<div class="topnav">
	  <a class="active" href="Главная страница.php">Главная</a>
	  <a class="news" href="Сайт.php">Регистрация</a>
	</div>
</html>

<html>

	<head>
		<link rel="stylesheet" href="style.css">

	</head>
	<body>
	
		<div class="container mt-4">
			<div class="row">
				<div class="col">
					<h1>Форма регистрации</h1>
					<form action="check.php" method="post">
					
						<input type="text" name="login" class="form-control" id="login" placeholder="Логин" required><br>
						<input type="text" name="name" class="form-control" id="name" placeholder="Имя" required><br>
						<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль" required><br>
						<button class="btn btn-success">Зарегистрироваться</button><br>
						<? 
							session_start();
							include('check.php');
							echo $_SESSION['message'];
						?>
					</form> 
				</div>
				<div class="col">
                <h1>Авторизация</h1>
				<form action="auth.php" method="post">
						<input type="text" name="login" class="form-control" id="login" placeholder="Логин"><br>
						<input type="password" name="pass" class="form-control" id="pass" placeholder="Пароль"><br>
						<button class="btn btn-success">Авторизоваться</button><br>
					</form> 
				</div>

				<? 
					session_start();
					include('check.php');
					echo $_SESSION['message'];
				?>
			</div>
		</div>
		
	</body>
</html>