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
  <div class="container"><h3 style="color: blue; text-align: center;">PATIENTS DATA </h3></div>
    
    <br>
<br>
    <br>
  <div class="table-responsive">
     
     <table id="example1" class="table table-striped table-bordered">
        <thead>
        <th><small>S/N</th>
            <th><small>Patient ID</small></th>
        <th><small>Patient Surname</small></th>
        <th><small>Patient Name</small></th>
         <th><small>Password</small></th>
           <th><small>Operations</small></th>
      </thead>
      <?php 
$sn = 0;
$mysqli = new mysqli('localhost','root','','hospital');
$sql = mysqli_query($mysqli, "SELECT * FROM patient ");
while ($row = mysqli_fetch_assoc($sql)){
  $sn++;
?>
<tbody>
 <tr>
    <td><small><?php echo $sn; ?></small></td>
     <td><small><?php echo $row['patient_id']; ?></small></td>
     <td><small><?php echo $row['surname']; ?></small></td>
      <td><small><?php echo $row['fname']; ?></small></td>
      <td><small><?php echo $row['password']; ?></small></td>
         <td><a href="edit_patient.php?id=<?php echo $row['id'];?>" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="edit!"><i class="fa fa-edit"></i></a>
          <a  onclick="return confirm('are you sure you want to delete')" href="patient_delete.php?id=<?php echo $row['id'];?>" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Delete!"><i class="fa fa-trash"></i></a>
         </td>
      
  </tr>
 <?php } ?>
</tbody>

     </table>

    </div>
  </div>
  <br>
  
    <div class="footer" style="height:50px ;margin-top:180px; text-align: center; color:white; border-top:2px solid white; background-color:#202020;" > <br> &copy Right 2019</div>
  </body>
</html>
</div>