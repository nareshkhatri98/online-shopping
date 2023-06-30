<?php
@include '../components/connect.php';

$time = time();

 session_start();
 $_SESSION['user_role'] = 'User';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>dashboard</title>
  <!-- custome css -->
  <link rel="stylesheet" href="../dashboard/assets/css/dashboard.css">
  <!-- For icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
  rel="stylesheet">
  <link rel="stylesheet" href="prod.css">

<body>
<div class="grid-container">
  
  <!-- header -->
  <header class="header">
    <div class="menu-icon" onclick="openSidebar()">
      <span class="material-icons-outlined">menu</span>
    </div>
    <div class="class-left">
      <span class="material-icons-outlined"> search </span> 
    </div>
    <div class="class-right">
      <span class="material-icons-outlined" >account_circle </a></span>
      
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
       <a href="dashboard.php"><span class="material-icons-outlined">inventory_2 </span> Product</li></a>
    
      <li class="sidebar-list-item"><span class="material-icons-outlined">
        shopping_cart
        </span> orders</li>
    <li class="sidebar-list-item"> <span class="material-icons-outlined">settings </span> Setting</li>
   </ul>
  </aside>
  <!-- Endsidebar -->
  <main class="main-container">

   
<div class="form-container">

   <div class="admin-product-form-container">

  
<?php

      $select = mysqli_query($conn, "SELECT * FROM users where user_role = 'User'");
        $sn=1;
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
      <h1>User Details</h1>
         <thead>
         <tr> 
            <th>S.N</th>
            <th>Fullname</th>
            <th>Address</th>
            <th>Email</th>
            <th>Status</th>
          
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)) {
          $status = 'ofline';
          if($row['status']> $time)
          {
            $status = 'online';
          }
          ?>
         
         <tr>
            <td><?php echo $sn++; ?></td>
            
            <td><?php echo $row['fullname']; ?></td>
            
            <td><?php echo $row['address']; ?></td>
            <td> <?php echo $row['email']?></td>
            <td><?php echo $row['status']  ?></td>
            
         </tr>
      <?php } ?>
      </table>
   </div>

</div>
  





  </main>
  <!-- end main -->
 


  
 
</div>
















<script>
  function updateUserStatus()
  {
    jQuery.ajax({

      url:'../components/userdashboard.php'
    })
  }
  setInterval(function(){
    updateUserStatus()
  },5000);
</script>
<!-- custom js -->
  <script src="../jsfolder/dashboard.js"></script>
  <script src="../assets/js/first.js"></script>
  <script src="../assets/js/drop_down.js"></script>

</body>
</body>
</html>