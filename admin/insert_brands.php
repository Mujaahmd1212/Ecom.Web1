<?php
include('../includes/connection.php'); 

if(isset($_POST['insert_brand'])){

  $brand_title=$_POST['brand_title'];

  $insert_query="INSERT INTO `brands_tb`(brand_name)VALUES('$brand_title')";

  $run=mysqli_query($con, $insert_query);

  if($run){
    echo "<script> alert ('brand inserted Sucessfully')</script>";
  }



}
?>

<form action="" method="POST">
  <div class="input-group">
  <div class="input-group mb-3 mt-5">
  <span class="input-group-text" id="basic-addon1">Brand Title</span>
  <input type="text" class="form-control" name="brand_title" placeholder="Enter brand Name" aria-label="Username" aria-describedby="basic-addon1">
</div>
  </div>
  
  <div class="inpu-group w-10">
    <input type="submit" name="insert_brand" class="form-control bg-primary btn btn-outline-light" value="Insert brand" >
  </div>
</form>