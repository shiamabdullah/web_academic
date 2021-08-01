<?php 
require_once('../model/db.php');
require_once('../model/product.php');
if (session_status() == PHP_SESSION_NONE) {
   session_start();
   }
   $conn = getConnection();
   if(isset($_POST['submit'])){
      $productName = trim($_POST['productName']," ");
      $description = trim($_POST['description']," ");
      $category = trim($_POST['category']," ");
      $price = $_POST['price'];
      $id = $_POST['submit'];
      print_r($_POST);
     
      $product = ['id'=>$id,'productName'=> $productName, 'description'=> $description, 'category'=>$category,'price'=>$price];

      if(updateProduct($product)){
            $_SESSION['stat']="Updated Product";
            $_SESSION['stat_code']="success";
            header('location: ../view/viewProducts.php');
      }
      else{
      
      $_SESSION['stat']="Not Updated Product";
      $_SESSION['stat_code']="error";
        echo 'Error';
      }
    
}
?>