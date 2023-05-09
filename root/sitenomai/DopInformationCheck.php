
<head>
	<link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<html>
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
			left: 77px;
			top: 150px;
			padding-left: 20px;
			padding-top: 15px;
			color: white;
			background: rgba(44, 44, 44, 0.15);
			border-radius: 30px;
			resize: none;
		}

		
		button 
		{
			Display: flex;
			align-items: center;
			box-sizing: border-box;
			position: absolute;
			width: 719px;
			height: 52px;
			left: 77px;
			top: 600px;
			background: #FFFFFF;
			border: 1px solid #000000;
			border-radius: 10px;
			padding-left: 20px;
		}
		</style>
	</head>
	<body>
	
		<div class="col">
			<div>
				<form method="post" action="DopInformation.php">
					<label>
						<textarea class = 'form-item' name = 'dopinform' id='dopinform' class="form-control" placeholder="Контент" required></textarea>
					</label>
					<button class="btn btn-success">Добавить пост</button> <br>
				</form>
			</div>
		</div>
	</body>
</html>