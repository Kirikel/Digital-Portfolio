<?php 
	session_start();
      // Подключаемся к базе данных
    $host = "localhost";	
	$username = "root";
    $password = "usbw";
    $dbname = "register-bd";
	$title=$_POST['title'];
	$general=$_POST['general'];
	$id=$_SESSION['id'];
    $db = mysqli_connect($host, $username, $password, $dbname);
	$sql = "INSERT INTO `posts`(`title`, `general`, `id_user`) VALUES ('$title', '$general', '$id')";
	mysqli_query($db, $sql);
	header("Location: http://localhost/sitenomai/dashboard.php");
	exit();
 ?>