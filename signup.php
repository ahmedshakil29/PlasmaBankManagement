<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo '<script>alert("Sorry, Something went wrong. Try again.")</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>signup</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #999;
            background: #141e30;
            font-family: 'Roboto', sans-serif;
        }

        .form-control {
            border-color: green;
            min-height: 41px;
            box-shadow: none !important;
        }

        .form-control:focus {
            border-color: #5cd3b4;
        }

        .form-control,
        .btn {
            border-radius: 3px;
        }

        .signup-form {
            width: 500px;
            margin: 0 auto;
            padding: 30px 0;
        }

        .signup-form h2 {
            color: #333;
            margin: 0 0 30px 0;
            display: inline-block;
            padding: 0 30px 10px 0;
            border-bottom: 3px solid #5cd3b4;
        }

        .signup-form form {
            color: #999;
            border-radius: 4px;
            margin-bottom: 15px;
            background: whitesmoke;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-sizing: border-box;
            padding: 30px;
        }

        .signup-form .form-group row {
            margin-bottom: 20px;
        }

        .signup-form label {
            font-weight: normal;
            font-size: 14px;
            line-height: 2;
        }

        .signup-form input[type="checkbox"] {
            position: relative;
            top: 1px;
        }

        .signup-form .btn {
            font-size: 16px;
            font-weight: bold;
            background: #5cd3b4;
            border: none;
            margin-top: 20px;
            min-width: 140px;
        }

        .signup-form .btn:hover,
        .signup-form .btn:focus {
            background: #41cba9;
            outline: none !important;
        }

        .signup-form a {
            color: #5cd3b4;
            text-decoration: underline;
        }

        .signup-form a:hover {
            text-decoration: none;
        }

        .signup-form form a {
            color: #5cd3b4;
            text-decoration: none;
        }

        .signup-form form a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="signup-form">
        <form action="insert_user.php" method="post" class="form-horizontal" name="datavalid" onsubmit="return validateForm()">
            <div class="row">
                <div class="col-8 offset-4">
                    <h2>Sign Up</h2>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"> <b>User Name</b> </label>
                <div class="col-8">
                    <input type="text" class="form-control" name="UserName" required="required" autofocus="">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"> <b> Email Address </b> </label>
                <div class="col-8">
                    <input type="email" class="form-control" name="UserEmail" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"> <b> Password</b> </label>
                <div class="col-8">
                    <input type="password" class="form-control" name="Password" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Confirm Password</b></label>
                <div class="col-8">
                    <input type="password" class="form-control" name="ConfirmPassword" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Name</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="Name" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b>Blood Group</b></label>
                <div class="col-8">
                    <select class="form-control" id="Blood" name="Blood" required>
                        <option value="">Select your blood group</option>
                        <option value="A+"> A+</option>
                        <option value="A-"> A-</option>
                        <option value="B+"> B+</option>
                        <option value="B-"> B-</option>
                        <option value="AB+"> AB+</option>
                        <option value="AB-"> AB-</option>
                        <option value=" O+"> O+</option>
                        <option value="O-"> O-</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Phone Number</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="Phone" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-form-label col-4"><b> Address</b></label>
                <div class="col-8">
                    <input type="text" class="form-control" name="Address" required="required">
                </div>
            </div>
            <!-- <div class="form-group row">
                <label class="col-form-label col-4"><b> Profile Picture</b></label>
                <div class="col-8">
                    <input type="file" name="Picture" id="Picture">

                </div>
            </div> -->
            <div class="form-group row">
                <div class="col-8 offset-4">
                    <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
                </div>
            </div>
        </form>
        <div class="text-center" style="color: yellow;">Already have an account? <a style="color: green;" href="login.php">Login here</a></div>
    </div>


    <script>
        function validateForm() {
            var Password = document.forms["datavalid"]["Password"].value;
            var ConfirmPassword = document.forms["datavalid"]["ConfirmPassword"].value;

            if (Password != ConfirmPassword) {
                alert("Password do not match");
                return false;
            }
        }
    </script>
</body>

</html>