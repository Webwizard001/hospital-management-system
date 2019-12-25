<?php
  
  session_start();
  
 /* if(!isset($_SESSION['adminss'])) {
    
    header("location: index.php");
    
  }*/
  
?>
<?php
 
if(isset($_POST['submit'])){
  $patient_id = $_POST['patient_id'];
  $surname = $_POST['surname'];
  $fname = $_POST['fname'];
  $password = $_POST['password'];
  $id = $_POST['id'];

 $mysqli = new mysqli('localhost','root','','hospital');
  $studup = mysqli_query($mysqli,"UPDATE patient SET patient_id = '$patient_id', surname = '$surname', fname = '$fname', password = '$password'  Where id = '$id'");
  if($studup){
     echo "<script>window.location='view_patient.php'</script>";
    }
    else{
   echo '<div class="container alert alert-danger"> update not made</div>';
      }
    }
?>


<?php
$id = $_GET['id'];
$mysqli = new mysqli('localhost','root','','hospital');
$rcq = mysqli_query($mysqli, "select * From patient Where id = '$id'");
$rw = mysqli_fetch_array($rcq);
$sid = $rw['id'];
$patient_id = $rw['patient_id'];
  $surname = $rw['surname'];
  $fname = $rw['fname'];
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
<body>   <?php include 'doc_nav.php'; ?>

<div class="container">
<br>

 <br>
 <br>
  <br>
 <br>

  <div class="table-responsive">

<br>
<br>
<div ><h3 style="color: blue; text-align: center;">EDIT PATIENT  </h3></div>
<br>
<form action="edit_patient.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
 

        <?php if(isset($_GET['msg'])) echo $_GET['msg'];?>
      
     <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ;?>" readonly />

        <div class="col-lg-6">
          Patient ID
     <input type="text" class="form-control" name="patient_id" id="staff_id" value="<?php echo $patient_id ;?>" />
   </div>
     
        <div class="col-lg-6">
          Name:
      <input type="text" name="fname" id="name" class="form-control"  value="<?php echo $fname ;?>"/>
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

<div class="footer" style="height:50px ;margin-top:260px; text-align: center; color:white; border-top:2px solid white; background-color:#202020;" > <br> &copy Right 2019</div>

</body>

</html>
