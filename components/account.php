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
       <li><a href="../new.php">Home</a></li>
       <li><a href="product.php">product</a></li>
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

<form action="account.php" method="post" class="form-only">
   <h3>login</h3>
   <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
      };
   };
   ?>
   <input type="email" name="email" required placeholder="enter your email">

   <input type="password" name="password" required placeholder="enter your password">
   <input type="submit" name="submit" value="login now" class="btn">
   <p>don't have an account? <a href="register.php">register here</a></p>
</form>
</div>
</body>
</html>

<?php
include"connect.php";
session_start();
  $_SESSION['username'] = 'fullname'; 
if(isset($_POST['submit'])){
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = md5($_POST['password']);
  $select = " SELECT * FROM users WHERE email = '$email' && password = '$password' ";
  
  $result = mysqli_query($conn, $select);
  
  if(mysqli_num_rows($result) > 0){
  
     $row = mysqli_fetch_array($result);
  
     if($row['user_role'] == 'admin'){
        $_SESSION['fullname'] = $row['fullname'];
     header('location:../dashboard/dashboard.php');
    }
    elseif($row['user_role'] == 'User'){
        $_SESSION['fullname'] = $row['name'];
        header('location:userdashboard.php');
    }
    
  } else {
     $error[] = 'incorrect email or password!';
  }
}  
?>
       

 
  
       <script src="../jsfolder/togglemenu.js"></script>
      <script src="../jsfolder/imageclick_change.js"></script>
      <script src="../jsfolder/toggle_form.js"></script>
      <script src="../jsfolder/validform.js"></script>
     
</body>
</html>