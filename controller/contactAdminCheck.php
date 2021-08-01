<?php 
require_once('../view/header.php');
$user=$_SESSION['current_user'];
require_once('../model/db.php');


if(isset($_POST['submit'])){
    echo("\n");
    print_r($_POST);

    $owner= $user['username'];
    $topic= $_POST['topic'];
    $message= $_POST['message'];

    $conn=getConnection();
    $sql="INSERT INTO `sms` (`owner_id`, `topic`, `message`) 
    VALUES ('{$owner}', '{$topic}', '{$message}')";
     if(mysqli_query($conn,$sql)){
         
        return true;
      }
      else{
        return false;
      }
    
}

require_once('../view/footer.php');

?>