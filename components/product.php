<?php 
  include_once('connect.php');

  $sql = "SELECT *FROM products";
  $all_product = $conn->query($sql);
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta nmae="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>online shopping</title>
  <link rel="stylesheet" href="../new.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="product.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
</head>
<body>

  <div class="container">
    <div class="navbar">
      <div class="logo">
        <a href="../new.html"><img src="../images/logo.png" width="225px"></a>
      </div>
      <nav>
        <ul id="MenuItems">
       <li><a href="../new.php">Home</a></li>
       <li><a href="product.php">product</a></li>
       <li><a href="#">About</a></li>
       <li><a href="#">Contact</a></li>
       <li><a href="account.php">Account</a></li>
       <li>
        <a href="cartpage.html" id="btn">
          <i class="fas fa-shopping-cart"></i>
        </a>
      </li>
      <span id="count"></span>
      
        </ul>
      </nav>
    
      <img src="../images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div>
   </div>
  
   <section class="title">
    <h1>All product</h1>
   </section>



     <main>
    
      <?php 
      while($row = mysqli_fetch_assoc($all_product)){
        ?> 
      
      <div class="card">
       <div class="image">
        <img src="../dashboard/upload_image/<?php echo $row['product_img']; ?>" alt="">
       </div> 
       <div class="caption">
        <p class="product_name"><?php echo $row['product_name']?></p>
        <p class="price"><b><?php echo"RS " .$row['product_price'] ?></b></p>
       </div>
       <button class="add">Add to card</button>

      </div>
      <?php
      }
      ?>
     </main>













   
   <?php 
  include_once('connect.php');
   $select_query = "SELECT *FROM `products`";
   $result = mysqli_query($conn,$select_query);
  // $row = mysqli_fetch_assoc($result);
   //echo $row['product_name'];

   while($row = mysqli_fetch_assoc($result))
   {
     $product_id = $row['product_id'];
     $product_name = $row['product_name'];
     $product_price = $row['product_price'];
     $product_img = $row['product_img'];
 
}
?>
        <script src="../jsfolder/togglemenu.js"></script>
        
</body>
</html>