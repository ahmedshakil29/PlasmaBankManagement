<?php
require_once('PatientLayout.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Patient Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar">
            <?php
            $PatientNavbar = new PatientNavbar();
            $PatientNavbar->SidebarLayout(1);
            ?>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <?php
            $PatientNavbar = new PatientNavbar();
            $PatientNavbar->NavbarLayout();
            ?>
            <!-- End Navbar -->
            <div class="content">
                <div class=" row">
                    <div class="col-md-8">

                        <img class="avatar" src="../assets/img/blood-donation-8.jpg" alt="...">
                    </div>
                </div>

            </div>

            <!--   Core JS Files   -->
            <script src="../assets/js/core/jquery.min.js"></script>
            <script src="../assets/js/core/popper.min.js"></script>
            <script src="../assets/js/core/bootstrap.min.js"></script>
            <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
            <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>

</body>

</html>