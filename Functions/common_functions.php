<?php
include('./includes/connection.php');

//Get products functions
function getproducts(){
  global $con;
  $select_query = "SELECT * FROM `products_tb` ORDER BY RAND()";
    $run_select_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($run_select_query)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_detail = $row['product_detail'];
        $product_keyword = $row['product_keyword'];
        $category_id = $row['category_id'];
        $brand_id = $row['brand_id'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_price'];

        echo "<div class='col-md-4 px-4'>
                <div class='card mb-3' style='width: 18rem; min-height:30rem;'>
                  <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                  <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_detail</p>
                    <h3>LKR $product_price</h3>
                    <a href='#' class='btn btn-primary'>Add to cart</a>
                    <a href='#' class='btn btn-secondary text-dark'>Details</a>
                  </div>
                </div>
              </div>";
    }
}
  //brands
function getbrands(){
global $con;
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
  }
  //categories
  function getcategories(){
    global $con;
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
  }

?>