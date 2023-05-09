<?php
	session_start();
	$_SESSION['login']=null;
	$_SESSION['name']=null;
	header("Location: http://localhost/sitenomai/General.php");
?>