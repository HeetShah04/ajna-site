<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Heet">


    <title>Employeer's Data</title>

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
            <a class="nav-link" href="reg.php">Register</a>
          </li>
		    <li class="nav-item active">
            <a class="nav-link" href="data.php">Employeer's Data<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="info.php">Company Info</a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="index.php">Logout</a>
          </li>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>


    <main role="main">
    <?php

try {	
	include 'php/dbconfig.php';
	$query = new MongoDB\Driver\Query([]);
	$rows = $manager->executeQuery($dbname,$query);
	
  echo "

  <table class='table' style='margin-top:50px'>
  <thead>
  <th>Id</td>
	<th>Firstname</th>
	<th>Lastname</th>
	<th>Mobile no</th>
  <th>Email</th>
  <th>Address</th>
  <th>Image</th>
  <th>Action</th>
	</thead>";
	
    foreach ($rows as $rows) {
      echo "<tr>".
      "<td>".$rows->id."</td>".
      "<td>".$rows->firstname."</td>".
      "<td>".$rows->lastname."</td>".
      "<td>".$rows->mobileno."</td>".
      "<td>".$rows->email."</td>".
      "<td>".$rows->address."</td>"

      ?>
      <td><img src="php/<?php echo $rows->image?>"></td>
      <?php
      echo "<td><a class='btn btn-info' href='update.php?id=".$rows->_id.
      "&firstname=".$rows->firstname.
      "&lastname=".$rows->lastname.
      "&mobileno=".$rows->mobileno.
      "&email=".$rows->email.
      "'>Edit</a>".
      " <a class='btn btn-danger'href='php/delete.php?id=".$rows->_id."'>Delete</a></td>".
      "</tr>";
	  }
	  echo "</table>";
  } catch (MongoDB\Driver\Exception\Exception $e) {
	die("Error encountered".$e);
}
?>

    </main>

    <footer class="container" style="bottom:0">
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