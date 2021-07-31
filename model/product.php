<?php
  require_once('db.php');
  
  
  function getPostbyId($id)
  {
      $conn = getConnection();
      $sql = "SELECT * FROM `announcement` WHERE `id`='{$id}'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      return $row;
    
    }

    function insertPost($post)
    { 
      $conn=getConnection();
      $sql="INSERT INTO `announcement`(`header`, `body`) VALUES ('{$post['header']}', '{$post['body']}')";
      $result=mysqli_query($conn,$sql);
      if($result)
      {   
        echo 'Added';
      }
      else
      {
          return false;
      }
    }

    function insertProduct($product)
    {
    $conn=getConnection();
    $sql="INSERT INTO `product` (`P_name`, `P_Desc`, `P_Cate`, `P_Price`, `P_image`) 
    VALUES ('{$product['productName']}', '{$product['description']}', '{$product['category']}','{$product['price']}','{$product['photo']}')";

    if(mysqli_query($conn,$sql))
    {   
        return true;
    }
    else
    {
        return false;
    }
  }


  ?>