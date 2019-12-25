<!DOCTYPE html>
<html>
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
 <br>
<br>

<h4 align="center" style="color: blue;">VIEW DOCTOR</h4>
<br>
 <div class="table-responsive">
     
     <table id="example1" class="table table-striped table-bordered">
        <thead>
        <th><small>S/N</th>
            <th><small>Doctorr ID</small></th>
        <th><small>Patient Surname</small></th>
        <th><small>Patient Name</small></th>
         <th><small>Password</small></th>
           <th><small>Operations</small></th>
      </thead>
      <?php 
$sn = 0;
$mysqli = new mysqli('localhost','root','','hospital');
$sql = mysqli_query($mysqli, "SELECT * FROM doctor ");
while ($row = mysqli_fetch_assoc($sql)){
  $sn++;
?>
<tbody>
 <tr>
    <td><small><?php echo $sn; ?></small></td>
     <td><small><?php echo $row['doctor_id']; ?></small></td>
     <td><small><?php echo $row['surname']; ?></small></td>
      <td><small><?php echo $row['name']; ?></small></td>
      <td><small><?php echo $row['password']; ?></small></td>
         <td><a href="edit_doctor.php?id=<?php echo $row['id'];?>" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="edit!"><i class="fa fa-edit"></i></a>
          <a  onclick="return confirm('are you sure you want to delete')" href="doctor_delete.php?id=<?php echo $row['id'];?>" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Delete!"><i class="fa fa-trash"></i></a>
         </td>
      
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
<div class="footer" style="height:50px ;margin-top:30px; text-align: center; color:white; border-top:2px solid white; background-color:#202020;" > <br> &copy Right 2019</div>
</body>
</html>