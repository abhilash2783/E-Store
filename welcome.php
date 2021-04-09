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

      .sidenav b {
        
        text-decoration: none;
        font-size: 15px;
        color: #822323;
        display: block;
      }

      .sidenav a:hover {
        color: #f1f1f1;
      }
      body
        {
            background-image: url("");
            background-color: #cccccc;
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

<div class="container">

<nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light">
  
    <a href="#" class="navbar-brand">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSc6pTUoIR_Hlfl_bK7wvoI7CBGL8wXJtkUJyuWxt1fvphadnCbSe-t4tMrBWAKmngCt9E&usqp=CAU" width="25" alt="" class="d-inline-block align-middle mr-2">
      <span class="text-uppercase font-weight-bold">E-Store</span>
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="header.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
      <div style="position:absolute;right:20px;">
        <?php
        $count=0;
          if(isset($_SESSION['cart']))
          {
            $count=count($_SESSION['cart']);
          }
        ?>
        <a href="mycart.php" class="btn btn-outline-success">My Cart(<?php echo $count; ?>)</a>
      </div>
    </div>
</nav>
</div>




<div class="sidenav">
  <a href="index.php">Mobile Phones</a>
  <a href="lap.php">Laptops</a>
  <a href="wat.php">Smart Watches</a>
  <b><u>Home Appliances</u></b>
  <a href="wat.php">TV</a>
</div>
<div class="container-fluid" style=" position:absolute;left:500px;top:110px" class="container col-lg-2 text-center">
          <h1>Welcome to E-Store</h1>
</div>


</body>
</html>