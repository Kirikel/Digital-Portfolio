<?php 
	session_start();
      // Подключаемся к базе данных
    $host = "localhost";	
	$username = "root";
    $password = "usbw";
    $dbname = "register-bd";
	$dopinfo=$_POST['dopinform'];
	$id=$_SESSION['id'];
    $db = mysqli_connect($host, $username, $password, $dbname);
	$query1="SELECT * FROM dopinfo WHERE id_user='$id'";
    $result1=mysqli_query($db, $query1);	
	if (mysqli_fetch_assoc($result1)==0)
	{
		$sql = "INSERT INTO dopinfo( `dopinfo`, `id_user`) VALUES ('$dopinfo', '$id')";
		mysqli_query($db, $sql);
		header("Location: http://localhost/sitenomai/dashboard.php");
		exit();
	}
	else
	{
		$sql = "UPDATE dopinfo SET dopinfo = '$dopinfo' WHERE id_user = '$id'";
		mysqli_query($db, $sql);
		header("Location: http://localhost/sitenomai/dashboard.php");
		exit();
	}
 ?>