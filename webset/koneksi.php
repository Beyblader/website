<?php 
error_reporting(0);
session_start();
$host = "localhost";
$username = "root";
$password = "";
$db_name = "pr";
$connection = mysqli_connect($host, $username, $password, $db_name);
?>