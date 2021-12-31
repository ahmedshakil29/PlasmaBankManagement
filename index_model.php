<?php
class IndexModel
{
	public $host;
	public $user;
	public $pass;
	public $dbname;
	public $con;
	public function IndexModel()
	{
		$this->host = "localhost:3306";
		$this->user = "root";
		$this->pass = "";
		$this->dbname = "plasma";
		$this->con =  new mysqli($this->host, $this->user, $this->pass, $this->dbname);
	}
	public function check_login($UserName, $Password)
	{
		$q = "SELECT * FROM users WHERE UserName='" . $UserName . "' and Password='" . $Password . "' ";
		$r = mysqli_query($this->con, $q);
		if ($r == false) {
			return 0;
		} else {
			if (mysqli_num_rows($r) == 0) {
				return 0;
			}
			return $r;
		}
	}

	public function insert_user($UserName, $UserEmail, $Password, $Name, $Blood, $Phone, $Address)
	{
		// echo " $UserName, $UserEmail, $Password, $Name, $Blood, $Phone, $Address";
		$q = "INSERT INTO `users` ( `UserName`, `UserEmail`, `Password`, `Name`, `Blood`, `Phone`, `Address` ) VALUES ('" . $UserName . "','" . $UserEmail . "','" . $Password . "','" . $Name . " ','" . $Blood . "','" . $Phone . "','" . $Address .  "')";
		if (mysqli_query($this->con, $q)) {
			return 1;
		} else {
			return 0;
		}
	}


	public function getUserInfoByUserName($UserName)
	{
		// echo " $UserName";

		$q = "SELECT * FROM users  where UserName= '" . $UserName . "'";

		$r = mysqli_query($this->con, $q);
		if ($r == false) {
			return 0;
		} else {
			return $r;
		}
	}

	public function update_user($UserName, $UserEmail, $Password, $Name, $Blood, $Phone, $Address)
	{
		$q = "UPDATE `users` SET `UserName`='" . $UserName . "', `UserEmail`='" . $UserEmail . "', `Password`= '" . $Password . "', `Name`='" . $Name . "', `Blood`='" . $Blood . "', `Phone`='" . $Phone . "', `Name`='" . $Name . "', `Address`='" . $Address .  "' WHERE UserName= '" . $UserName . "'";
		if (mysqli_query($this->con, $q)) {
			return 1;
		} else {
			echo " $UserName";

			return 0;
		}
	}

	public function getDonorsByBloodGroup($BloodGroup)
	{
		$q = "SELECT * FROM users WHERE Blood='" . $BloodGroup . "' and UserID != " . $_SESSION["UserID"];
		$r = mysqli_query($this->con, $q);
		if ($r == false) {
			return 0;
		} else {
			return $r;
		}
	}
}
