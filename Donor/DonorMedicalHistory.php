<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Donor Medical History
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
          <h5 class="simple-text logo-mini"> Hi, Ullas</h5>
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
          <li class="active">
            <a href="./DonorMedicalHistory.php">
              <i class="fas fa-history"></i>
              <h5>Medical History</h5>
            </a>
          </li>
          <li>
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
            <h3 class="navbar-brand">Donor Medical Information</h3>
          </div>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              </li>
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
            </ul>
          </div>
        </div>
      </nav>
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Donor Medical Information</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>DONOR NAME</label>
                        <input type="text" class="form-control" value="" placeholder="Donor Name">
                      </div>
                    </div>
                    <div class="col-md-5 px-md-1">
                      <div class="form-group">
                        <label>DONOR ID</label>
                        <input type="text" class="form-control" value="" placeholder="donor ID">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>DONOR AGE</label>
                        <input type="text" class="form-control" value="" placeholder=" Donor Age">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label> DONOR RCB COUNT </label>
                        <input type="text" class="form-control" placeholder="Donor RCB Count" value="">
                      </div>
                    </div>
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label> DONOR HEIGHT </label>
                        <input type="text" class="form-control" placeholder="Donor Height" value="">
                      </div>
                    </div>

                    <div class="col-md-3 pl-md-1">
                      <div class="form-group">
                        <label> DIABETIC </label>
                        <div class="col-md-12 pl-md-1">
                          <select class="select">
                            <option value="1"> NO</option>
                            <option value="2"> YES</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 pl-md-1">
                      <div class="form-group">
                        <label> ALCOHOL </label>
                        <div class="col-md-12 pl-md-1">
                          <select class="select">
                            <option value="1"> NO</option>
                            <option value="2"> YES</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 pl-md-1">
                      <div class="form-group">
                        <label> COVID </label>
                        <div class="col-md-12 pl-md-1">
                          <select class="select">
                            <option value="1"> NO</option>
                            <option value="2"> YES</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 pl-md-1">
                      <div class="form-group">
                        <label> DONAR BLOOD </label>
                        <div class="col-md-12 pl-md-1">
                          <select class="select">
                            <option value="1"> Present</option>
                            <option value="2"> NO</option>
                          </select>
                        </div>
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
                  <h2> <span class="highlight">Patient</span> Message....</h2>
                  <textarea id="w3review" name="w3review" rows="4" cols="50">   we need Blood</textarea>
                </div>
                </p>
                <input type="text" class="form-control" placeholder="Type Here" value="">
                <div class="card-footer">
                  <button type="submit" class="btn btn-fill btn-primary">Send</button>
                </div>

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