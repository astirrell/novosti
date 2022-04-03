<?php
session_start();
if(isset($_SESSION['Login']))
{
    header("Location: /index/index.php");
}
session_write_close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация|Авторизация</title>
    <link type="text/css" href="style.css" rel="stylesheet" media="screen, projection">
	<link type="text/css" href="login.css" rel="stylesheet" media="screen, projection">
</head>
<body>
<div class="form">





	<form class="form-reg" action="/index/login/registration.php" method="POST">
		<p><input type="text" name="Surname" required placeholder="Введите Фамилию"></p>
		<p><input type="text" name="Name" required placeholder="Введите Имя"></p>
		<!-- <p><input type="password" name="Password" required placeholder="Введите Пароль"></p> -->
		<p><input type="email" name="Email" required placeholder="Введите Email"></p>
		<button type="submit">Зарегистрироваться</button>
				<p>
					<div><a href="/index/login.php" class="text">Авторизируйтесь!</a></div>
                </p>
                <p>
					<div><a href="/index/index.php" class="text">На главную!</a></div>
				</p>
				
	</form>







</div>
</body>
</html>
