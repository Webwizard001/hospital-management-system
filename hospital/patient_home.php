
  <!DOCTYPE html>
<html>
<head>
<head>
  <title>home page</title>
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
    <?php include 'users_nav.php'; ?>

<br>
<br>
<br>
<br>
<br>
<?php 
session_start();
$mysqli = new mysqli('localhost','root','','hospital');
$adno = $_SESSION['admins']; 
$sql = mysqli_query($mysqli, "SELECT * FROM patient WHERE email ='$adno' ");
$row = mysqli_fetch_assoc($sql);
?>
<div class="container"><h3 style="color: blue">welcome <?php echo $row['fname']." ".$row['surname']; ?>  </h3>
	<hr>
	<br>
	<h4>how can we be of help today</h4>
	<hr>
	<br>
  <div class="row">
<div class="col-sm-12">
          <div class="col-sm-3 "><a href="appointment.php"><img src="img/agendas.png" class="thumbnail" width="100" height="100"> <SMALL>APPOINTMENTS</SMALL></a></div>
            
            <div class="col-sm-3 "><a href="medication.php"><img src="img/medicine.png" class="thumbnail" width="100" height="100"><small>MEDICATION</small></a> </div>
      
      <div class="col-sm-3 "><a href="call_doctor.php"><img src="img/doctor (1).png" class="thumbnail" width="100" height="100"> <small>CALL A DOCTOR</small></a></div>
    
      <div class="col-sm-3 "><a href="#"><img src="img/user.png" class="thumbnail" width="100" height="100"><small>PROFILE</small></a></div>
</div>
  </div>
 
</div>

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
