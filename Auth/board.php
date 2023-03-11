<?php

session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: ../index.php");
    exit();
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

</head>

<style>
    .details {
        max-width: 600px;
        margin-top: 6rem !important;
    }
</style>

<body>

    <div class="page">
        <div class="container">
            <center>
                <div class="details mt-5">
                    <div class="row">
                        <i class="fa fa-star fa-5x" style="color:rgba(99, 3, 123, 0.98);"></i>
                        <br><br>
                        <strong>Welcome to Dashboard</strong>
                        <br><br>
                        <a href="./logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </center>
        </div>
    </div>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>