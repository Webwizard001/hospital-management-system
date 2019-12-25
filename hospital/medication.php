
  <!DOCTYPE html>
<html>
<head>
<head>
  <title>medication page</title>
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
    <?php session_start(); include 'users_nav.php'; ?>

<br>
<br>
<br>

<div class="container">
<br>
<br>
 <br>
<br>

<h4 align="center" style="color: blue;"> YOUR MEDICATION </h4>
<br>
 <div class="table-responsive">
     
     <table id="example1" class="table table-striped table-bordered">
        <thead>
        <th><small>S/N</th>
            <th><small>Category</small></th>
        <th><small>Drug Name</small></th>
         <th><small>Drug Quantity</small></th>
         <th><small>Drug Prescription</th></small>
          <th><small>Drug Days</th></small>
      </thead>
      <?php 
$sn = 0;
$mysqli = new mysqli('localhost','root','','hospital');
$adno = $_SESSION['admins'];

$sql = mysqli_query($mysqli, "SELECT * FROM prescription  st INNER JOIN patient pt ON st.patient_id = pt.patient_id WHERE email = '$adno'  ");
while ($row = mysqli_fetch_assoc($sql)){
  $sn++;
?>
<tbody>
 <tr>
    <td><small><?php echo $sn; ?></small></td>
     <td><small><?php echo $row['drug_categories'].",".$row['drug_categories1'].",".$row['drug_categories2']; ?></small></td>
     <td><small><?php echo $row['drug_name'].",".$row['drug_name1'].",".$row['drug_name2']; ?></small></td>
      <td><small><?php echo $row['drug_quantity'].",".$row['drug_quantity1'].",".$row['drug_quantity2']; ?></small></td>
      <td><small><?php echo $row['drug_prescription'].",".$row['drug_prescription1'].",".$row['drug_prescription2']; ?></small></td>
         <td><small><?php echo $row['drug_days'].",".$row['drug_days1'].",".$row['drug_days2']; ?></small></td> 
      
  </tr>
 <?php } ?>
</tbody>

     </table>
<br>
<br>
<hr>
<h3 align="center" style="color: blue;">INJECTION</h3>

     <table id="example1" class="table table-striped table-bordered">
        <thead>
        <th><small>S/N</th>
            
        <th><small>Injection Name</small></th>
         <th><small>Injection Dosage</small></th>
         <th><small>Injection Start</th></small>
          <th><small>Injection Continue</th></small>
          <th><small>Injection days</th></small>
      </thead>
      <?php 
$sn = 0;
$mysqli = new mysqli('localhost','root','','hospital');
$adno = $_SESSION['admins'];

$sql = mysqli_query($mysqli, "SELECT * FROM prescription  st INNER JOIN patient pt ON st.patient_id = pt.patient_id WHERE email = '$adno'  ");
while ($row = mysqli_fetch_assoc($sql)){
  $sn++;
?>
<tbody>
      
      
      
      
 <tr>
    <td><small><?php echo $sn; ?></small></td>
     <td><small><?php echo $row['injection_name'].",".$row['injection_name1'].",".$row['injection_name2']; ?></small></td>
     <td><small><?php echo $row['injection_dosage'].",".$row['injection_dosage1'].",".$row['injection_dosage2']; ?></small></td>
      <td><small><?php echo $row['injection_start'].",".$row['injection_start1'].",".$row['injection_start2']; ?></small></td>
      <td><small><?php echo $row['injection_continue'].",".$row['injection_continue1'].",".$row['injection_continue2']; ?></small></td>
         <td><small><?php echo $row['injection_days'].",".$row['injection_days1'].",".$row['injection_days2']; ?></small></td> 
      
  </tr>
 <?php } ?>
</tbody>

     </table>

    </div>
</div>
</div>
	<b>
	
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
