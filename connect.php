<?php
 ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
// require '/opt/lampp/htdocs/project4/forgot_pass.php';
require 'Pdo.php';
$test = new DB;

// registraon
// ini_set("display_errors", "1");
// error_reporting(E_ALL);

	$Fname = $_POST['Fname'];
	$Uname = $_POST['Uname'];
	$Email = $_POST['Email']; 
	$Pnumber = $_POST['Pnumber'];
	$hash = password_hash($_POST['Pass'],PASSWORD_DEFAULT);
	/*$Password = $_POST['Pass'];*/
	$gender = $_POST['gender'];
	// $verificationCode = $this->code;
$table = 'kk';
$data= array("Fname"=>"$Fname","Uname"=>"$Uname","Email"=>"$Email","Pnumber"=>"$Pnumber","Pass"=>"$hash","gender"=>"$gender");
$test->insert($table,$data);
header("Location:login.php");
	?>
