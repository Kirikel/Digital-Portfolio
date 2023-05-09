<?php 
$db = new mysqli('localhost', 'root', 'usbw', 'register-bd');
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING); // Удаляет все лишнее и записываем значение в переменную //$login
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

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

if ($db->query($sql) === TRUE) 
{
    echo "Registration successful!";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $db->error;
}
_SESSION['login']=$login;
header("Location: http://localhost/sitenomai/dashboard.php");
exit();
 ?>