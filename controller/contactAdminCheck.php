<?php 
require_once('../view/header.php');
$user=$_SESSION['current_user'];


if(isset($_POST['submit'])){
    print_r($user);
    print_r($_POST['submit']);
    
}

require_once('../view/footer.php');

?>