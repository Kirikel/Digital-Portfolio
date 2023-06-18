<?php 
session_start();
$id=$_SESSION['id'];
$host = "localhost";
$username = "root";
$password = "usbw";
$dbname = "register-bd";

$connection = mysqli_connect($host, $username, $password, $dbname);
$result = mysqli_query($connection, "SELECT * FROM posts");
$num_rows = mysqli_num_rows($result);

$target_dir = "images/";
echo "What?";
if(is_uploaded_file($_FILES['image']['tmp_name']))
{
     // Параметры для загрузки файла

     $file_name = basename($_FILES["image"]["name"]);
     $target_file = $target_dir . $file_name;
     $upload_ok = true;
     $file_type = pathinfo($file_name, PATHINFO_EXTENSION);
     
     // Проверка, является ли файл изображением
     $check = getimagesize($_FILES["image"]["tmp_name"]);
     if(!$check) 
	 {
         echo "Файл не является изображением.";
     }
	 $target_dir_image=$target_dir."image".$num_rows.".".$file_type;
     // Разрешенные типы файлов
     $allowed_types = array("jpg", "jpeg", "png", "gif");
     if(!in_array($file_type, $allowed_types)) 
	 {
         echo "Неверный тип файла. Разрешены только JPG, JPEG, PNG и GIF.";

     }
     else
	 {
	 {
         if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir_image)) 
		 {
			move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir_image);
         } else {
             echo "Ошибка при загрузке файла.";
         }
     }
	 }
 }
 else
 {
	echo "What?";
 }
if(is_uploaded_file($_FILES['video']['tmp_name']))
{
     // Параметры для загрузки файла
     $target_dir_video = "images/";
     $file_name = basename($_FILES["video"]["name"]);
     $target_file = $target_dir . $file_name;
     $upload_ok = true;
     $file_type = pathinfo($file_name, PATHINFO_EXTENSION);
	 $target_dir_video=$target_dir."video".$num_rows.".".$file_type;
     // Разрешенные типы файлов
     $allowed_types = array("mov", "wmv", "avi", "mp4");
     if(!in_array($file_type, $allowed_types)) 
	 {
         echo "Неверный тип файла. Разрешены только mov, wmv, avi и mp4.";

     }
     
     // Если файл удовлетворяет всем условиям, загрузить его
     else 
	 {
         if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_dir_video)) 
		 {
			move_uploaded_file($_FILES["video"]["tmp_name"], $target_dir_video);

         } 
		 else 
		 {
             echo "Ошибка при загрузке файла.";
         }
     }
 }
else 
{
	echo "Ошибка загрузки";
}
$general=$_POST['general'];
$title=$_POST['title'];
echo "What?";
$sql = "INSERT INTO `posts`(`title`, `general`, `id_user`, `post_image`, `post_video`) VALUES ('$title','$general','$id','$target_dir_image','$target_dir_video')";
if (mysqli_query($connection, $sql))
{
	header("Location: http://localhost/sitenomai/dashboard.php");
}
?>