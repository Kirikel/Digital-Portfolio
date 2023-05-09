<?php
// Начать сессию
session_start();
$db = new mysqli('localhost', 'root', 'usbw', 'register-bd');
if ($db->connect_error) {
    die("Ошибка подключения: " . $db->connect_error);
}
$login = $_POST["login"];
$sql = "SELECT * FROM users WHERE login = '$login' 

$result = $db->query($sql);

if ($result->num_rows > 0) 
{
    // Пользователь авторизован
    $_SESSION["login"] = $login;
    header("Location: http://localhost/sitenomai/dashboard.php");
} else 
{
	echo "Пользователь не авторизован."
}

$db->close();
?>
