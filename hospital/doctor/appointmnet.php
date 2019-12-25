<!DOCTYPE html>
<html>

<head>
    <title></title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/w3.css">
       <link rel="stylesheet" href="css/css.css">
       <link rel="stylesheet"  href="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
</head>
<body>
<?php  include 'doc_nav.php'; ?>

<div class="container">

 <br>
  <br>
 <br>
  <br>
  <br>
 <br>
  <br>
  <br>

 <h4 align="center" style="color:blue;">SET APPOINTMENT</h4>
 <br>
 <form action="appointmnet.php" method="post">
 	    	<?php
$mysqli = new mysqli('localhost','root','','hospital');

    	 if(isset($_POST['submit'])){
   $patient_id = $mysqli->real_escape_string($_POST['patient_id']);
$appointment_date = $mysqli->real_escape_string($_POST['appointment_date']);
$appointment_time = $mysqli->real_escape_string($_POST['appointment_time']);



  $sql = "INSERT INTO `appointment`(`patient_id`, `appointment_date`, `appointment_time`)  VALUES ('$patient_id','$appointment_date','$appointment_time')"; 

if ($mysqli->query($sql) == true) {
  echo '<div class="container alert alert-danger">appointmnet made successfully </div>';

}else{
  echo '<div class="container alert alert-danger"> Fail to set appointmnet </div>';
}
}
     ?>
 	 <div class="col-lg-6">
        Patient ID
        <input type="text" name="patient_id" class="form-control" placeholder="enter patient Id" minlength="7" maxlength="7" autocomplete="none" required>
      </div>
       <div class="col-lg-6">
        Appointment Date
        <input type="date" name="appointment_date" class="form-control"  minlength="5" maxlength="20" autocomplete="none" required>
      </div>
       <div class="col-lg-6">
        Appointment Time
        <input type="time" name="appointment_time" class="form-control" placeholder="enter Firstname" minlength="5" maxlength="20" autocomplete="none" required>
      </div>
       <div class="col-lg-6" style="margin-top:20px">
      <button class="btn btn-primary" name="submit" value="submit"><i class="fa fa-plus"></i> SET APPOINTMENT</button>
      </div>
 </form>
</div>
</div>
 <br>
  <br>
 <br>
  <br>
  <br>
 
<div class="footer" style="height:50px ;margin-top:180px; text-align: center; color:white; border-top:2px solid white; background-color:#202020;" > <br> &copy Right 2019</div>
</body>
</html>