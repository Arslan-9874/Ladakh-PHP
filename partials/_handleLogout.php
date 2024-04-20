<?php

session_start();
if (isset($_SESSION['loggedIn']) and $_SESSION['loggedIn'] == 'yes') {
    session_unset();
    session_destroy();
    header('location: ../index.php');
    exit;
} else {
    header('location: ../admin_homepage.php');
    exit;
}

?>