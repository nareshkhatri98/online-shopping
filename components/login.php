<?php
include_once('connect.php');
if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $password = $_POST['password'];

  $select = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

  $result = $conn->query($select);
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    if($row['user_role'] == 'user') {
     header("location:abcd.html");
    }
    if
    
  } else {
    echo "Invalid email or password";
  }
}
?>
