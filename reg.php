<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration</title>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/form.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
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
            <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="reg.php">Register</a>
          </li>
		    <li class="nav-item">
            <a class="nav-link" href="data.php">Employeer's Data</a>
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
      </div>
    </nav>





<div class="page-wrapper bg-dark p-t-100 p-b-50">
<div class="wrapper wrapper--w900">
<div class="card card-6">
<div class="card-heading">
<h2>Registration form</h2>
</div>
<div class="card-body">
<form action="php/register.php"method="POST">
<div class="form-row">
    <div class="col-md-6">
                <div id="my_camera"></div>
                <br/>
                <input type=button value="Capture" onClick="take_snapshot()" class="btn btn--blue-2 btn--radius-1" required>
                <input type="hidden" name="image" class="image-tag">
            </div>
            <div class="col-md-6">
                <div id="results">Image Display</div>
            </div>
                        </div> 
<div class="form-row">
<div class="name">First name</div>
<div class="value">
<input class="input--style-6" type="text" name="firstname" required>
</div>
</div>
<div class="form-row">
<div class="name">Last name</div>
<div class="value">
<input class="input--style-6" type="text" name="lastname" required>
</div>
</div>
<div class="form-row">
<div class="name">Mobile number</div>
<div class="value">
<input class="input--style-6" type="tel" name="mobileno" pattern="[0-9]{10}" required>
</div>
</div>
<div class="form-row">
<div class="name">Email address</div>
<div class="value">
<div class="input-group">
<input class="input--style-6" type="email" name="email" placeholder="example@email.com" required>
</div>
</div>
</div>
<div class="form-row">
<div class="name">Address</div>
<div class="value">
<div class="input-group">
<textarea class="input--style-6" type="text" name="address"></textarea>
</div>
</div>
</div>
<div class="card-footer">
<input type="submit" value="REGISTER" class="btn btn--blue-2 btn--radius-2">
</div>
</div>
</div>
</div>
</form>
<div class="card-footer">

    <footer class="container">
      <p>&copy; Project Ajna 2019-2020</p>
    </footer>
<!-- Jquery JS-->
<script src="js/jquery.min.js"></script>
<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
    Webcam.set({
        width: 300,
        height: 200,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>