<?php include("header.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<style>
        .sidenav {
  height: 92%;
  width: 160px;
  position: fixed;
  z-index: 1;
  
  bottom: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

    </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-5 pl-5 pt-3">
  <div class="row">				
    <?PHP
      $con = mysqli_connect('localhost','root');
      mysqli_select_db($con,'pro');
      $query = " SELECT `name`, `image`, `price` FROM `products` where cat='lap'";
      $queryfire = mysqli_query($con, $query);
      $num = mysqli_num_rows($queryfire);
      if($num > 0){
        while($product = mysqli_fetch_array($queryfire)){
          ?>
              <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                  <div class="card">	
                    <img src="<?php echo $product['image'];  ?>" alt="phone" class="card-img-top" >
                    <div class="card-body text-center">
                      <h5 class="card-title"><?php echo $product['name'];  ?></h5>
                      <p class="card-text">Price: Rs.<?php echo $product['price'];  ?></p>
                      <button type="submit" name="Add_to_Cart" class="btn btn-info">Add to cart </button>
                      <input type="hidden" name="Item_Name" value="<?php echo $product['name'];  ?>">
                      <input type="hidden" name="Item_Price" value="<?php echo $product['price'];  ?>">
                    </div>
                  </div>
                </form>
              </div>
      <?php		
        }
      }
      ?>
    </div>				
  </div>


	
</body>
</html>