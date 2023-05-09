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
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["title"] ."</td><td>". $row["general"] . "</td><td>" . $row["timef"] . "</td></tr>";
      }
      echo "</table>";

      // Закрываем соединение с базой данных
      mysqli_close($connection);
      }
?>