<?php

require "_dbconnect.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $sno = $_POST['sno'];
    $sql = "DELETE FROM `user_details` WHERE `sno` = '$sno'";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
        header('location: ../admin_homepage.php?err=deleted');
        exit;
    }
    else
    {
        header('location: ../admin_homepage.php?err=something');
        exit;
    }
}
else
{
    header('location: ../admin_homepage.php');
    exit;
}

?>