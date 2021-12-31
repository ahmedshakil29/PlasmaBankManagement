<?php
session_start();
require_once('../index_model.php');
$indObj = new IndexModel();
$rs = $indObj->getUserInfoByUserName($_SESSION["UserName"]);
while ($r = mysqli_fetch_assoc($rs)) {
    $userName = $r['UserName'];
    $name = $r['Name'];
    $userEmail = $r['UserEmail'];
    $phone = $r['Phone'];
    $blood = $r['Blood'];
    $address = $r['Address'];
    $password = $r['Password'];
}

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
            <div class="sidebar-wrapper">
                <div class="logo">
                    <h5 class="simple-text logo-mini"> Hi, <?php echo $name ?></h5>


                </div>

                <ul class="nav">
                    <li>
                        <a href="./DonorDashboard.php">
                            <i class="tim-icons icon-chart-pie-36"></i>
                            <h5>Dashboard</h5>
                        </a>
                    </li>
                    <li>
                        <a href="./DonorInformation.php">
                            <i class="fas fa-info"></i>
                            <h5>Donor Information</h5>
                        </a>
                    </li>
                    <li>
                        <a href="./DonorMedicalHistory.php">
                            <i class="fas fa-history"></i>
                            <h5>Medical History</h5>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./UserProfile.php">
                            <i class="tim-icons icon-single-02"></i>
                            <h5>User Profile</h5>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <h3 class="navbar-brand">Plasma Bank Management</h3>
                    </div>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="../assets/img/anime3.png" alt="Profile Photo">
                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                    <p class="d-lg-none">
                                        Log out
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href="../logout.php" class="nav-item dropdown-item">Log
                                            out</a></li>
                                </ul>
                            </li>
                            <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>




            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Edit Profile</h5>
                            </div>
                            <div class="card-body">
                                <?php


                                ?>
                                <form method="post" action="update_user.php" name="datavalid" onsubmit="return validateForm()">
                                    <div class="row">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="UserName" value='<?php echo $userName ?>' readonly="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-md-1">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" name="Name" value="<?php echo $name ?>" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 pr-md-1">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control" name="UserEmail" value="<?php echo $userEmail ?>" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 pr-md-1">
                                            <div class="form-group">
                                                <label> Phone Number</label>
                                                <input type="text" class="form-control" name="Phone" value="<?php echo $phone ?>" placeholder="Number">
                                            </div>
                                        </div>
                                        <div class="col-md-7 pl-md-1">
                                            <div class="form-group">
                                                <label> Blood Group</label>
                                                <div class="col-md-12 pl-md-1">
                                                    <select class="select" id="Blood" name="Blood">
                                                        <option value="<?php echo $blood ?>"><?php echo $blood ?> </option>
                                                        <option value="">Change your blood group </option>
                                                        <option value="A+"> A+</option>
                                                        <option value="A-"> A-</option>
                                                        <option value="B+"> B+</option>
                                                        <option value="B-"> B-</option>
                                                        <option value="AB+"> AB+</option>
                                                        <option value="AB-"> AB-</option>
                                                        <option value="O+"> O+</option>
                                                        <option value="O-"> O-</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="Address" placeholder="Address" value="<?php echo $address ?>">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="Password" placeholder="password" value="<?php echo $password ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-md-1">
                                            <div class="form-group">
                                                <label>Confirm Password </label>
                                                <input type="password" class="form-control" placeholder="password" value="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="card-footer"> -->
                                    <button type="submit" class="btn btn-fill btn-primary">Save</button>
                                    <!-- </div> -->
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="card-body">
                                <p class="card-text">
                                <div class="author">
                                    <div class="block block-one"></div>
                                    <div class="block block-two"></div>
                                    <div class="block block-three"></div>
                                    <div class="block block-four"></div>
                                    <a href="javascript:void(0)">
                                        <img class="avatar" src="../assets/img/anime3.png" alt="...">
                                    </a>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        select {
            background-color: #babac7;
            min-height: 41px;
            box-shadow: none !important;
        }
    </style>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>

</body>

</html>






<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Profile
    </title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <h5 class="simple-text logo-mini"> Hi, Shakil</h5>
                </div>

 -->


<!-- 
<ul class="nav">
    <li>
        <a href="./DonorDashboard.php">
            <i class="tim-icons icon-chart-pie-36"></i>
            <h5>Dashboard</h5>
        </a>
    </li>
    <li>
        <a href="./DonorInformation.php">
            <i class="fas fa-info"></i>
            <h5>Donor Information</h5>
        </a>
    </li>
    <li>
        <a href="./DonorMedicalHistory.php">
            <i class="fas fa-history"></i>
            <h5>Medical History</h5>
        </a>
    </li>
    <li class="active">
        <a href="./UserProfile.php">
            <i class="tim-icons icon-single-02"></i>
            <h5>User Profile</h5>
        </a>
    </li>
</ul> -->

<!-- 
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle d-inline">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <h3 class="navbar-brand">Plasma Bank Management</h3>
                    </div>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <div class="photo">
                                        <img src="../assets/img/anime3.png" alt="Profile Photo">
                                    </div>
                                    <b class="caret d-none d-lg-block d-xl-block"></b>
                                    <p class="d-lg-none">
                                        Log out
                                    </p>
                                </a>
                                <ul class="dropdown-menu dropdown-navbar">
                                    <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log
                                            out</a></li>
                                </ul>
                            </li>
                            <li class="separator d-lg-none"></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="title">Edit Profile</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" value="" disabled="" placeholder="User Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 px-md-1">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" value="" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 pr-md-1">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="email" class="form-control" value="" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 pr-md-1">
                                            <div class="form-group">
                                                <label> Phone Number</label>
                                                <input type="text" class="form-control" placeholder="Number" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-7 pl-md-1">
                                            <div class="form-group">
                                                <label> Blood Group</label>
                                                <div class="col-md-12 pl-md-1">
                                                    <select class="select">
                                                        <option value="">Select your blood group </option>
                                                        <option value="1"> A+</option>
                                                        <option value="2"> A-</option>
                                                        <option value="3"> B+</option>
                                                        <option value="4"> B-</option>
                                                        <option value="5"> A-</option>
                                                        <option value="6"> AB+</option>
                                                        <option value="7"> AB+</option>
                                                        <option value="8"> O+</option>
                                                        <option value="3"> O-</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Address" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-md-1">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="password" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-md-1">
                                            <div class="form-group">
                                                <label>Confirm Password </label>
                                                <input type="password" class="form-control" placeholder="password" value="">
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-fill btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="card-body">
                                <p class="card-text">
                                <div class="author">
                                    <div class="block block-one"></div>
                                    <div class="block block-two"></div>
                                    <div class="block block-three"></div>
                                    <div class="block block-four"></div>
                                    <a href="javascript:void(0)">
                                        <img class="avatar" src="../assets/img/anime3.png" alt="...">
                                    </a>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        select {
            background-color: #babac7;
            min-height: 41px;
            box-shadow: none !important;
        }
    </style>

    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/js/black-dashboard.min.js?v=1.0.0"></script>
    <script src="../assets/demo/demo.js"></script>

</body>

</html> -->