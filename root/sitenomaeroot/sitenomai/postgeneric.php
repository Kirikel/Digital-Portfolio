<?php 
$db = new mysqli('localhost', 'root', 'usbw', 'register-bd');
$title=$_POST['title'];
$general=$_POST['general'];


$sql = "INSERT INTO posts (title, general, timef) VALUES ('$title', '$general', 'strtotime("now")')";

if (mysqli_query($db, $sql)) 
{
    $_SESSION["title"]=$title;
    echo "Пост successful!";
	exit();
} 
else 
{
    echo "Error: " . $sql . "<br>" . $db->error;
	exit();
}
header("Location: http://localhost/sitenomai/Site.php");
exit();
 ?>