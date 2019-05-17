<?php

$servername = "localhost";
$username = "jona";
$password = "";
$dbname = "child";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn ->connect_error){
	$msg = $conn ->connect_error;
}

?>