<!DOCTYPE html>
<html lang="en">
<head>

<title>Update</title>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Project</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
      <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reg.php">Register<span class="sr-only">(current)</span></a>
          </li>
		    <li class="nav-item">
            <a class="nav-link active" href="data.php">Employeer's Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="info.php">Company Info</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="index.php">Logout</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>


<div class="page-wrapper bg-dark p-t-100 p-b-50">
<div class="wrapper wrapper--w900">
<div class="card card-6">
<div class="card-heading">
<h2>Registration form</h2>
</div>
<div class="card-body">
<form action=""method="GET">
<div class="form-row">
<div class="name">First name</div>
<div class="value">
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
<input class="input--style-6" type="text" name="firstname" value="<?php echo $_GET['firstname']; ?>">
</div>
</div>
<div class="form-row">
<div class="name">Last name</div>
<div class="value">
<input class="input--style-6" type="text" name="lastname" value="<?php echo $_GET['lastname']; ?>">
</div>
</div>
<div class="form-row">
<div class="name">Mobile number</div>
<div class="value">
<input class="input--style-6" type="text" name="mobileno" value="<?php echo $_GET['mobileno']; ?>">
</div>
</div>
<div class="form-row">
<div class="name">Email address</div>
<div class="value">
<div class="input-group">
<input class="input--style-6" type="email" name="email" placeholder="example@email.com" value="<?php echo $_GET['email']; ?>">
</div>
</div>
</div>
<div class="form-row">
<div class="name">Upload Picture</div>
<div class="value">
<div class="input-group js-input-file">
<input class="input-file" type="file" name="image" id="file">
<label class="label--file" for="file">Choose file</label>
<span class="input-file__info">No file chosen</span>
</div>
<div class="label--desc">Upload your Image. Max file size 5 MB</div>
</div>
</div>
<div class="card-footer">
<input type="submit" name="submit" value="Update" class="btn btn--radius-2 btn--blue-2">
</form>
<?php
$bulk = new MongoDB\Driver\BulkWrite;
$id=$_GET["id"];
$firstname = $_GET["firstname"];
$lastname = $_GET["lastname"];
$mobileno = $_GET["mobileno"];
$email = $_GET["email"];
try{
	$bulk->update(['_id' => new MongoDB\BSON\ObjectId($id)],['firstname' => $firstname,'lastname' => $lastname,'mobileno' => $mobileno,'email' =>$email]);
  $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
  $result = $manager ->executeBulkWrite("Demo.test",$bulk);
  if($result){
    ("Location: data.php");
  }
  else{
    echo "Error";
  }
	
	}
	catch(MongoDB\Driver\Exception\Exception $e) {
	die("Error encountered".$e);
}
?>
</div>
</div>
</div>
</div>
</div>
<div class="card-footer">

    <footer class="container">
      <p>&copy; Project Ajna 2019-2020</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>