<?php
class Model {
  private $servername = "localhost";
  private $username = "root";
  private $password = "";
  private $dbname = "online_shopping";
  private $conn;

//connection..
  function __construct() {
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    if ($this->conn->connect_error) {
      echo "Connection fail";
    } else {
   #   echo "Connected successfully";
    }
  }

  #fetch the data for edit..

  function displayRecodrById($editid) {
    $sql = "SELECT * FROM products WHERE product_id = '$editid'";
    $result = $this->conn->query($sql);
    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      return $row;
    }
    
  }
  #update query
  function updateproduct($id) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_img']['name'];
    $product_image_tmp_name = $_FILES['product_img']['tmp_name'];
    $product_image_folder = 'upload_image/'.$product_image;

    $update_data = "UPDATE products SET product_name='$product_name', product_price='$product_price', product_img='$product_image' WHERE product_id = '$id'";
    $result = $this->conn->query($update_data);
    if ($result) {
      move_uploaded_file($product_image_tmp_name, $product_image_folder);
      header('location: abcd.php');
    } else {
      echo "Error updating product";
    }
  }
# Delete Query
  function DeleteProduct($deleteid){
    $sql ="DELETE FROM products WHERE product_id = '$deleteid'";
    $result = $this->conn->query($sql);
    if($result){
      header('location:abcd.php');
    }

  }
}

$obj = new Model();
#check for update form..
if (isset($_POST['update_product'])) {
  $editid = $_GET['edit'];
  $obj->updateproduct($editid);
}
#checjk for the delter botton..
if(isset($_POST['delete']))
{
  $deleteid = $_GET['delete'];
  $obj -> DeleteProduct($deleteid);
}
?>


 
