<?php 
header("Location: kindex.php");
require 'config.php';
$_SESSION = [];
session_unset();
session_destroy();

?> 