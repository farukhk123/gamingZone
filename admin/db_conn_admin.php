<?php

$sname= "localhost";
$unmae= "root";
$password = "123456";
$db_name = "project4data";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
// echo "You have Sucessfulliy login";

if (!$conn) {
	echo "Connection failed!";
	// echo "You have enter incorrect Username and Password login";

}
?>