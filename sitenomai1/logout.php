<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
// Начать сессию
session_start();

// Удалить сессию
session_destroy();

// Перенаправить на страницу входа
header("Location:http://localhost/sitenomai/%d0%a1%d0%b0%d0%b9%d1%82.php");
exit();
?>
