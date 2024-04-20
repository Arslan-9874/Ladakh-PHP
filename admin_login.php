<?php

session_start();
if (isset($_SESSION['loggedIn']) and $_SESSION['loggedIn'] == 'yes') {
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



        @media (max-width: 700px) {
            form {
                width: 100% !important;
            }

            #LoginSubContainer {
                padding: 0px 1rem !important;
            }

            #mainAdminLogin {
                width: 90% !important;
            }
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center bg-light">
    <div class="container shadow rounded-5" id="mainAdminLogin" style="width: 70%">
        <h2 class="fw-bold my-5 mx-3 py-3 rounded-5 text-light bg-dark text-center text-uppercase fs-3">Admin Login</h2>

        <div class="container px-5 d-flex justify-content-center align-items-center text-center" id="LoginSubContainer">
            <form action="partials/_handleAdminLogin.php" method="post" style="width: 70%">

                <?php

                if (isset($_GET['err']) and $_GET['err'] == 'password') {
                    echo '<div class="alert alert-danger alert-dismissible fade show rounded-4" role="alert">
                    <strong>Error!</strong> You have entered the wrong password, Please confirm your password before entering.
                    <a href="admin_login.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                  </div>';
                }
                if (isset($_GET['err']) and $_GET['err'] == 'email') {
                    echo '<div class="alert alert-danger alert-dismissible fade show rounded-4" role="alert">
                    <strong>Error!</strong> You have entered the wrong email, Please confirm your email before entering.
                    <a href="admin_login.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                  </div>';
                }
                if (isset($_GET['err']) and $_GET['err'] == 'something') {
                    echo '<div class="alert alert-warning alert-dismissible fade show rounded-4" role="alert">
                    <strong>Error!</strong> Something went wrong please try again later.
                    <a href="admin_login.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                  </div>';
                }

                ?>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control rounded-4" id="email" name="email"
                        placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-4" id="password" name="password"
                        placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <button type="submit" class="btn btn-primary my-4 py-2 px-5">Log-In</button>
                <a href="index.php"><button type="button" class="btn btn-dark my-4 py-2 px-5">Go Home</button></a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>