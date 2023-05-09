<head>
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style>
		form {
			text-align:center;
			width: 25%;
		}
		textarea {
			resize: none;
			width: 400px;
			height: 150px;
		}
		
		.button {
		  position: absoulte;
		  bottom: 0;
		  width: 80px;
		  height: 30px;
		}
		.button {
			  width: 25%;
			  font-size: 14pt;
			  color: white;
			  background: #7F113E;
			  height: 55px;
			  padding: 10px;
			  border: 1px solid #F5C4AB;
		}

		.button:hover 
		{
			border: 1px solid white;
		}
	</style>
</head>
<html>
	<div class="topnav">
	  <a class="active" href="Главная страница.php">Главная</a>
	  <a class="news" href="Сайт.php">Регистрация</a>
	</div>
</html>

<html>
	<body>
	
		<div class="col">
			<div>
				<form method="post" action="posted.php">
					<label>
						<input type="text" name='title' class='form-item' placeholder="Название"></input>
					</label>
					<label>
						<textarea class = 'form-item' name = 'general' id='general' class="form-control" placeholder="Контент" required></textarea>
					</label>
					<button class="btn btn-success">Добавить пост </button> <br>
					
				</form>
			</div>
		</div>
	</body>
</html>