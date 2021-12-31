<?php
require_once('PatientLayout.php');

require_once('../index_model.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Donor Information
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
      $PatientNavbar->SidebarLayout(2);
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
        <div class="col-12 col-md-12 col-lg-12">
          <div class="row">
            <form method="POST" name="getData" onsubmit="return getDonors()">
              <div class=" input-group col-12 col-md-12">
                <select style="width: 350px;" class="select" id="Blood" name="Blood">
                  <option value="0">Select Blood Group</option>
                  <option value="Apos">A+</option>
                  <option value="Aneg">A-</option>
                  <option value="Bpos">B+</option>
                  <option value="Bneg">B-</option>
                  <option value="ABpos">AB+</option>
                  <option value="ABneg">AB-</option>
                  <option value="Opos">O+</option>
                  <option value="Oneg">O-</option>
                </select>
                <button class="ml-2 btn btn-outline-secondary text-md-center" type="submit">Search</button>
              </div>

            </form>

          </div>
        </div>
        <script>
          function getDonors() {
            $Selected_Blood_Group = document.getElementById("Blood").value;

            if ($Selected_Blood_Group == 0) {
              alert("Select Blood Group");
              return false;
            }
            return true;
          }
        </script>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> Donors Information</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table tablesorter ">
                    <thead class=" text-primary">
                      <tr>
                        <th>
                          Name
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Address
                        </th>
                        <th>
                          Phone
                        </th>
                        <th>
                          Blood Group
                        </th>
                        <th>
                          Action
                        </th>
                      </tr>
                    <tbody>

                      <?php

                      if (isset($_POST["Blood"])) {
                        $indObj = new IndexModel();
                        $rs = $indObj->getDonorsByBloodGroup($_POST['Blood']);
                        while ($r = mysqli_fetch_assoc($rs)) {
                          $blood;
                          if ($r["Blood"] == "Apos") {
                            $blood = "A +";
                          } else if ($r["Blood"] == "Aneg") {
                            $blood = "A -";
                          } else if ($r["Blood"] == "Bpos") {
                            $blood = "B +";
                          } else if ($r["Blood"] == "Bneg") {
                            $blood = "B -";
                          } else if ($r["Blood"] == "ABpos") {
                            $blood = "AB +";
                          } else if ($r["Blood"] == "ABneg") {
                            $blood = "AB -";
                          } else if ($r["Blood"] == "Opos") {
                            $blood = "O +";
                          } else if ($r["Blood"] == "Oneg") {
                            $blood = "O -";
                          }

                          echo "<tr><td>" . $r["Name"] . "</td><td>" . $r["UserEmail"] . "</td>
                          <td>" . $r["Address"] . "</td><td>" . $r["Phone"] . "</td>
                          <td>" . $blood . "</td>
                          <td> <a href='Insert_Request.php?RequestTo=" . $r["UserID"] . "' class='btn btn-outline-primary'>Request</a> 
                          </td>
                          </tr>";;
                        }
                      }
                      ?>
                    </tbody>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <style>
            table tbody :hover {
              background-color: #666;
              color: #ffffff
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