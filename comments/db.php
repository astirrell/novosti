<?php  

require "libs/rb.php";
R::setup('mysql:host=localhost;dbname=bd', 'root', '');

$con = mysqli_connect('localhost', 'root', '', 'bd');
?>