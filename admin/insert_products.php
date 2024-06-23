<?php
include('../includes/connection.php');
?>

<form action="" method="post">
  <div class="inpu-group">
  <div class="input-group mb-3 mt-5">
  <span class="input-group-text" id="basic-addon1">product Title</span>
  <input type="text" class="form-control" name="product_title" placeholder="Enter product Name" aria-label="Username" aria-describedby="basic-addon1">
</div>
  </div>
  
  <div class="inpu-group w-10">
    <input type="submit" neme="insert_product" class="form-control bg-primary" value="insert product" >
  </div>
</form>