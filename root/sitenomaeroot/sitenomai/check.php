<?php 
$db = new mysqli('localhost', 'root', 'usbw', 'register-bd');
$login =$_POST['login']; // Удаляет все лишнее и записываем значение в переменную //$login
$name = $_POST['name'];
$pass = $_POST['pass'];

if(mb_strlen($login) < 5 || mb_strlen($login) > 90)
{
    echo "Недопустимая длина логина";
    exit();
}

else if(mb_strlen($name) < 5)
{
    echo "Недопустимая длина имени.";
    exit();
} // Проверяем длину имени

$sql = "INSERT INTO users (name, pass, login) VALUES ('$name', '$pass', '$login')";

if (mysqli_query($db, $sql)) 
{
    $_SESSION["login"]=$login;
    echo "Registration successful!";

} 
else 
{
    echo "Error: " . $sql . "<br>" . $db->error;
}

header("Location: http://localhost/sitenomai/dashboard.php");
exit();
 ?>
