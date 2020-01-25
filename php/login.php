<?php
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$dbname = "Demo.administrator";
$username =$_POST['username'];
$password=$_POST['password'];
$query = new MongoDB\Driver\Query([]);
    $rows = $manager->executeQuery($dbname,$query);
    foreach ($rows as $rows) {
        $name=$rows->Name;
        $pass=$rows->Password;

        //echo $name;
       // echo $pass;
        if($username==$name && $password==$pass){
            header("Location: ../home.php");
        }
        else{
            echo "Invalid Credianitals";
        }
    }

?>