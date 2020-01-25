<?php

$bulk = new MongoDB\Driver\BulkWrite;
$manager = new MongoDB\Driver\Manager("mongodb://192.168.0.2:27017");
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$mobileno = $_POST["mobileno"];
$email = $_POST["email"];
$address=$_POST["address"];
$img = $_POST['image'];
 $folderPath = "upload/";

 $image_parts = explode(";base64,", $img);
 $image_type_aux = explode("image/", $image_parts[0]);
 $image_type = $image_type_aux[1];

 $filter = [];
$query = new \MongoDB\Driver\Query($filter);
$cursor = $manager->executeQuery("Ajna.Persons", $query);
error_reporting(0);
foreach ($cursor as $rows) {
	$cnt=$rows;
}

	if ($cnt == null){
		$cnt=1;
	}else{
		$cnt=$cnt->id+1;
	}
	error_reporting(1);
 $image_base64 = base64_decode($image_parts[1]);
  $fileName = $cnt . '.jpeg';
  
    $file = $folderPath . $fileName;
    file_put_contents($file, $image_base64);
  
   // print_r($fileName);


$user = [
	'id'=>$cnt,
	'firstname'=> $firstname,
    'lastname'=> $lastname,
    'mobileno'=>$mobileno,
	'email'=>$email,
	'address'=>$address,
	'image'=>$file
];
try {
	$bulk->insert($user);
	include 'dbconfig.php';
	$result = $manager->executeBulkWrite($dbname,$bulk);
	header("Location:../data.php");
	
} catch (MongoDB\Driver\Exception\Exception $e) {
	die("Error encountered".$e);
}

?>