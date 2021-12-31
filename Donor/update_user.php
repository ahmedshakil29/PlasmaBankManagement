<?php
require_once('../index_model.php');
$UserName = $_POST['UserName'];
$UserEmail = $_POST['UserEmail'];
$Password = $_POST['Password'];
$Name = $_POST['Name'];
$Blood = $_POST['Blood'];
$Phone = $_POST['Phone'];
$Address = $_POST['Address'];

$indObj = new IndexModel();
$rs = $indObj->update_user($UserName, $UserEmail, $Password, $Name, $Blood, $Phone, $Address);
if ($rs == 1) {
	echo '<script>alert("Update Successfully")</script>';
	header('Location: UserProfile.php');
} else {
	echo '<script >alert("Signup UNSuccessfully")</script>';
	header('Location: UserProfile.php');
}
