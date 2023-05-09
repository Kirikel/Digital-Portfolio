<?php
// Начать сессию
session_start();

$host = "localhost";
$username = "root";
$password = "usbw";
$dbname = "register-bd";
$connection = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
	echo "Ошибка подключения к базе данных: " . mysqli_connect_error();
	exit();
}

$login = $_POST["login"];
$pass = $_POST["pass"];
      // Запрос к базе данных
$query = "SELECT * FROM users WHERE login = '$login' AND pass = '$pass'";

      // Выполняем запрос
$result = mysqli_query($connection, $query);

      // Проверяем результат запроса
if (!$result) 
{
	echo "Ошибка выполнения запроса: " . mysqli_error($connection);
	exit();
}


if ($result->num_rows > 0) 
{
	
    // Пользователь авторизова
    $_SESSION["login"] = $login;
    header("Location: http://localhost/sitenomai/dashboard.php");
} else {
    // Неверное имя пользователя или пароль
    echo "Неверное имя пользователя или пароль";
}

$db->close();
?>
