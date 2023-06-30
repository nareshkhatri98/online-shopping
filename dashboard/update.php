<?php
include 'model.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="prod.css">
</head>
<body>
<div class="container">
   <div class="admin-product-form-container centered">
      <?php
      $editid = $_GET['edit'];
      $productdetails = $obj->displayRecodrById($editid);
      ?>
      <form action="" method="post" enctype="multipart/form-data">
         <h3 class="title">Update the product</h3>
         <input type="text" class="box" name="product_name" value="<?php echo $productdetails['product_name']; ?>" placeholder="Enter the product name">
         <input type="number" min="0" class="box" name="product_price" value="<?php echo $productdetails['product_price']; ?>" placeholder="Enter the product price">
         <input type="file" class="box" name="product_img" accept="image/png, image/jpeg, image/jpg">
         <input type="submit" value="Update product" name="update_product" class="btn">
         <a href="abcd.php" class="btn">Go back!</a>
      </form>
   </div>
</div>
</body>
</html>
