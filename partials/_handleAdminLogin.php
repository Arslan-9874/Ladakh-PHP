<?php

require '_dbconnect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $admin_email = 'admin@gmail.com';
    $admin_password = 'admin';

    if ($email == $admin_email) {
        if ($password == $admin_password) {

            session_start();
            $_SESSION['loggedIn'] = 'yes';

            header('location: ../admin_homepage.php');
            exit;
        } else {
            header('location: ../admin_login.php?err=password');
            exit;
        }
    } else {
        header('location: ../admin_login.php?err=email');
        exit;
    }
}
header('location: ../admin_login.php?err=something');
exit;
?>