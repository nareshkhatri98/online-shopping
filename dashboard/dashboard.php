<?php 
@include '../components/connect.php';
session_start();
if (!isset($_SESSION['admin'])) {
  header('location:../../components/account.php');
}
?>


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

    <div class="class-right">
  
    <?php
    $sql = "SELECT COUNT(*) AS total_users FROM users  WHERE user_role='User'";
    $Total = mysqli_query($conn, $sql);
    if ($Total) {
      $row = mysqli_fetch_assoc($Total);
      $totalUsers = $row["total_users"];
    } else {
      $totalUsers = 0;
    }
    ?>

    <h1>Welcome- <smaLL>  <?php echo $_SESSION['admin'] ?></smaLL></h1>
      
      
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
       <a href="abcd.php"><span class="material-icons-outlined">inventory_2 </span> Product</li></a>
       
      
     <li class="sidebar-list-item"><a href="userlist.php"><span class="material-icons-outlined">groups</span> List user</li></a>

     
     
      <li class="sidebar-list-item"><span class="material-icons-outlined">
        shopping_cart
        </span> orders</li>
       
         
    <li class="sidebar-list-item"> <span class="material-icons-outlined">settings </span> Setting</li>
   </ul>
  </aside>
  <!-- Endsidebar -->
  <div class="total-user">
  <span class="text-primary font-weight-bold">
           total user: <?php echo $totalUsers; ?>
          </span>
  
  </div>

  <!-- end main -->
 


 
</div>















<!-- custom js -->
  <script src="../jsfolder/dashboard.js"></script>
  <script src="../assets/js/first.js"></script>
  <script src="../assets/js/drop_down.js"></script>
</body>
</body>
</html>