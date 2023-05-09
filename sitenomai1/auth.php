<?php
// Начать сессию
session_start();

// Подключение к базе данных
$db = new mysqli('localhost', 'root', 'usbw', 'register-bd');

// Проверка соединения
if ($db->connect_error) {
    die("Ошибка подключения: " . $db->connect_error);
}

// Получить данные формы
$login = $_POST["login"];
$pass = $_POST["pass"];

// Получить данные пользователя из базы данных
$sql = "SELECT * FROM users WHERE login = '$login' AND pass = '$pass'";

$result = $db->query($sql);

if ($result->num_rows > 0) 
{
    // Пользователь авторизован
    $_SESSION["login"] = $login;
    header("Location: http://localhost/sitenomai/dashboard.php");
} else {
    // Неверное имя пользователя или пароль
    echo "Неверное имя пользователя или пароль";
}

$db->close();
?>
