
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
    <?php include 'users_nav.php'; ?>

<div class="container">
<br>
<br>
 <br>
 <br>
<br>
<br>
 <br>
<br>

<h4 align="center" style="color: blue;"> YOUR APPOINTMENT </h4>
<br>
 <div class="table-responsive">
     
     <table id="example1" class="table table-striped table-bordered">
        <thead>
        <th><small>S/N</th>
            <th><small>patient ID</small></th>
        <th><small>Patient Name</small></th>
         <th><small>Appointment Date</small></th>
         <th><small>Appointment time</th></small>
         
      </thead>
      <?php 
$sn = 0;
$mysqli = new mysqli('localhost','root','','hospital');
session_start();
$adno = $_SESSION['admins'];

$sql = mysqli_query($mysqli, "SELECT * FROM appointment  st INNER JOIN patient pt ON st.patient_id = pt.patient_id WHERE email = '$adno'  ");
while ($row = mysqli_fetch_assoc($sql)){
  $sn++;
?>
<tbody>
 <tr>
    <td><small><?php echo $sn; ?></small></td>
     <td><small><?php echo $row['patient_id']; ?></small></td>
     <td><small><?php echo $row['surname']." ".$row['fname']; ?></small></td>
      <td><small><?php echo $row['appointment_date']; ?></small></td>
      <td><small><?php echo $row['appointment_time']; ?></small></td>
        
      
  </tr>
 <?php } ?>
</tbody>

     </table>

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
<br>
<br>
 <br>
<br>
 <br>
<div class="footer" style="height:50px ;margin-top:30px; text-align: center; color:white; border-top:2px solid white; background-color:#202020;" > <br> &copy Right 2019</div>
</body>
</html>
