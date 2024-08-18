<?php
include('./includes/connection.php');
include('./Functions/common_functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecom.com</title>

<!--Bootsrap V5.3-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-..." crossorigin="anonymous">


  <!--Fontawesome Link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!--Custom Css-->
  <link rel="stylesheet" href="./CSS/Style.css">

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
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>0<?php cart_item_count();?></sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total:2500 Rs</a>
        </li>
      </ul>
      <form class="d-flex" action="search_products.php" method="GET">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data_txt">
        <button class="btn btn-outline-secondary text-light " type="submit" name="search_data_btn">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--nav bar End-->

<!--call cart function-->
<?php
  cart();
?>
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
    <!--fetch data from DB for products from functions-->
    <?php
    getproducts();
    getuniqueCat();
    getUniqueBrands();
    ?>
  </div>
</div>


<!--Side Nav Area-->
<div class="col-md-2 bg-primary p-0">
        <ul class="navbar-nav me-auto text-center">
         
        <li class="nav-item bg-dark">
            <h4 class="text-light">Brands</h4>
          </li>
          <?php
          getbrands();
          ?>
        </ul>

        <!--Categories-->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-dark">
            <h4 class="text-light">Categories</h4>
          </li>
          <?php
          getcategories()
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