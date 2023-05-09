<head>
    <link rel="stylesheet" href="style2.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<html>
    <div class="topnav">
      <a class="active" href="#home">Home</a>
      <a class="news" href="Сайт.php">Регистрация</a>
	  <a class="posteto" href="auth.php">Авторизация</a>
    </div>
    <body>
    <div>
        <?php
			  {
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

			  // Запрос к базе данных
			  $query = "SELECT * FROM users";

			  // Выполняем запрос
			  $result = mysqli_query($connection, $query);

			  // Проверяем результат запроса
			  if (!$result) {
				echo "Ошибка выполнения запроса: " . mysqli_error($connection);
				exit();
			  }

			  // Выводим данные из запроса
			  echo "<table>";
			  $rowprofiles=mysqli_fetch_array($result);
			  
			  foreach ($rowprofiles as $rowprofile) 
			  {
				    echo "<h3>Логин: {$article['login']}</h3>";
					echo "<p>Имя: {$article['name']}</p>";
					echo "<p>Обо мне </p>";
					echo "<a href='/article.php?id={$article['id']}'>Читать далее...</a>";
			  }
			  echo "</table>";

			  // Закрываем соединение с базой данных
			  mysqli_close($connection);
			  }
		?>
    <div>
  </body>
</html>