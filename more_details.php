<?php

require "partials/_dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sno = $_POST['sno'];
} else {
    header('location: admin_homepage.php');
    exit;
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login - The Adventure Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            min-height: 100vh;
        }

        @media(max-width: 700px) {

            #mainAdminLogin {
                width: 90% !important;
            }
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center bg-light">
    <div class="container shadow rounded-5" id="mainAdminLogin" style="width: 70%">
        <h2 class="fw-bold my-5 mx-3 py-3 rounded-5 text-light bg-dark text-center text-uppercase fs-3">Details</h2>

        <div class="container d-flex flex-column justify-content-center align-items-center">
            <div class="container-fluid mx-3 d-flex shadow rounded-5 py-4 overflow-auto">
                <div class="container text-end">
                    <p class="m-0 fs-5 fw-semibold my-2">Name:</p>
                    <p class="m-0 fs-5 fw-semibold my-2">Phone:</p>
                    <p class="m-0 fs-5 fw-semibold my-2">Email:</p>
                    <p class="m-0 fs-5 fw-semibold my-2">Gender:</p>
                    <p class="m-0 fs-5 fw-semibold my-2">Country:</p>
                    <p class="m-0 fs-5 fw-semibold my-2">Preferred Bike:</p>
                </div>
                <div class="container">
                    <?php

                    $sql = "SELECT * FROM `user_details` WHERE `sno` = '$sno'";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo
                                '<p class="m-0 fs-5 my-2 text-capitalize">' . $row['name'] . '</p>
                            <p class="m-0 fs-5 my-2">' . $row['phone'] . '</p>
                            <p class="m-0 fs-5 my-2">' . $row['email'] . '</p>
                            <p class="m-0 fs-5 my-2 text-capitalize">' . $row['gender'] . '</p>
                            <p class="m-0 fs-5 my-2 text-capitalize">' . $row['country'] . '</p>
                            <p class="m-0 fs-5 my-2 text-capitalize">' . $row['bike'] . '</p>';
                        }
                    }
                    ?>
                </div>
            </div>
            <a href="admin_homepage.php"><button type="submit" class="btn btn-dark my-4 py-2 px-5">Go Back</button></a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>