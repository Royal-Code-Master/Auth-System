<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">


<?php

// database connection.
include './connection.php';

session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header("Location: ./board.php");
    exit();
} else {

    // checking user conformation
    if (isset($_POST['user_login'])) {

        $data_user_name = $_POST['user_name'];
        $data_password = $_POST['user_password'];


        // select query.
        $select_query = "SELECT * FROM signup where mail='$data_user_name'";
        $result = mysqli_query($con, $select_query);
        $row_data = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($data_user_name == $row_data['mail'] && $data_password == $row_data['passwords']) {

            // session checking
            $_SESSION['logged_in'] = true;
            $_SESSION['mail'] = $data_user_name;

            // success msgs.

            echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <center style="margin-top:7.74px; color:green; font-size:17.74px;"><strong>login success</strong> Redirecting to Portal. </center>
                </div>      
                <br>
                <center><br><br><br><br><br><br>
                    <div class="mt-5">
                        <div class="spinner-grow text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-secondary" role="status">
                        <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-success" role="status">
                        <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-danger" role="status">
                        <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-warning" role="status">
                        <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-info" role="status">
                        <span class="visually-hidden">Loading...</span>
                        </div>
                        <div class="spinner-grow text-dark" role="status">
                        <span class="visually-hidden">Loading...</span>
                       </div>
                    </div>
                </center>
            ';

            header('Refresh: 4; ./board.php');
            exit();
        } else {
            echo '
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <center><strong>User Alert </strong> User login failed please check once</center>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
        }
    }
}

$con->close();

?>











<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>


    <style>
        form {
            max-width: 330px;
            margin-top: 4rem !important;
            border-radius: 10px !important;
            box-shadow: rgba(99, 3, 123, 0.98) 0px 4px 10px, rgba(99, 3, 123, 0.98) 0px -2px 3px, rgba(99, 3, 123, 0.98) 0px 2px 3px, rgba(99, 3, 123, 0.98) 0px 2px 3px, rgba(99, 3, 123, 0.98) 0px -3px 5px;
        }

        label {
            color: rgba(99, 3, 123, 0.98);
            font-weight: 700;
            text-align: left;
            text-transform: capitalize;
            margin-bottom: 2px !important;
        }

        input {
            border-radius: 15px !important;
            color: rgba(99, 3, 123, 0.98) !important;
        }

        #login {
            background-color: rgba(99, 3, 123, 0.98) !important;
            color: white !important;
            border: 2px solid whitesmoke !important;
            margin-bottom: 2rem;
            border-radius: 15px !important;
        }

        #signup {
            font-weight: 700;
            background-color: white !important;
            color: rgba(99, 3, 123, 0.98) !important;
            border: 2px solid rgba(99, 3, 123, 0.98) !important;
            margin-bottom: 2rem;
            border-radius: 15px !important;
        }
    </style>
</head>

<body>

    <div class="page">
        <div class="container">
            <center>
                <br>
                <form action="" method="post" enctype="application/x-www-form-urlencoded" class="form-control" autocomplete="off">
                    <i class="fa fa-user-circle-o fa-3x mt-2" style="color: orangered;"></i>
                    <br><br>
                    <h4 style="font-weight: bolder;"><strong class="text mt-4"><i style="color: rgba(99, 3, 123, 0.98);">Authentication</i> System</strong></h4>
                    <br>

                    <div class="row p-2">
                        <label for="">email</label>
                        <input type="email" name="user_name" id="" class="form-control" required>
                    </div>
                    <div class="row p-2">
                        <label for="">password</label>
                        <input type="password" name="user_password" id="" class="form-control" required>
                    </div>
                    <br>
                    <button type="submit" class="btn form-control" id="login" name="user_login">Signin</button>
                    <br>
                    <a href="./signup.php" class="btn form-control" id="signup">Register</a>
                </form>

            </center>
        </div>
    </div>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>