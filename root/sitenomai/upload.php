<html>
	<body>

	<div class="container-menu">
	</div>	
	<div class="hamburger-menu">
	  <input id="menu__toggle" type="checkbox" />
	  <label class="menu__btn" for="menu__toggle">
		<span></span>
	  </label>
	  <ul class="menu__box">
		<li><a class="menu__item" href="General.php">Главная</a></li>
		<li><a class="menu__item" href="Site.php">Регистрация </a></li>
		<li><a class="menu__item" href="auth.php">Авторизация</a></li>
		<li><a class="menu__item" href="dashboard.php">Профиль</a></li>
	  </ul>
	</div>	    
    <div>
<?php
session_start();
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
        $errors[]='File size must be less than 2 MB';
    }
    
    if(empty($errors)==true)
	{
        move_uploaded_file($file_tmp,"images/image_profile_".$_SESSION['id'].".png");
        echo "Success";
    }
	else
	{
        print_r($errors);
    }
}
?>
</html>
