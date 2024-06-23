<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin_Page</title>

    <!--Boostrap 5.3 Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!--Fontawesome Link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--Custom Css-->
<link rel="stylesheet" href="/CSS/Style.css">

</head>
<body>

<!--navbar start-->
<nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome to admin page</a>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
</nav>
<!--navbar end-->

<!--Dashboard start-->

<div class="bg-light">
    <h3 class="text-center p-3">DashBoard</h3>

    <div class="row">
      <div class="col-md-12 bg-dark p-3 mb-3">
        <div class="button text-center">

          <button class="bg-primary btn btn-outline-light">
            <a href="index.php?insert_products" class="nav-link text-light  ">Insert Products</a>
          </button>

          <button class="bg-primary btn btn-outline-light">
            <a href="#" class="nav-link text-light">View Products</a>
          </button>

          <button class="bg-primary btn btn-outline-light">
            <a href="index.php?insert_categories" class="nav-link text-light">Insert Categories</a>
          </button>

          <button class="bg-primary btn btn-outline-light">
            <a href="#" class="nav-link text-light">View Categories</a>
          </button>

          <button class="bg-primary btn btn-outline-light">
            <a href="index.php?insert_brands" class="nav-link text-light">Insert Brands</a>
          </button>

          <button class="bg-primary btn btn-outline-light">
            <a href="#" class="nav-link text-light">View Brands</a>
          </button>

        </div>
      </div>
    </div>
    
  </div>

<!--Dashboard end-->

<!--forms area-->
<div class="container">
  <?php
  if(isset($_GET['insert_categories']))
  {
    include('insert_categories.php');
  }
  if(isset($_GET['insert_products']))
  {
    include('insert_products.php');
  }
  if(isset($_GET['insert_brands']))
  {
    include('insert_brands.php');
    
  }
  ?>
</div>


</body>
</html>


