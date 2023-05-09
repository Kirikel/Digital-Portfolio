<?php 
$db = new mysqli('localhost', 'root', 'usbw', 'register-bd');
$title =$_POST['title']; // Удаляет все лишнее и записываем значение в переменную //$login
$general = $_POST['general'];

$sql = "INSERT INTO posts (title, general) VALUES ('$title', '$general')";

if (mysqli_query($db, $sql)) 
{
    $_SESSION["login"]=$login;
    echo "Registration successful!";

} 
else 
{
    echo "Error: " . $sql . "<br>" . $db->error;
}

header("Location: http://localhost/sitenomai/Главная%20страница.php");
exit();
 ?>
