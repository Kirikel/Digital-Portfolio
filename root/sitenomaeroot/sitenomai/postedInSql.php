<?php
      function Posted()
      {
      // ������������ � ���� ������
      $host = "localhost";
      $username = "root";
      $password = "usbw";
      $dbname = "register-bd";
      $connection = mysqli_connect($host, $username, $password, $dbname);

      // ��������� ����������� � ���� ������
      if (mysqli_connect_errno()) {
        echo "������ ����������� � ���� ������: " . mysqli_connect_error();
        exit();
      }

      // ������ � ���� ������
      $query = "SELECT * FROM posts";

      // ��������� ������
      $result = mysqli_query($connection, $query);

      // ��������� ��������� �������
      if (!$result) {
        echo "������ ���������� �������: " . mysqli_error($connection);
        exit();
      }

      // ������� ������ �� �������
      echo "<table>";
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["title"] ."</td><td>". $row["general"] . "</td><td>" . $row["timef"] . "</td></tr>";
      }
      echo "</table>";

      // ��������� ���������� � ����� ������
      mysqli_close($connection);
      }
?>