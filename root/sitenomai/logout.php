<?php
	session_start();
	$_SESSION['login']=null;
	$_SESSION['name']=null;
	$_SESSION['id']=null;
	header("Location: http://localhost/sitenomai/General.php");
?>