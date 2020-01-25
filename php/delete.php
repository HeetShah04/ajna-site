<?php
$bulk = new MongoDB\Driver\BulkWrite;

$id = $_GET["id"];

try{
	$bulk->delete(['_id' => new MongoDB\BSON\ObjectId($id)]);
	include 'dbconfig.php';
	$result = $manager->executeBulkWrite($dbname,$bulk);
	header("Location:../data.php");
}
catch(MongoDB\Driver\Exception\Exception $e){
	die("Error Encountered".$e);
}

?>