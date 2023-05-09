<?php
      function Posted()
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
      $query = "SELECT * FROM posts";

      // Выполняем запрос
      $result = mysqli_query($connection, $query);

      // Проверяем результат запроса
      if (!$result) {
        echo "Ошибка выполнения запроса: " . mysqli_error($connection);
        exit();
      }
	  
      // Выводим данные из запроса
      echo "<table>";
	  
      while ($row = mysqli_fetch_assoc($result)) {
		if($row['id_user']!=0)
		{	
			echo "<tr><td><textarea readonly cols='4' rows='2' resize:'none'>" . $row["id"] ."</textarea></td><td><textarea readonly cols='30' rows='2' resize='none'>" . $row["title"] ."</textarea></td><td><textarea readonly cols='60' rows='2' resize='none'>". $row["general"] . "</textarea></td><td><textarea readonly cols='17' rows='2' resize='none'>" . $row["timef"] . "</textarea></td><td><textarea readonly cols='4' rows='2' resize:'none'>" . $row["id"] ."</textarea></td><td><textarea readonly cols='4' rows='2' resize:'none'>" . $row["id_user"] ."</textarea></td></tr>";
		}
      }
      echo "</table>";

      // Закрываем соединение с базой данных
      mysqli_close($connection);
      }
?>