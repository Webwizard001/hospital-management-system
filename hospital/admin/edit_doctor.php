<?php
  
  session_start();
  
 /* if(!isset($_SESSION['adminss'])) {
    
    header("location: index.php");
    
  }*/
  
?>
<?php
 
if(isset($_POST['submit'])){
  $doctor_id = $_POST['doctor_id'];
  $surname = $_POST['surname'];
  $name = $_POST['name'];
  $password = $_POST['password'];
  $id = $_POST['id'];

 $mysqli = new mysqli('localhost','root','','hospital');
  $studup = mysqli_query($mysqli,"UPDATE doctor SET doctor_id = '$doctor_id', surname = '$surname', name = '$name', password = '$password'  Where id = '$id'");
  if($studup){
     echo "<script>window.location='view_doctor.php'</script>";
    }
    else{
   echo '<div class="container alert alert-danger"> update not made</div>';
      }
    }
?>


<?php
$id = $_GET['id'];
$mysqli = new mysqli('localhost','root','','hospital');
$rcq = mysqli_query($mysqli, "select * From doctor Where id = '$id'");
$rw = mysqli_fetch_array($rcq);
$sid = $rw['id'];
$doctor_id = $rw['doctor_id'];
  $surname = $rw['surname'];
  $name = $rw['name'];
 $password = $rw['password'];
  $id = $rw['id'];

 
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
       <link rel="stylesheet" href="css/w3.css">
       <link rel="stylesheet" href="css/css.css">
       <link rel="stylesheet"  href="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
</head>
<body>   <?php include 'admin_nav.php'; ?>

<div class="container">

 <br>
 <br>
  <br>
 <br>

  <div class="table-responsive">

<br>
<br>
<h4 align="center">EDIT PATIENT DETAILS</h4>
<form action="edit_doctor.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
 

        <?php if(isset($_GET['msg'])) echo $_GET['msg'];?>
      
     <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ;?>" readonly />

        <div class="col-lg-6">
          Doctor ID
     <input type="text" class="form-control" name="doctor_id" id="staff_id" value="<?php echo $doctor_id ;?>" />
   </div>
     
        <div class="col-lg-6">
          Name:
      <input type="text" name="name" id="name" class="form-control"  value="<?php echo $name ;?>"/>
    </div>
    
    
        <div class="col-lg-6">
            Surname:
      <input type="text" name="surname" id="surname" class="form-control"  value="<?php echo $surname ;?>"/>
    </div>
     <div class="col-lg-6">
            Password:
      <input type="text" name="password" id="surname" class="form-control"  value="<?php echo $password ;?>"/>
    </div>

   <div class="col-lg-6" style="margin-top:20px">
    <button class="btn btn-primary" name="submit" value="submit">Update</button>
      <button class="btn btn-danger" name="reset" value="reset">Reset</button>
    </div> 
  

</form>

</div>
</div>
<br>
<div class="footer" style="height:50px ;margin-top:290px; text-align: center; color:white; border-top:2px solid white; background-color:#202020;" ><br> &copy Right 2019</div>
</body>

</html>
