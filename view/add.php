<?php 
$title = "Add Post";
require_once('header.php');
require_once('../model/announce.php');
?>
 </nav>
 <div class="container" style="text-align: center;">
     
        <form method="post" action="../controller/addcheck.php" enctype="multipart/form-data">

        <div class="illustration" ></div>
            <div class="mb-3">
                <h4 class="text-center">Add Post</h4>
            </div>
            <div class="mb-3"><span>Name: </span><input class="form-control" type="text" value="" name="productName"></div>
            <div class="mb-3"><span>Description:</span><input class="form-control" type="text" value="" name="description"></div>
            <div class="mb-3"><span>Category:</span><input class="form-control" type="text" value="" name="category"></div>
            <div class="mb-3"><span>Price:</span><input class="form-control" type="text" value="" name="price"></div>
           
            <div class="mb-3">

                <span>Image </span>

                <img src="../view/assets/img/meeting.jpg" id="previewImg" width="150px">
                <input class="btn btn-success" type="file" name="file" id="file" onchange="document.getElementById('previewImg').src = window.URL.createObjectURL(this.files[0])">

            </div>
            
            <div class="mb-1">
                
            <button class="btn btn-success d-block w-100" type="submit" name="submit">Add Product</button></div>

        </form>
 </div>
      

<?php 
include('footer.php');
 ?>