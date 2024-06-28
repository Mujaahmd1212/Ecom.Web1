<?php
include('./includes/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecom.com</title>

<!--Bootsrap V5.3-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!--Fontawesome Link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--Custom Css-->
  <link rel="stylesheet" href="/CSS/Style.css">

</head>
<body>
  <!--nav bar Start-->
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">Logo</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>04</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total:2500 Rs</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary text-light " type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--nav bar End-->

<!--content area-->
<div>
  <h2 class="text-center">Welcome to ATOM.Lk </h3>
  <p class="text-center">All your elctronics need in one place</p>
</div>
<!--content end-->


<div class="row">
<!--Product card -->
<div class="col-md-10">
<div class="row">
<div class="col-md-4">
<div class="card mb-3" style="width: 18rem;">
  <img src="./Images/H81-Desktop-Computer-Motherboard-B81H-V2-3-DDR3X2-16GB-Memory-Slot-PCIE16X-LGA1150-SATA3-0-For.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-secondary text-dark">Details</a>
  </div>
</div>
</div>

<div class="col-md-4">
<div class="card mb-3" style="width: 18rem;">
  <img src="./Images/71Qlivrp9TL._AC_UF1000,1000_QL80_.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-secondary text-dark">Details</a>
  </div>
</div>
</div>

<div class="col-md-4">
<div class="card mb-3" style="width: 18rem;">
  <img src="./Images/9669c417-4a55-4982-9084-de478540d828.257c395a818132d943c890f06d030bb8.webp
  " class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to cart</a>
    <a href="#" class="btn btn-secondary text-dark">Details</a>
  </div>
</div>
</div>
</div>
<!--product end-->
</div><!--md-10 end-->

<!--Side Nav Area-->
<div class="col-md-2 bg-primary p-0">
        <ul class="navbar-nav me-auto text-center">
         
        <li class="nav-item bg-dark">
            <h4 class="text-light">Brands</h4>
          </li>
          <?php
            $select_brands_query="SELECT*FROM `brands_tb`";
            $run_query=mysqli_query($con, $select_brands_query);
            //$row_data=mysqli_fetch_assoc($run_query);
            //echo $row_data['brand_name'];
            
            while($row_data=mysqli_fetch_assoc($run_query)){
              $brand_name=$row_data['brand_name'];
              $brand_id=$row_data['brand_id'];
              //echo $row_data['brand_name'];

              echo"<li><!--Brand 01-->
            <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_name</a>
          </li>";
            }


          ?>
        </ul>

        <!--Categories-->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-dark">
            <h4 class="text-light">Categories</h4>
          </li>
          <?php

            $select_categories_query="SELECT*FROM `categories_tb`";
            $run_query=mysqli_query($con, $select_categories_query);
            //$row_data=mysqli_fetch_assoc($run_query);
            //echo $row_data['category_name'];

            while($row_data=mysqli_fetch_assoc($run_query)){
              $category_name=$row_data['category_name'];
              $category_id=$row_data['category_id'];
              //echo $row_data['category_name'];

              echo"<li>
            <a href='index.php?category=$category_id' class='nav-link text-light'>$category_name</a>
          </li>";

            }

          ?>
        </ul>
      </div>

</div><!--first row end-->

<!--footer-->
<div class="bg-primary p-3 text-center text-dark">
  <p>All right reserved Designed : Mujahid Ahmed - 2024</p>
</div>





<!--Java Script Bootsrap V5.3-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>