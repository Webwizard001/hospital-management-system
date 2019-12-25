
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/css.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="fontawesome/flaticon/font/flaticon.css">
 <link rel="stylesheet"  href="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;

}

/* Float four columns side by side */
.column { 
margin-top:100px;
  float: left;
  width: 40%;
  padding: 0 3px;
   margin-left:30%;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 80%;
    display: block;
    margin-bottom: 20px;
    margin-left:40px;

  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 20px 20px;
  text-align: center;
  background-color: #fff;

}
</style>
</head>
<body>
<div class="header " style="height: 85px; width: 100%;border-bottom:3px solid gray; background-image: url('img/petern.png');"><img src="img/p.jpg" width="100" height="80"> <b style="color:gray; font-size:18px"> HOSPITAL MANAGEMENT SYSTEM</b><b><span style="margin-top:20px" class="w3-opennav w3-xlarge w3-right" onclick="w3_open()">&#9776;&nbsp &nbsp </span></b>
  <nav class="w3-sidenav w3-dark-grey w3-animate-left " style="display:none" id="mySidenav">
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-closenav w3-large">Close &times;</a>
  <a href="#">Link 1</a>
  <a href="#">Link 2</a>
  <a href="#">Link 3</a>
  <a href="#">Link 4</a>
  <a href="#">Link 5</a>
</nav><script>
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}
</script></div>
      

        
          <br>
     <br>
        	<div class="row ">
          <?php
  require "includes/functions.php";

$servername="localhost";
$username="root";
$password="";
$dbname="hospital";
$conn = new mysqli($servername,$username,$password,$dbname);




  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if(isset($_POST['submit'])) {
      
    
      $doctor_id = htmlspecialchars(trim($_POST['doctor_id']), ENT_QUOTES, 'UTF-8');
      $password = /*md5*/$_POST['password'];
      
      if($doctor_id != "" && $password != "") {
        
        $check = $conn->query("SELECT * FROM doctor WHERE doctor_id='".$doctor_id."' AND password='".$password."' LIMIT 1");
        
        if($check->num_rows) {
          
          $data = $check->fetch_assoc();
          
          $_SESSION['admins'] = $data['doctor_id'];
          $_SESSION['password']  = $data['password'];
          
    
            echo "<script>window.location='doctor_home.php'</script>";
          
        }else{
          
          
         echo "<script>alert('Invalid login details')</script>";
          
        }
        
      }else{
        
        echo "<script>alert('failed')</script>";
     
      }
      
    }
     
}
?>

  <div class="column">

    <div class="card">
    	<img src="img/doctor.png" class="w3-round"  height="90" style=" padding-left:10px; margin-top:-70px;"><img src="img/correct.png" height="30" style="margin-left:-18px;" ></p>
    	<small>DOCTOR LOGIN</small>
    	<br>
    	<br>
    	
        	<form  class="form-horizontal" method="post" action="index.php" >
        		<div class=" form-group">
        			
        			  <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-user" ></i></span>
      <input id="msg" type="text" class="form-control" name="doctor_id" placeholder="Enter email">
    </div>
        	</div>
        	

        			<div class=" form-group">
        			
        			  <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-key" ></i></span>
      <input  type="password" id="myInput" class="form-control" name="password" placeholder="Additional Info">
      <span class="input-group-addon" onclick="myFunction()"><i class="fa fa-eye" ></i></span>
    </div>
    <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
        	</div>
        	

        		<div class=" form-group">
        			
        		<button class="btn btn-primary" name="submit" value="submit">Sign in</button>
        		<button class="btn btn-danger">Reset</button>
        	</div>
       
        	</form>
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
<div class="footer" style="height:50px ;margin-top:18px; text-align: center; color:white; border-top:2px solid white; background-color:#202020;" ><br> &copy Right 2019</div>
</body>

</html>
