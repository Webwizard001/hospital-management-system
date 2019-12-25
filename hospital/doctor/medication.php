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
  <?php
$mysqli = new mysqli('localhost','root','','hospital');

       if(isset($_POST['submit'])){
   $patient_id = $mysqli->real_escape_string($_POST['patient_id']);
$drug_categories = $mysqli->real_escape_string($_POST['drug_categories']);
$drug_categories1 = $mysqli->real_escape_string($_POST['drug_categories1']);
$drug_categories2 = $mysqli->real_escape_string($_POST['drug_categories2']);

$drug_name = $mysqli->real_escape_string($_POST['drug_name']);
$drug_name1 = $mysqli->real_escape_string($_POST['drug_name1']);
$drug_name2 = $mysqli->real_escape_string($_POST['drug_name2']);

$drug_quantity = $mysqli->real_escape_string($_POST['drug_quantity']);
$drug_quantity1 = $mysqli->real_escape_string($_POST['drug_quantity1']);
$drug_quantity2 = $mysqli->real_escape_string($_POST['drug_quantity2']);

$drug_prescription = $mysqli->real_escape_string($_POST['drug_prescription']);
$drug_prescription1 = $mysqli->real_escape_string($_POST['drug_prescription1']);
$drug_prescription2 = $mysqli->real_escape_string($_POST['drug_prescription2']);

  $drug_days = $mysqli->real_escape_string($_POST['drug_days']);
   $drug_days1 = $mysqli->real_escape_string($_POST['drug_days1']);
    $drug_days2 = $mysqli->real_escape_string($_POST['drug_days2']);

$injection_name = $mysqli->real_escape_string($_POST['injection_name']);
$injection_name1 = $mysqli->real_escape_string($_POST['injection_name1']);
$injection_name2 = $mysqli->real_escape_string($_POST['injection_name2']);

$injection_dosage = $mysqli->real_escape_string($_POST['injection_dosage']);
$injection_dosage1 = $mysqli->real_escape_string($_POST['injection_dosage1']);
$injection_dosage2 = $mysqli->real_escape_string($_POST['injection_dosage2']);

$injection_start = $mysqli->real_escape_string($_POST['injection_start']);
$injection_start1 = $mysqli->real_escape_string($_POST['injection_start1']);
$injection_start2 = $mysqli->real_escape_string($_POST['injection_start2']);

$injection_continue = $mysqli->real_escape_string($_POST['injection_continue']);
$injection_continue1 = $mysqli->real_escape_string($_POST['injection_continue1']);
$injection_continue2 = $mysqli->real_escape_string($_POST['injection_continue2']);

  $injection_days = $mysqli->real_escape_string($_POST['injection_days']);
  $injection_days1 = $mysqli->real_escape_string($_POST['injection_days1']);
  $injection_days2 = $mysqli->real_escape_string($_POST['injection_days2']);

  $sql = "INSERT INTO `prescription`( `patient_id`, `drug_categories`, `drug_categories1`,`drug_categories2`, `drug_name`, `drug_name1`, `drug_name2`, `drug_quantity`,`drug_quantity1`,`drug_quantity2`, `drug_prescription`,`drug_prescription1`,`drug_prescription2`, `drug_days`, `drug_days1`, `drug_days2`,`injection_name`,`injection_name1`,`injection_name2`, `injection_dosage`,`injection_dosage1`,`injection_dosage2`, `injection_start`, `injection_start1`, `injection_start2`, `injection_continue`,`injection_continue1`,`injection_continue2`, `injection_days` ,`injection_days1`,`injection_days2`) VALUES ('$patient_id','$drug_categories','$drug_categories1','$drug_categories2','$drug_name','$drug_name1','$drug_name2','$drug_quantity','$drug_quantity1','$drug_quantity2','$drug_prescription','$drug_prescription1','$drug_prescription2','$drug_days','$drug_days1','$drug_days2','$injection_name','$injection_name1','$injection_name2','$injection_dosage','$injection_dosage1','$injection_dosage2','$injection_start','$injection_start1','$injection_start2','$injection_continue','$injection_continue1','$injection_continue2','$injection_days','$injection_days1','$injection_days2')"; 
if ($mysqli->query($sql) == true) {
  echo '<div class="container alert alert-danger"> prescription added successfully </div>';

}else{
  echo '<div class="container alert alert-danger"> Fail to prescribe drug </div>';
}
}

     ?>
 <form action="medication.php" method="post">
  <div class="col-lg-6">
  Patient ID <input type="text" class="form-control" name="patient_id">
  </div>
