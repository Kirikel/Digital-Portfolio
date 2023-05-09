<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
// Начать сессию
session_start();

// Проверить, авторизован ли пользователь
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit();
}

// Пользователь авторизован
$login = $_SESSION["login"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Личный кабинет пользователя</title>
</head>
<body>
	<h1>Добро пожаловать, <?php echo _SESSION['login']; ?>!</h1>
	<p>Это ваш личный кабинет.</p>
	<a href="logout.php">Выйти</a>
</body>
</html>
