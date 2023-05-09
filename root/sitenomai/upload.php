<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "register-db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных изображения из формы загрузки
$image_name = $_FILES['image']['name'];
$image_type = $_FILES['image']['type'];
$image_data = addslashes(file_get_contents($_FILES['image']['tmp_name']));

// Получение ID 	пользователя из сессии или формы
$user_id = $_SESSION['id']; // Пример использования сессии

// Сохранение данных изображения в базе данных
$sql = "INSERT INTO profiles (user_id, image_name, image_type, image_data) VALUES ($user_id, '$image_name', '$image_type', '$image_data')";

if ($conn->query($sql) === TRUE) {
    echo "Image uploaded successfully";
} else {
    echo "Error uploading image: " . $conn->error;
}

$conn->close();
?>