<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "login_db";

session_start();

$_username = $_POST["username"];
$_password = $_POST["password"];

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    echo "Connection error: " . mysqli_connect_error();
}

$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$_username' and password = '$_password'");

$row = mysqli_fetch_array($result);

if($row["username"] == $_username && $row["password"] == $_password)
{
    $_SESSION["username"] = $row["username"];
    $_SESSION["mus_count"] = $row["mus_count"];
    header('Location: index.php');
}

else
{
    echo "Nie udało się zalogować :(";
}