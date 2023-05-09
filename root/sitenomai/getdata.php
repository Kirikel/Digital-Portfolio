<?php
	session_start();
	$host='localhost';
	$user='root';
	$pass='usbw';

	mysql_connect($host, $user, $pass);

	mysql_select_db('regoster-db');
	$imagename=$_FILES["myimage"]["name"];
	$id_user=$_SESSION['id'];
	//Получаем содержимое изображения и добавляем к нему слеш
	$imagetmp=addslashes(file_get_contents($_FILES['myimage']['tmp_name']));

	//Вставляем имя изображения и содержимое изображения в image_table
	$insert_image="INSERT INTO file VALUES('$imagetmp','$imagename', id_user)";

	mysql_query($insert_image);


?>