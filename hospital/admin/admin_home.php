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


<div class="w3-container"> 
<?php 
session_start();
$mysqli = new mysqli('localhost','root','','hospital');
$adno = $_SESSION['admins']; 
$sql = mysqli_query($mysqli, "SELECT * FROM admin WHERE admin_id ='$adno' ");
$row = mysqli_fetch_assoc($sql);
?>
<br>
<br>
<br>
<br>
<br>
<div class="container"><h3 style="color: blue">welcome <?php echo $row['name']." ".$row['surname']; ?>  </h3>
  <hr>
  <br>
  <hr>
  <br>
  <div class="row">
<div class="col-sm-12">
          <div class="col-sm-3 "><a href="create_doctor.php"><img src="img/create.png" class="thumbnail" width="100" height="100"> <SMALL>CREATE DOCTOR</SMALL></a></div>
      <div class="col-sm-3 "><a href="view_doctor.php"><img src="img/visibility.png" class="thumbnail" width="100" height="100"> <small>VIEW DOCTOR</small></a></div>

</div>
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
<br>
<div class="footer" style="height:50px ;margin-top:30px; text-align: center; color:white; border-top:2px solid white; background-color:#202020;" > <br> &copy Right 2019</div>
</body>
</head>
</html>

  