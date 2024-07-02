<?php
include('../includes/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Products - Admin Panel</title>

      <!--Boostrap 5.3 Link-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!--Fontawesome Link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--Custom Css-->
<link rel="stylesheet" href="/CSS/Style.css">


</head>
<body class="bg-light">
  <div class="container">
    <h1 class="text-center">Insert Products</h1>

  <!--Form Area Start-->
    <form action="" method="POST" enctype="multipart/form-data">
  <!--Product-Title-->
    <div class="form-outline mb-4 w-50 m-auto">
      <label class="form-label" for="product_title">Product Title</label>
      <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product Title" required="Please Enter The Product Title">    
    </div>
  <!--Product Description-->
    <div class="form-outline mb-4 w-50 m-auto">
      <label class="form-label" for="description">Product Description</label>
      <input type="text" name="description" id="description" class="form-control" placeholder="Enter Product Description" required="Please Enter The Product Description">
    </div>
  <!--Product Keyword-->
    <div class="form-outline mb-4 w-50 m-auto">
      <label class="form-label" for="keyword">Product Keyword</label>
      <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Enter Product Keyword" required="Please Enter The Product Keyword">
    </div>
  <!--Select Category-->
    <div class="form-outline mb-4 w-50 m-auto">
      <select name="product_categories" id="product_categories" class="form-select">
        <option value="">Select Category</option>
  <!--Calling Category Table-->
  <?php
  $select_query="SELECT*FROM`categories_tb`";
  $run_select_query=mysqli_query($con, $select_query);
//loop to show table data
  while($row=mysqli_fetch_assoc($run_select_query)){
    $cat_name=$row['category_name'];
    $cat_id=$row['category_id'];

    echo"<option value=''>$cat_name</option>";
  }
  ?>
  </select>
    </div>

  <!--Select Brands-->
    <div class="form-outline mb-4 w-50 m-auto">
      <select name="product_brands" id="product_brands" class="form-select">
        <option value="">Select Brand</option>

        <?php
        $select_query="SELECT*FROM`brands_tb`";
        $run_select_query=mysqli_query($con, $select_query);

        while($row=mysqli_fetch_assoc($run_select_query)){
        $brand_name=$row['brand_name'];
        $brand_id=$row['brand_id'];

        echo"<option value=''>$brand_name</option>";
        }
        ?>
      </select>
    </div>

      <!--Image-01-->
  <div class="form-outline mb-4 w-50 m-auto">
        <label class="form-label" for="product_image1">Product image 01</label>
        <input type="file" name="product_image1" id="product_image1" class="form-control"  required="Please insert Image-01 ">
      </div>
        <!--Image-02-->
  <div class="form-outline mb-4 w-50 m-auto">
        <label class="form-label" for="product_image2">Product image 02</label>
        <input type="file" name="product_image2" id="product_image2" class="form-control"  required="Please insert Image-02 ">
      </div>
        <!--Image-03-->
  <div class="form-outline mb-4 w-50 m-auto">
        <label class="form-label" for="product_image3">Product image 03</label>
        <input type="file" name="product_image3" id="product_image3" class="form-control"  required="Please insert Image-03 ">
      </div>  
        <!--Price-->
    <div class="form-outline mb-4 w-50 m-auto">
      <label class="form-label" for="product-price">Product Price</label>
      <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" rquired="Please Enter The Product Price ">
    </div>
        <!--Submit Butoon-->
        <div class="form-outline mb-4 w-50 m-auto">
          <input type="submit" name="insert_product" class="btn btn-primary" value="insert product">
        </div>
    

    </form>
  </div>
  
</body>
</html>