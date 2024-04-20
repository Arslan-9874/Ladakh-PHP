<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ladakh";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
    echo mysqli_error($conn);
    die;
}
?>