<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin page</title>
  <!-- css file -->
  <link rel="stylesheet" href="style.css">
  <!-- font aswome -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
</head>
<body>
 <?php include 'header.php';?>  

    <div class="container">
      <form action="" method="POST"  class="add_product-form" enctype="multipart/form-data">
         <h3>Add a new product</h3>
         <input type="text" placeholder="enter product name" name="product_name" class="box">
         <input type="number" placeholder="enter product price" name="product_price" class="box">
         <input type="file" accept="image/jpg, image/png, image/jpeg" name="product_img" class="box">
         <input type="submit" class="btn" name="add_product" value="add product">
      </form>

      <section>

      </section>
    </div>








<!-- js file -->





</body>
</html>