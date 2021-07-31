<?php ;
require_once('../model/db.php');
$conn = getConnection();
	
$id= $_GET['id'];

      
        $sql="DELETE FROM `announcement` WHERE `id` LIKE '{$id}';";
        $result = mysqli_query($conn, $sql);
        if ($result=1){
            echo "deleted <br>";
            header('location: ../view/index.php');
            $_SESSION['stat']="Deleted";
            $_SESSION['stat_code']="error";
        }
        else{
            echo "error";
        }
            


?>