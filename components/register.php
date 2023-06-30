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
       <li><a href="../new.html">Home</a></li>
       <li><a href="product.html">product</a></li>
       <li><a href="#">About</a></li>
       <li><a href="#">Contact</a></li>
       <li><a href="account.html">Account</a></li>
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
 
 <!--   acount page -->
 <div class="account-page">
  <div class="container">
    <div class="row">
      <div class="col-2">
        <img src="../images/image1.png" width="100%">
      </div>
      
     
<div class="form-container">

<form action="register.php" method="post" class="form-only">
   <h3>register</h3>
   <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      };
   };
   ?>
   <input type="text" name="name"   placeholder="enter your name">
   <input type="text" name="address"placeholder="enter the address">
   <input type="email" name="email"  placeholder="enter your email">
   <input type="password" name="password"  placeholder="enter your password">
   <input type="password" name="cpassword" placeholder="confirm your password">
  
   <input type="submit" name="submit" value="register now" class="btn">
   <p>already have an account? <a href="account.php">login here</a></p>
</form>

</div>
</body>
</html>
<?php
  include"connect.php";

  if(isset($_POST['submit'])){

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $address=$_POST['address'];
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);
  $user_role = "User";

    if($password != $cpassword){
        $error[] = 'password not matched!';
        
    }else{
      $insert = "INSERT INTO users(fullname, address, email, password, user_role) VALUES('$name','$address','$email','$password','$user_role')";
      mysqli_query($conn, $insert);
      if($insert){
       echo 'user register successfully';
      header('location:account.php');
    }
  }

  }
  ?>
        
       


   
 
  
       <script src="../jsfolder/togglemenu.js"></script>
      <script src="../jsfolder/imageclick_change.js"></script>
      <script src="../jsfolder/toggle_form.js"></script>
      <script src="../jsfolder/validform.js"></script>
     
</body>
</html>