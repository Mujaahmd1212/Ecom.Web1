<?php
include('../includes/connection.php');
?>

<form action="" method="post">
  <div class="inpu-group">
  <div class="input-group mb-3 mt-5">
  <span class="input-group-text" id="basic-addon1">Brand Title</span>
  <input type="text" class="form-control" name="brand_title" placeholder="Enter brand Name" aria-label="Username" aria-describedby="basic-addon1">
</div>
  </div>
  
  <div class="inpu-group w-10">
    <input type="submit" neme="insert_brand" class="form-control bg-primary btn btn-outline-light" value="Insert brand" >
  </div>
</form>