<?php
require_once '..\connect\connect.php';

$login = $_POST['Email'];
$password = $_POST['Password'];


//Check table users
//Отправляет запрос на базу данных
$mysqli_check = mysqli_query($connect, "select * from table1 where Email='$login'");
//Выбирает строку из результатов в ассоциативном массиве
$row = mysqli_fetch_array($mysqli_check);


$quary_b = mysqli_query($connect, "select * from table1 where Password='$password' and Email='$login'");
$row_pass = mysqli_fetch_array($quary_b);


if(!empty($login) and !empty($password))
{
if ($login == $row['Email'] and $password == $row_pass['Password']) {
session_start();

if(!isset($_SESSION['Login']))
{
$_SESSION['Login'] = $login;
header('Location: /index/index.php');
}
else
{
header('Location: /index/index.php');
}

session_write_close();
}
else
{
printf("Incorrect user");
}
}
else
{
printf('Empty Login or Password');
}

?>