<?php

$db_name = 'mysql:host=localhost;dbname=car';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);

//$conn = mysqli_connect('localhost','root','','car');

?>