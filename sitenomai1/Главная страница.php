
<head>
	<link rel="stylesheet" href="style2.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<html>
	<div class="topnav">
	  <a class="active" href="#home">Home</a>
	  <a class="news" href="Сайт.php">Регистрация</a>
	</div>

</html>
<?php
	$File = 'content.db';
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$Message = isset ($_POST['message']) ? trim (strip_tags ($_POST['message'])) : null;
		if (!is_null ($Message)){
			file_put_contents ($File, $Message, FILE_APPEND);
			echo "Ваше сообщение было добавлено\n";
		}
	}
	 
	if (!is_file ($File)){
		$Handler = fopen ($File, 'w');
		fclose ($Handler);
	}
	 
	$Content = file ($File);
	echo '<h2>Сообщения из базы:</h2>';
	foreach ($Content as $String){
		echo $String . '<br>';
	}
	 
	echo '<hr>';
?>
