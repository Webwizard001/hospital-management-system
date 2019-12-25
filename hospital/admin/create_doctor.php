
  <!DOCTYPE html>
<html>
<head>
<head>
  <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="fontawesome/flaticon/font/flaticon.css">
 <link rel="stylesheet"  href="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
<!--  <script type="text/javascript" src="../css/jquery.min.js" ></script> -->
<script type="text/javascript" src="css/bootstrap.min.js" ></script>
  <link rel="shortcut icon" type="image/png" href="23.png">
  </head>

<body>
	<?php  include 'admin_nav.php'; ?>
<div class="container">

 <br>
 <br>
  <br>

 <br>
 <br>
  <br>
  <h4 align="center" style="color:blue;">CREATE DOCTOR</h4>
 <br>
<form action="create_doctor.php" method="POST" autocomplete="none">
    	<?php
$mysqli = new mysqli('localhost','root','','hospital');

    	 if(isset($_POST['submit'])){

  //check password
    if($_POST['password'] == $_POST['confirm']){
   $doctor_id = $mysqli->real_escape_string($_POST['doctor_id']);
$surname = $mysqli->real_escape_string($_POST['surname']);
$name = $mysqli->real_escape_string($_POST['name']);
$email = $mysqli->real_escape_string($_POST['email']);
$password = $mysqli->real_escape_string($_POST['password']);

if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
   /* echo "<script>alert('only alphabet required')</script>";*/
    echo '<div class="container alert alert-danger"> surname requires only alphabet  </div>';
}elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) {
/*  echo "<script>alert('only alphabet required')</script>";
*/   echo '<div class="container alert alert-danger"> first name requires only alphabet</div>';
}else{
  $sql = "INSERT INTO `doctor`(`doctor_id`, `name`, `surname`, `email`, `password`)  VALUES ('$doctor_id','$name','$surname','$email','$password')"; 
if ($mysqli->query($sql) == true) {
  echo '<div class="container alert alert-danger"> Doctor added successfully </div>';

}else{
  echo '<div class="container alert alert-danger"> Fail to create doctor </div>';
}
}
}else{
  /*  echo "<script>alert('password didnot match')</script>";*/
  echo '<div class="container alert alert-danger"> Password did not match</div>';
}
}
     ?>
    	 <div class="col-lg-6">
    Doctor id 
        <input type="text" name="doctor_id"  class="form-control"  autocomplete="none" >
      </div>
      <div class="col-lg-6">
        Firstname
        <input type="text" name="name" class="form-control" placeholder="enter Firstname" minlength="5" maxlength="20" autocomplete="none" required>
      </div>
       <div class="col-lg-6">
        Surname
        <input type="text" name="surname" class="form-control" placeholder="enter Surname" minlength="5" maxlength="20" autocomplete="none" required>
      </div>
       <div class="col-lg-6">
        Email
        <input type="email" name="email" class="form-control" placeholder="enter email" minlength="10" maxlength="100" autocomplete="none" required>
      </div>
       <div class="col-lg-6">
        Password
        <input type="password" name="password" class="form-control" minlength="6" placeholder="enter password" autocomplete="none" required>
      </div>
       <div class="col-lg-6">
        Confirm Password
        <input type="password" name="confirm" required class="form-control" minlength="6" placeholder="enter password" autocomplete="none" required>
      </div>
       <div class="col-lg-6">
       <br>
      <button class="btn btn-primary" name="submit" value="submit"><i class="fa fa-plus"> ADD DOCTOR</i></button>
      </div>
     
    </form>

</div>

 <br>
 <br>
  <br>

 <br>
 <br>
  <br>

 <br>
 
 <br>
 <br>
<div class="footer" style="height:50px ;margin-top:30px; text-align: center; color:white; border-top:2px solid white; background-color:#202020;" > <br> &copy Right 2019</div>
</body>
</html>
