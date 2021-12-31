<?php
require_once('../index_model.php');
require_once('PatientLayout.php');
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
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <title>
            User Profile
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
                $PatientNavbar->SidebarLayout(3);
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
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="title">Edit Profile</h5>
                                </div>
                                <div class="card-body">
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
                                                            <option value="">Change your blood group </option>
                                                            <option value="Apos" <?php if ($blood == "Apos") {
                                                                                        echo "selected";
                                                                                    } ?>> A+</option>
                                                            <option value="Aneg" <?php if ($blood == "Aneg") {
                                                                                        echo "selected";
                                                                                    } ?>> A-</option>
                                                            <option value="Bpos" <?php if ($blood == "Bpos") {
                                                                                        echo "selected";
                                                                                    } ?>> B+</option>
                                                            <option value="Bneg" <?php if ($blood == "Bneg") {
                                                                                        echo "selected";
                                                                                    } ?>> B-</option>
                                                            <option value="ABpos" <?php if ($blood == "ABpos") {
                                                                                        echo "selected";
                                                                                    } ?>> AB+</option>
                                                            <option value="ABneg" <?php if ($blood == "ABneg") {
                                                                                        echo "selected";
                                                                                    } ?>> AB-</option>
                                                            <option value="Opos" <?php if ($blood == "Opos") {
                                                                                        echo "selected";
                                                                                    } ?>> O+</option>
                                                            <option value="Oneg" <?php if ($blood == "Oneg") {
                                                                                        echo "selected";
                                                                                    } ?>> O-</option>
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
<?php
}
?>

    </html>