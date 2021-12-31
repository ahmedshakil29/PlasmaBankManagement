<?php
session_start();
class PatientNavbar
{
    public function PatientNavbar()
    {
    }
    public function NavbarLayout()
    {
?>
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
    <?php
    }
    public function SidebarLayout($param)
    {
    ?>
        <div class="sidebar-wrapper">
            <div class="logo">
                <h5 class="simple-text logo-mini"> Hi, <?php echo $_SESSION["Name"] ?> </h5>
            </div>
            <ul class="nav">
                <li class=" <?php if ($param == 1) {
                                echo 'active';
                            } ?>">
                    <a href="./PatientDashboard.php">
                        <i class="tim-icons icon-chart-pie-36"></i>
                        <h5>Dashboard</h5>
                    </a>
                </li>
                <li class="<?php if ($param == 2) {
                                echo 'active';
                            } ?>">
                    <a href="./DonorInformation.php">
                        <i class="fas fa-info"></i>
                        <h5>Donor Information</h5>
                    </a>
                </li>
                <li class="<?php if ($param == 3) {
                                echo 'active';
                            } ?>">
                    <a href="./UserProfile.php">
                        <i class="tim-icons icon-single-02"></i>
                        <h5>User Profile</h5>
                    </a>
                </li>
            </ul>
        </div>
<?php
    }
}
