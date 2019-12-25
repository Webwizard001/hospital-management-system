
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/w3.css">
 <link rel="stylesheet"  href="fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
</head>
<body>
 <!-- Navbar for larger screen like pc and destops-->
<nav>
  <div class="w3-top">
<ul class="w3-navbar  w3-light-white w3-card-2 w3-left-align ">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><h6><i class="fa fa-bars"></i></h6></a>
  </li>
  <li class="w3-hide-small w3-right w3-text-black "><a href="javascript:void(0)" class="w3-padding-large w3-hover-red"><h6><i class="fa fa-bars"></i></h6></a></li>

  <li class="w3-hide-small w3-left w3-text-black "><a href="#" class="w3-padding-large"><h4><small><b>HOSPITAL MANAGEMENT SYSTEM</h4></small></b></a></li>

  <li class="w3-hide-small w3-right w3-text-black "><a href="logout.php" class="w3-padding-large"><h6><small><b>LOGOUT</b></small></h6></a></li>
   
    <li class="w3-hide-small w3-right w3-text-black "><a href="call_doctor.php" class="w3-padding-large"><h6><small><b>CALL A DOCTOR</b></small></h6></a></li>
    <li class="w3-hide-small w3-right w3-text-black  "><a href="medication.php" class="w3-padding-large"><h6><small><b>MEDICATION</b></small></h6></a>
    </li>
     <li class="w3-hide-small w3-right w3-text-black "><a href="appointment.php" class="w3-padding-large"><h6><small><b>APPOINTMENT</b></small></h6></a>
    </li>
    <li class="w3-hide-small w3-right w3-text-black  "><a href="patient_home.php" class="w3-padding-large"><h6><small><b><i class="fa fa-home"></i></b></small></h6></a></li>
</ul>
</div>
<!-- Navbar on small screens for phones -->
 <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <ul class="w3-navbar w3-left-align w3-light-grey">
      <li><a class="w3-padding-large" href="#"><small><b>CALL A DOCTOR</b></small></a></li>
      <li><a class="w3-padding-large" href="contact.php"><small><b>MEDICATION</b></small></a></li>
      <li><a class="w3-padding-large" href="about.php"><small><b>APPOINTMENT</b></small></a></li>
  
         <li><a class="w3-padding-large" href="about.php"><small><b>LOGOUT</b></small></a></li>

    </ul>
 </div>
</div>
</nav>
<!-- the end of Navbar -->

 <script type="text/javascript">
  
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
  	}
  	else { 
        x.className = x.className.replace(" w3-show", "");
    }
    }

</script>
</body>
</html>


