<?php
include('../includes/connection.php');

if(isset($_POST['insert_cat'])){ //if tou get a variable called insert_cat under the post method
  $cat_tittle=$_POST['cat_tittle'];//what i type in 'cat title' save in the var $cat_title
  
  //SQL Query
  $insert_query="INSERT INTO `categories_tb`(category_name)VALUES('$cat_tittle')";//cat title is var from up there

  //now we have a variable only so
  
  $run=mysqli_query($con, $insert_query);

  if($run){
    echo"<script> alert ('Category Insterted!') </script>";
  }

}
?>

<form action="" method="POST">
  <div class="inpu-group">
  <div class="input-group mb-3 mt-5">
  <span class="input-group-text" id="basic-addon1">category Title</span>
  <input type="text" class="form-control" name="cat_tittle" placeholder="Enter Category Name" aria-label="Username" aria-describedby="basic-addon1">
</div>
  </div>
  
  <div class="inpu-group w-10">
    <input type="submit" name="insert_cat" class="form-control bg-primary" value="insert Category" >
  </div>
</form>