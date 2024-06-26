<?php
include('../includes/connection.php');

if(isset($_POST['insert_cat'])){

  $cat_title=$_POST['cat_title'];

  //SQL Query
$insert_query="INSERT INTO `categories_tb`(category_name)VALUES('$cat_title')";

$run=mysqli_query($con, $insert_query);

if($run){
  echo "<script>alert('Category successfully inserted')</script>";

}

}




?>


<form action="" method="POST">
  <div class="input-group">
  <div class="input-group mb-3 mt-5">
  <span class="input-group-text" id="basic-addon1">category Title</span>
  <input type="text" class="form-control" name="cat_title" placeholder="Enter Category Name" aria-label="Username" aria-describedby="basic-addon1">
</div>
  </div>
  
  <div class="inpu-group w-10">
    <input type="submit" name="insert_cat" class="form-control bg-primary" value="insert Category" >
  </div>
</form>