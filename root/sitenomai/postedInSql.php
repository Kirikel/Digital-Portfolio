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
		if($row['id_user']!=0)
		{	
			echo "<tr><td><textarea readonly cols='4' rows='2' resize:'none'>" . $row["id"] ."</textarea></td><td><textarea readonly cols='30' rows='2' resize='none'>" . $row["title"] ."</textarea></td><td><textarea readonly cols='60' rows='2' resize='none'>". $row["general"] . "</textarea></td><td><textarea readonly cols='17' rows='2' resize='none'>" . $row["timef"] . "</textarea></td><td><textarea readonly cols='4' rows='2' resize:'none'>" . $row["id"] ."</textarea></td><td><textarea readonly cols='4' rows='2' resize:'none'>" . $row["id_user"] ."</textarea></td></tr>";
		}
      }
      echo "</table>";

      // ��������� ���������� � ����� ������
      mysqli_close($connection);
      }
?>