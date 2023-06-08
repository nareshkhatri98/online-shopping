<?php 
@include '../components/connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dashboard</title>
  <!-- custome css -->
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <!-- For icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
  rel="stylesheet">

<body>
<div class="grid-container">

  <!-- header -->
  <header class="header">
    <div class="menu-icon" onclick="openSidebar()">
      <span class="material-icons-outlined">menu</span>
    </div>
    <?php
    $sel = " SELECT * FROM users WHERE user_role = 'admin'";
      $query = mysqli_query($conn, $sel);
      $result= mysqli_fetch_assoc($query);
      ?>

    <div class="class-right">

    <h1>Welcome- <smaLL> <?php echo $result['fullname']; ?></smaLL></h1>
      
      
    </div>
  </header>
  <!-- end header -->

  <!-- slidebar -->
   <aside id="sidebar">
   <div class="sidebar-title">
    <div class="sidebar-brand">
      <span class="material-icons-outlined">
        store
        </span> Shopping
    </div>
    <span class="material-icons-outlined" onclick="closeSidebar()">close </span>
   </div>

   <ul class="sidebar-list">
        <li class="sidebar-list-item">
        <span class="material-icons-outlined">dashboard</span> Dashboard</li>

      <li class="sidebar-list-item">
       <a href="abcd.php"><span class="material-icons-outlined">inventory_2 </span> Add Product</li></a>
       
      
     <li class="sidebar-list-item"><a href="userlist.php"><span class="material-icons-outlined">groups</span> List user</li></a>

     <li class="sidebar-list-item"><span class="material-icons-outlined">
      category
      </span> Insert Category</li>
      <li class="sidebar-list-item">
      <span class="material-icons-outlined">
        visibility
        </span> View category
        </li>
      <li class="sidebar-list-item"><span class="material-icons-outlined">
        shopping_cart
        </span> orders</li>
        <li class="sidebar-list-item">
          <a href="show.html"></a><span class="material-icons-outlined">
            add_box
            </span> Insert Brand</li>
    <li class="sidebar-list-item"> <span class="material-icons-outlined">settings </span> Setting</li>
   </ul>
  </aside>
  <!-- Endsidebar -->

  <!-- end main -->
 


  
 
</div>















<!-- custom js -->
  <script src="../jsfolder/dashboard.js"></script>
  <script src="../assets/js/first.js"></script>
  <script src="../assets/js/drop_down.js"></script>
</body>
</body>
</html>