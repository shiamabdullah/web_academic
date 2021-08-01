<?php 
$title = "title";

require_once('header.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//print_r($_SESSION['current_user']);
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
            
            
            $conn = getConnection();
            $sql = "select * from announcement";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result))
            {
            echo '<div class="container" style="text-align: center;">';    
            echo '<div class="card" > ';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">';
            echo$row['header'];
            echo'</h4>';

            echo '<h6 class="text-muted card-subtitle mb-2">Posted on: ';
            $date=date('d/m/Y', strtotime($row['posttime']));

            echo $date;
            echo '</h6><p class="card-text">';
            echo$row['body'];
            echo'</p>';

           

            echo '</div>';
            echo '</div>';
            echo '</div>';

           
            }       }    

            

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
                echo '<div class="container" style="text-align: center"> <h3 style="color: var(--bs-dark);">Products</h3></div>';
                echo '<div class="container" style="text-align: left;"> <h4><a href="add.php">Add Product</a></h4></div>';
                echo '<div class="container" style="text-align: left;"> <h4><a href="viewProducts.php">View Products</a></h4></div>';
                echo '<div class="container" style="text-align: left;"> <h4><a href="updateProducts.php">Update Products</a></h4></div>';
                echo '</div>';
                
                
                $conn = getConnection();
                $sql = "select * from announcement";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result))
                {
                echo '<div class="container" style="text-align: center;">';    
                echo '<div class="card" > ';
                echo '<div class="card-body">';
                echo '<h4 class="card-title">';
                echo$row['header'];
                echo'</h4>';

                echo '<h6 class="text-muted card-subtitle mb-2">Posted on: ';
                $date=date('d/m/Y', strtotime($row['posttime']));

                echo $date;
                echo '</h6><p class="card-text">';
                echo$row['body'];
                echo'</p>';

               

                echo "<a class=\"btn btn-primary\" href=\"update.php?id={$row['id']}\" role=\"button\">Update</a> ";
                echo "<a class=\"btn btn-danger\" href=\"../controller/deletePost.php?id={$row['id']}\" role=\"button\">Delete</a>";
                echo '</div>';
                echo '</div>';
                echo '</div>';
        
                }
                
            }
            ?>
            
                
            </div>
        </div>
    </nav>


   
    

<?php 
include('footer.php');
 ?>