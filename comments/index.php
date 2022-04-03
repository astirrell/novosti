<?php 
session_start();
require "db.php";

if(!isset($_SESSION['Login'])){
?>
    Вы не авторизированы.!!!<a href="../register.php">Регистрация</a>
<?php

}else{
?>

<?php
if (isset($_POST['send'])) {
    
    
    if (isset($_POST['name'])) { $login = $_POST['name']; if ($login == '') { unset($login);} } 
    if (isset($_POST['email'])) { $password=$_POST['email']; if ($password =='') { unset($password);} }
    if (empty($login) or empty($password)) 
    {
    exit ("Заполните все поля!");
    }






$koments = R::dispense('koments');
$koments->name = $_POST['name'];
$koments->email = $_POST['email'];
$koments->message = $_POST['message'];
$koments->date = date("Y.m.d");


R::store($koments);
header('location: index.php');
    
}


?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="koment.css">
    <title>Document</title>
</head>
<body>
    <div class="">
    <form action="" method="post">
        <input type="text" name="name"><br><br>
        <input type="email" name="email"><br><br>
        <input type="text" name="message"><br><br>
        <input type="submit" name="send">
        <a href="../index.php">Главная</a>
    </form>
   <?php $komen =  mysqli_query($con, "SELECT * FROM `koments` ORDER BY `id`") ?>
<?php while($kom = mysqli_fetch_assoc($komen)) { ?>
    
<div class="koment">
<div class="name"><?php echo $_SESSION['Login']; ?>
<div class="clock"><?= $kom['date'] ?></div>
</div>
<br>
<div class="message"><?= $kom['message'] ?></div>
</div>
    <?php } ?>
    <?php } ?>
</body>
</html>