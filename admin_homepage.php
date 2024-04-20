<?php

require "partials/_dbconnect.php";

session_start();
if (!isset($_SESSION['loggedIn']) or $_SESSION['loggedIn'] != 'yes') {
    header('location: admin_login.php');
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - The Adventure Hub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css" />

    <style>
        div.dt-container select.dt-input {
            margin-right: 0.5rem;
            border-radius: var(--bs-border-radius-xl) !important;
        }

        div.dt-container .dt-search input {
            margin-left: 0.5rem;
            border-radius: var(--bs-border-radius-xl) !important;
        }

        div.dt-container div.dt-layout-row.dt-layout-table {
            overflow: auto;
        }

        @media (max-width: 700px) {
            #mainContainer {
                width: 90% !important;
            }
        }
    </style>

</head>

<body>
    <?php

    require "partials/_admin_header.php";

    ?>

    <div class="container shadow rounded-5 py-4 px-4 my-5 " id="mainContainer" style="width: 70%">
        <h2 class="fw-bold mt-5 mb-5 mx-3 py-3 rounded-5 text-light bg-dark text-center text-uppercase fs-3">Welcome
            Admin
        </h2>

        <div class="my-5">
            <?php

            if (isset($_GET['err']) and $_GET['err'] == 'deleted') {
                echo '<div class="alert alert-success alert-dismissible fade show rounded-5 mx-3" role="alert">
                <strong>Success!</strong> User entry has been deleted successfully.
                <a href="admin_homepage.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                </div>';
            }

            if (isset($_GET['err']) and $_GET['err'] == 'something') {
                echo '<div class="alert alert-warning alert-dismissible fade show rounded-5 mx-3" role="alert">
                <strong>Error!</strong> Something went wrong please try again.
                <a href="admin_homepage.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                </div>';
            }

            ?>

            <table id="myTable" class="display responsive nowrap">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="overflow-auto">
                    <?php

                    $sql = "SELECT * FROM `user_details`";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>
                            <td>' . $i . '</td>
                            <td>' . $row['name'] . '</td>
                            <td>' . $row['email'] . '</td>
                            <td><form method="post">
                            <input type="hidden" name="sno" value="' . $row['sno'] . '">
                            <button type="submit" class="btn btn-dark" formaction="more_details.php">More Details</button>
                            <button type="submit" class="btn btn-danger" formaction="partials/_handleUserDelete.php">Delete</button></td>
                            </form>
                            </tr>';
                            $i++;
                        }
                    }
                    ?>
                    <form action="" method="post">
                        <input type="hidden" name="sno" value="'.$row['sno'].'">
                    </form>
                </tbody>
            </table>
        </div>

    </div>


    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        let table = new DataTable('#myTable');
        $('#example').DataTable({
            responsive: true
        });
    </script>
</body>

</html>