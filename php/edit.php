<?php
$bulk = new MongoDB\Driver\BulkWrite;
$id=$_POST["id"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$mobileno = $_POST["mobileno"];
$email = $_POST["email"];

try{
	$bulk->update(['id' => new MongoDB\BSON\ObjectId($id)],['firstname' => $firstname,'lastname' => $lastname,'mobileno' => $mobileno,'email' =>$email]);
	include 'dbconfig.php';
	$result = $manager ->executeBulkWrite($dbname,$bulk);
	header("Location: ../data.php");
	}
	catch(MongoDB\Driver\Exception\Exception $e) {
	die("Error encountered".$e);
}
?>