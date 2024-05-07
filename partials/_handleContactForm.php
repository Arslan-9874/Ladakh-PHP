<?php

require "_dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $number = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $bike = $_POST['bike'];

    $name = str_replace("<", "&lt;", $name);
    $name = str_replace(">", "&gt;", $name);

    $email = str_replace("<", "&lt;", $email);
    $email = str_replace(">", "&gt;", $email);

    $sql = "INSERT INTO `user_details`(`name`, `phone`, `email`, `gender`, `country`, `bike`) VALUES ('$name','$number','$email','$gender','$country', '$bike')";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        header('location: ../contact_us.php?query=success');
        exit;
    }
    else
    {
        header('location: ../contact_us.php?query=failed');
        exit;
    }
}
header('location: ../contact_us.php?query=wrong');
exit;

// echo $name;
// echo '<br>';
// echo $number;
// echo '<br>';
// echo $email;
// echo '<br>';
// echo $gender;
// echo '<br>';
// echo $country;
?>