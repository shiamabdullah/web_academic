<?php 
$title = "title";

require_once('header.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$user=$_SESSION['current_user'];

?>

        <!-- <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="index.php">X Titan E-COMMERCE</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1"> -->

            
            <?php 
            if(!isset($_SESSION['flag'])){
              
            echo '<ul class="navbar-nav me-auto"></ul><span class="navbar-text actions"> <a class="login" href="login.php">Log In</a><a class="btn btn-light action-button" role="button" href="signup.php">Sign Up</a></span>';
            echo '';
            echo '</div>';
            echo '</div>';
            echo '</nav>';  
            
            
            

           
            }       

            

            else 
            {
                echo '<ul class="navbar-nav me-auto">';
                
                echo'</ul><span class="navbar-text actions"> <a class="login">' ;

                echo $user['name'];
                echo' 🟢</a><a class="btn btn-light action-button" role="button" href="../controller/signout.php">Sign Out</a></span>';
                echo '</div>';
                echo '</div>';
                echo '</nav>';  

                echo '<div>';
                echo '<div class="container" style="text-align: left;"> <h7><a href="add.php" class="link-dark">Add Product</a></h7></div>';
                echo '<div class="container" style="text-align: left;"> <h7><a href="viewProducts.php" class="link-dark">View Products</a></h7></div>';
                echo '<div class="container" style="text-align: left;"> <h7><a href="updateProducts.php" class="link-dark">Update Products</a></h7></div>';
                echo '<div class="container" style="text-align: left;"> <h7><a href="contactAdmin.php" class="link-dark">Contact Admin</a></h7></div>';
                echo '</div>';
                
                
                $conn = getConnection();
                $sql = "select * from announcement";
                $result = mysqli_query($conn, $sql);
                
                
            }
            ?>
            
                
            </div>
        </div>
    </nav>


   
    

<?php 
include('footer.php');
 ?>