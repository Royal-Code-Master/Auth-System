<?php

require './connection.php';

if (isset($_POST['signup'])) {

    $n = $_POST['u'];
    $m = $_POST['e'];
    $p = $_POST['p'];

    $insert_bundle_details = "insert into signup (username, mail, passwords) values ('$n','$m','$p')";
    $issue_result = mysqli_query($con, $insert_bundle_details);
    if ($issue_result) {
        echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <center><strong>User Alert </strong> successfull.</center>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        ';
    }
}



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
                        <label for="">username</label>
                        <input type="text" name="u" id="" class="form-control" required>
                    </div>
                    <div class="row p-2">
                        <label for="">email</label>
                        <input type="email" name="e" id="" class="form-control" required>
                    </div>
                    <div class="row p-2">
                        <label for="">password</label>
                        <input type="password" name="p" id="" class="form-control" required>
                    </div>
                    <br>
                    <button type="submit" class="btn form-control" id="login" name="signup">Register</button>
                    <br>
                    <a href="./index.php" class="btn form-control" id="signup">Signin</a>
                </form>

            </center>
        </div>
    </div>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>