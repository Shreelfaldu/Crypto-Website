<?php

$host = 'localhost';
$db = 'student';
$user = 'root';
$password = 'shreel';

$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn){
	echo "connection failed";
}
?>