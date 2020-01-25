<?php
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$nam="dataset";
$Demo = "Demo.".$nam;
$filter = [];
$query = new \MongoDB\Driver\Query($filter);
$cursor = $manager->executeQuery($Demo, $query);
foreach ($cursor as $rows) {
    $cnt=$rows;
    }
error_reporting(0);

if ($cnt == null){
    
}else{
    echo "else";
}

error_reporting(1);

?>