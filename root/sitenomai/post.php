<head>
	<link rel="stylesheet" href="style.css">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style>			
		.input
		{
			Display: flex;
			align-items: center;
			position: absolute;
			width: 719px;
			height: 50px;
			left: 77px;
			top: 100px;
			padding-top: 15px;
			padding-left: 20px;
			color: white;
			background: rgba(44, 44, 44, 0.15);
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
			left: 77px;
			top: 180px;
			color: white;
			padding: 20px;
			background: rgba(44, 44, 44, 0.15);
			border-radius: 10px;
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
			padding-left: 20px;
			top: 600px;
			margin-top: 5px;
			background: #FFFFFF;
			border: 1px solid #000000;
			border-radius: 10px;
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
		  echo "<a class='news' href='Site.php'> Регистрация </a>"."<a class='news' href='auth.php'> Авторизация</a>";
	  }
	  else 
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