<?php 
	session_start();

	$host = "localhost";
	$username = "root";
	$password = "usbw";
	$dbname = "register-bd";
	$login = $_POST["login"];
	$pass = $_POST["pass"];
	$name=$_POST["name"];
	$connection = mysqli_connect($host, $username, $password, $dbname);
	
	if(mb_strlen($login) < 5 || mb_strlen($login) > 90)
	{
		echo "Недопустимая длина логина";
		exit();
	}

	else if(mb_strlen($name) < 5 || mb_strlen($name) > 90)
	{
		echo "Недопустимая длина имени.";
		exit();
	}
	$query = "SELECT * FROM users WHERE login = '$login' and name='$name'";

      // Выполняем запрос
	$result = mysqli_query($connection, $query);

		  // Проверяем результат запроса
	if (!mysqli_fetch_row($result)) 
	{
		$sql = "INSERT INTO users (login, name, pass) VALUES ('$login', '$name', '$pass')";
		mysqli_query($connection, $sql);
		$_SESSION["login"]=$login;
		$_SESSION["name"]=$name;
		header("Location: http://localhost/sitenomai/dashboard.php");
		exit();
	}
	else 
	{
		header("Location: http://localhost/sitenomai/Site.php");
		exit();
	}
 ?>
