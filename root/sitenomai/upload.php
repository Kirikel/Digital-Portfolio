<?php 
if(isset($_FILES['image'])) 
{
	
	session_start();
	$id=$_SESSION['id'];
	$host = "localhost";
	$username = "root";
	$password = "usbw";
	$dbname = "register-bd";
	$connection = mysqli_connect($host, $username, $password, $dbname);
     // Параметры для загрузки файла
     $target_dir = "images/";
     $file_name = basename($_FILES["image"]["name"]);
     $target_file = $target_dir . $file_name;
     $upload_ok = true;
     $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
     
     // Проверка, является ли файл изображением
     $check = getimagesize($_FILES["image"]["tmp_name"]);
     if(!$check) 
	 {
         echo "Файл не является изображением.";
         $upload_ok = false;
     }
	 $target_dir="images/avatar_".$id.".".$file_type;
     // Проверка, существует ли файл с таким именем
     if (file_exists($target_dir)) 
	 {
		 echo "Файл '". $target_dir ."' успешно загружен.";
		 $sql = "UPDATE `user_img` SET `imageurl`='$target_dir' WHERE `id_user`='$id'";
		 mysqli_query($connection, $sql);
		 unlink($target_dir);
		 move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
		 header("Location: http://localhost/sitenomai/dashboard.php");
		 exit();
     }
     
     // Проверка размера файла
     if ($_FILES["image"]["size"] > 5000000) 
	 {
         echo "Файл слишком большой.";
         $upload_ok = false;
     }
     
     // Разрешенные типы файлов
		 $allowed_types = array("jpg", "jpeg", "png", "gif");
		 if(!in_array($file_type, $allowed_types)) 
		 {
			 echo "Неверный тип файла. Разрешены только JPG, JPEG, PNG и GIF.";
			 $upload_ok = false;
		 }
     
     // Если файл удовлетворяет всем условиям, загрузить его
     if ($upload_ok) {
         if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir)) 
		 {
			move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir);
			$sql = "INSERT INTO `user_img`(`imageurl`, `id_user`) VALUES ('$target_dir','$id')";
			
			mysqli_query($connection, $sql);
			header("Location: http://localhost/sitenomai/dashboard.php");
         } else {
             echo "Ошибка при загрузке файла.";
         }
     }
 }
 ?>