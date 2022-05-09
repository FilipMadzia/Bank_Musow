<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_db";

session_start();

$_username = $_POST["r_username"];
$_password = $_POST["r_password"];

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    echo "Connection error: " . mysqli_connect_error();
}

mysqli_query($conn, "INSERT INTO users(username, password) VALUES('$_username', '$_password')");

header("Location: index.php");