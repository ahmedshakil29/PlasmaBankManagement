<?php
require_once('index_model.php');
session_start();
$indObj = new IndexModel();
$rs = $indObj->check_login($_POST['UserName'], $_POST['Password']);
if ($rs == 0) {
	echo '<script>alert("Wrong  UserName! Or Password! ")</script>';

	header('Location: login.php');
} else {
	while ($d = mysqli_fetch_assoc($rs)) {
		$_SESSION["UserName"] = $d['UserName'];
		// $_SESSION["Password"] = $d['Password'];

		// $_SESSION["UserID"] = $d['UserID'];
		// $_SESSION["Name"] = $d['Name'];
		header('Location: CheekUser.php');
	}
}
