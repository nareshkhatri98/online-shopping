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
  <link rel="stylesheet" href=".././dashboard/assets/css/dashboard.css">
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
    $sel = " SELECT * FROM users WHERE user_role = 'User'";
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
      <span class="material-icons-outlined">
        visibility
        </span> View product
        </li>
      <li class="sidebar-list-item"><span class="material-icons-outlined">
        shopping_cart
        </span>  my orders</li>
       
    <li class="sidebar-list-item"><a href="logout.php"> <span class="material-icons-outlined">person </span> Logout</li></a>
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