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

<div class="container" style="margin-top:180px">

<div class="container"><h3 style="color: blue; text-align: center;">ADD PATIENT   </h3>
  <br>
   <form action="create_patient.php" method="POST" autocomplete="none">
      <?php
$mysqli = new mysqli('localhost','root','','hospital');

       if(isset($_POST['submit'])){

  //check password
    if($_POST['password'] == $_POST['confirm']){
   $patient_id = $mysqli->real_escape_string($_POST['patient_id']);
$surname = $mysqli->real_escape_string($_POST['surname']);
$fname = $mysqli->real_escape_string($_POST['fname']);
$email = $mysqli->real_escape_string($_POST['email']);
$password = $mysqli->real_escape_string($_POST['password']);

if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
   /* echo "<script>alert('only alphabet required')</script>";*/
    echo '<div class="container alert alert-danger"> surname requires only alphabet  </div>';
}elseif (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
/*  echo "<script>alert('only alphabet required')</script>";
*/   echo '<div class="container alert alert-danger"> first name requires only alphabet</div>';
}else{
  $sql = "INSERT INTO `patient`(`patient_id`, `fname`, `surname`, `email`, `password`)  VALUES ('$patient_id','$fname','$surname','$email','$password')"; 
if ($mysqli->query($sql) == true) {
  echo '<div class="container alert alert-danger"> patient added successfully </div>';

}else{
  echo "<script>alert('fail to upload')</script>";
}
}
}else{
  /*  echo "<script>alert('password didnot match')</script>";*/
  echo '<div class="container alert alert-danger"> Password did not match</div>';
}
}
     ?>
       <div class="col-lg-6">
             <?php  function generateRandomString($length = 2){
  return substr(str_shuffle(str_repeat($x='123456789', ceil($length/strlen($x)))),3,$length);
}?>
        Patient id 
        <input type="text" name="patient_id" value="<?php echo "HMS".date('y').generateRandomString();?>" class="form-control"  autocomplete="none" >
      </div>
      <div class="col-lg-6">
        Firstname
        <input type="text" name="fname" class="form-control" placeholder="enter Firstname" minlength="5" maxlength="20" autocomplete="none" required>
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
      <button class="btn btn-primary" name="submit" value="submit"><i class="fa fa-plus"> ADD PATIENT</i></button>
      </div>
     
    </form>
  </div>
</div>
<br>
<br>
<br>
<br>

<div class="footer" style="height:50px ;margin-top:80px; text-align: center; color:white; border-top:2px solid white; background-color:#202020;" > <br> &copy Right 2019</div>
  </body>
</html>