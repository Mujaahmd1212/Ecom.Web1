<?php
include('./includes/connection.php');

//Get all products functions
function getproducts(){
  global $con;

  // check isset condition to see user has clicked brands or categories
  if(!isset($_GET['brand'])){
    if(!isset($_GET['category'])){

    

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
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                    <a href='product_details.php?product_id=$product_id ' class='btn btn-secondary text-dark'>Details</a>
                  </div>
                </div>
              </div>";
      }
    }
  }
}

//get unique categories

function getuniqueCat(){
  global $con;

  // check isset condition to see user has clicked categories
  if(isset($_GET['category'])){
    $category_id=$_GET['category'];
  $select_query = "SELECT * FROM `products_tb` WHERE category_id=$category_id ORDER BY RAND()";
    $run_select_query = mysqli_query($con, $select_query);

    //check row count
    $num_of_rows=mysqli_num_rows($run_select_query);
    if($num_of_rows==0){
      echo "<h2 class='text-center text-danger'>No Stock In This Category</h2>";
    }
    while ($row = mysqli_fetch_assoc($run_select_query)){
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
                    <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                    <a href='product_details.php' class='btn btn-secondary text-dark'>Details</a>
                  </div>
                </div>
              </div>";
      }
    }
  } 

  //get unique brands
  function getUniqueBrands(){
    global $con;

    // check isset condition to see user has clicked brands
      if(isset($_GET['brand'])){
        $brand_id=$_GET['brand'];

    $select_query = "SELECT * FROM `products_tb` WHERE brand_id=$brand_id ORDER BY RAND()";
      $run_select_query = mysqli_query($con, $select_query);
  
      //check row count
      $row_count=mysqli_num_rows($run_select_query);
      if($row_count==0){
        echo"<h1 class='text-center text-danger'>HE HE Therrs no Brands under this name</h1>";
      }
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
                      <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                      <a href='#' class='btn btn-secondary text-dark'>Details</a>
                    </div>
                  </div>
                </div>";
        }
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

  //search products
  function searchproducts(){
    global $con;
    if(isset($_GET['search_data_btn'])){
      $search_data_value=$_GET['search_data_txt'];
      $select_query = "SELECT * FROM `products_tb` WHERE product_keyword LIKE '%$search_data_value%' ORDER BY RAND()";
      $run_select_query=mysqli_query($con, $select_query);
      while($row=mysqli_fetch_assoc($run_select_query)){
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
                      <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                      <a href='product_details.php?product_id=$product_id' class='btn btn-secondary text-dark'>Details</a>
                    </div>
                  </div>
                </div>";
        }
      }
    }
    function view_details(){
      global $con;

      // check isset condition to see user has clicked brands or categories
      if(isset($_GET['product_id'])){  
      if(!isset($_GET['brand'])){
      if(!isset($_GET['category'])){
        $product_id=$_GET['product_id'];
        $select_query = "SELECT * FROM `products_tb` WHERE product_id=$product_id";
        $run_select_query = mysqli_query($con, $select_query);
        while ($row = mysqli_fetch_assoc($run_select_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_detail = $row['product_detail'];
            $product_keyword = $row['product_keyword'];
            $category_id = $row['category_id'];
            $brand_id = $row['brand_id'];
            $product_image1 = $row['product_image1'];
            $product_image2 = $row['product_image2'];
            $product_image3 = $row['product_image3'];
            $product_price = $row['product_price'];
    
            echo "<div class='col-md-4 px-4'>
                    <div class='card mb-3' style='width: 18rem; min-height:30rem;'>
                      <img src='./admin/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                      <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_detail</p>
                        <h3>LKR $product_price</h3>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-primary'>Add to cart</a>
                     
                      </div>
                    </div>
                  </div>

                  <div class='col-md-8'>
                  <div class='row'>
                    <div class='col-md-12'>
                      <h4 class='text-center'>Related Images</h4>
                    </div>
                    <!--related images 2-->
                    <div class='col-md-6'>
                    <img src='./admin/product_images/$product_image2' class='card-img-top' alt='$product_title'>
                    </div>
                    <!--related images 3-->
                    <div class='col-md-6'>
                    <img src='./admin/product_images/$product_image3' class='card-img-top' alt='$product_title'>
                    </div>
                  </div>
                </div>";
          }
        }
      }
    }
  }
// get ip address
function getIPAddress() {  
  //whether ip is from the share internet  
   if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
              $ip = $_SERVER['HTTP_CLIENT_IP'];  
      }  
  //whether ip is from the proxy  
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
              $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
   }  
//whether ip is from the remote address  
  else{  
           $ip = $_SERVER['REMOTE_ADDR'];  
   }  
   return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;

//cart function
function cart(){
if(isset($_GET['add_to_cart'])){
  global $con;

  $ip = getIPAddress();
  $get_product_id=$_GET['add_to_cart'];

  $select_query="SELECT * FROM `card_details` WHERE ip_address='$ip' AND product_id=$get_product_id";
  $run_select_query = mysqli_query($con, $select_query);
  $num_of_rows=mysqli_num_rows($run_select_query );
  if($num_of_rows>0){
    echo"<script>alert('Item Is Already In The Cart')</script>";
    echo"<script>window.open('index.php' , '_self')</script>";
  }
  else{
    $insert_query="INSERT INTO `card_details`(product_id, ip_address, quantity) VALUES($get_product_id, '$ip', 0)";//ip address is varchar so we put inside a single quoatatin
    $run_insert_query=mysqli_query($con, $insert_query);
    echo"<script>alert('Item Added To The Cart')</script>";
    echo"<script>window.open('index.php' , '_self')</script>";

    }
  }
}

function cart_item_count(){
    if(isset($_GET['add_to_cart'])){
      global $con;
    
      $ip = getIPAddress();
    
      $select_query="SELECT * FROM `card_details` WHERE ip_address='$ip'";
      $run_select_query = mysqli_query($con, $select_query);
      $num_of_rows=mysqli_num_rows($run_select_query );
      }
      
      else{
      global $con;
      $ip = getIPAddress();
      $select_query="SELECT * FROM `card_details` WHERE ip_address='$ip'";
      $run_select_query = mysqli_query($con, $select_query);
      $num_of_rows=mysqli_num_rows($run_select_query );
        }

        echo $num_of_rows;
      }
?>