<br>
<br>
  <br>
 <br>
    <h4 align="center" style="color: blue;">DRUGS</h4>
    <br>
  <div class="table-responsive">
     
     <table id="example1" class="table table-striped table-bordered">
        <thead>
        <th><small>CATEGORIEES</th>
            <th><small>NAME</small></th>
        <th><small>Quantity</small></th>
        <th><small>PRESCRIPTION</small></th>
        <th><small>DAYS</small></th>
      </thead>
      <tbody>
 <tr>
  <td>
    <select name="drug_categories" class="form-control" required>
          <option value="null" disabled selected>null</option>
          <option value="Tablet">Tablet</option>
          <option value="Capsule">Capsule</option>
          <option value="Syrup">Syrup</option>
         
        </select>
        <hr>
          <select name="drug_categories1" class="form-control" required>
          <option value="null" disabled selected>null</option>
          <option value="Tablet">Tablet</option>
          <option value="Capsule">Capsule</option>
          <option value="Syrup">Syrup</option>
         
        </select>

           <hr>
            <select name="drug_categories2" class="form-control" required>
          <option value="null" disabled selected>null</option>
          <option value="Tablet">Tablet</option>
          <option value="Capsule">Capsule</option>
          <option value="Syrup">Syrup</option>
         
        </select>
</td>

  <td>
    <input type="text" class="form-control" name="drug_name">
    <hr>
      <input type="text" class="form-control" name="drug_name1">
      <hr>
      <input type="text" class="form-control" name="drug_name2">
    
      
  </td>
  <td> <input type="number" class="form-control" name="drug_quantity">
  <hr>
      <input type="number" class="form-control" name="drug_quantity1">
      
      <hr>
      <input type="number" class="form-control" name="drug_quantity2">
      
      
      </td>
      <td> 
     <select name="drug_prescription" class="form-control" required>
          <option value="null" disabled selected>null</option>
          <option value="1 daily">1 daily</option>
          <option value="1 morning 1 evening">1 morning 1 evening</option>
          <option value="1morning 1 afternoon 1 evening">1morning 1 afternoon 1 evening</option>
          <option value="2morning 2evening">2morning 2evening</option>
          <option value="2morning, 2afternoon, 2evening">2morning, 2afternoon, 2evening</option>
         
        </select>

  <hr>
        <select name="drug_prescription1" class="form-control" required>
          <option value="null" disabled selected>null</option>
          <option value="1 daily">1 daily</option>
          <option value="1 morning 1 evening">1 morning 1 evening</option>
          <option value="1morning 1 afternoon 1 evening">1morning 1 afternoon 1 evening</option>
          <option value="2morning 2evening">2morning 2evening</option>
          <option value="2morning, 2afternoon, 2evening">2morning, 2afternoon, 2evening</option>
         
        </select>
      
      <hr>
        <select name="drug_prescription2" class="form-control" required>
          <option value="null" disabled selected>null</option>
          <option value="1 daily">1 daily</option>
          <option value="1 morning 1 evening">1 morning 1 evening</option>
          <option value="1morning 1 afternoon 1 evening">1morning 1 afternoon 1 evening</option>
          <option value="2morning 2evening">2morning 2evening</option>
          <option value="2morning, 2afternoon, 2evening">2morning, 2afternoon, 2evening</option>
         
        </select>
  
      </td>
        <td> <input type="number" class="form-control" name="drug_days">
    
  <hr>
      <input type="number" class="form-control" name="drug_days1">
      
      <hr>
      <input type="number" class="form-control" name="drug_days2">
      
    

 </tr>
</tbody>
</table>
</div>
</div>

<div class="container">
   <h4 align="center" style="color: blue;">INJECTION</h4>
      <br>
  <div class="table-responsive">
     
     <table id="example1" class="table table-striped table-bordered">
        <thead>
        <th><small>NAME</th>
          <th><small>DOSAGE</small></th>
        <th><small>START</small></th>
        <th><small>CONTINUE</small></th>
        <th><small>DAYS</small></th>
      </thead>
      <tbody>
 <tr>
  <td>
    <input type="text" class="form-control" name="injection_name">
  <hr>
   <input type="text" class="form-control" name="injection_name1">
  <hr>
   <input type="text" class="form-control" name="injection_name2">
</td>


  <td>
    <input type="number" class="form-control" name="injection_dosage">
    <hr>
   <input type="number" class="form-control" name="injection_dosage1">
    <hr>
    <input type="number" class="form-control" name="injection_dosage2">

  </td>

  <td>
    <input type="text" class="form-control" name="injection_start">
<hr>
 <input type="text" class="form-control" name="injection_start1">
  <hr>
   <input type="text" class="form-control" name="injection_start2">
 
  </td>

  <td>
    <input type="text" class="form-control" name="injection_continue">
  <hr>
   <input type="text" class="form-control" name="injection_continue1">
  <hr>
   <input type="text" class="form-control" name="injection_continue2">
</td>

  <td>
    <input type="number" class="form-control" name="injection_days">
  <hr>
   <input type="number" class="form-control" name="injection_days1">
  <hr>
   <input type="number" class="form-control" name="injection_days2">
</td>
</tr>
</div>
</tbody>

</table>
<button class="btn btn-lg btn-primary" name="submit" value="submit">Add prescription</button>
</form>
</div>
</div>

<div class="footer" style="height:50px ;margin-top:180px; text-align: center; color:white; border-top:2px solid white; background-color:#202020;" > <br> &copy Right 2019</div>
</body>
</html>
