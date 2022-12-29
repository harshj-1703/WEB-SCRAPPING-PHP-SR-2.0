<?php
//start session
session_start();

//set session
$_SESSION['username'] = $_POST['username'];
echo $_SESSION['username'];

header('location: web-scrapping.php');

?>