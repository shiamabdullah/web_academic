<?php 
$title = "Login";
require_once('header.php');

?>
 
</nav>

<section class="login-clean">
        <form method="post" action="../controller/logcheck.php">
        <!-- <h4 class="text-center"><strong>Login</strong></h4> -->
            <div class="illustration"> <h4 class="text-center" style="color: var(--bs-indigo);"><strong>Login</strong></h4> <i class="icon ion-ios-navigate" style="color: var(--bs-indigo);"></i></div>
            <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username"></div>
            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" name="submit" value="Submit"style="color: var(--bs-light);background: var(--bs-indigo);">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a>
        </form>
</section>


<?php 
include('footer.php');
 ?>