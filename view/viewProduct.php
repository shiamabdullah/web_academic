<?php ;
$title='View Products';
require_once('header.php');

require_once('../model/db.php');
require_once('../model/product.php');
$conn = getConnection();

?>
</nav>


	<center>
        <h2>View Products</h2>
    </center>
    <table class="data-table"  align="center" cellpadding="8" width=50% border="1">
      <thead>
  <tr>
			      <td>ID</td>
			      <td>NAME</td>
            <td>Description<br></td>
            <td>Category</td>
            <td>Price<br></td>
            <td>Image </td>     
		</tr>
    </thead>      
    <tbody>
        <?php $sql = "select * from product";
    	  $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result))
        { print_r($row);
            ?>
              <tr>
              <td><?php echo $row['P_ID']; ?></td>
                <td><?php echo $row['P_Name']; ?></td>
                <td><?php echo $row['P_Desc']; ?></td>
                <td><?php echo $row['P_Cate']; ?></td>
                <td><?php echo $row['P_Price']; ?></td>
                <td><img src="<?php echo $row['P_image']; ?>" width="150px" height="150px"></td>
               
              </tr>	 
            <?php
            }
            ?>
            </tbody>
            </table>


<?php 
      echo $row['P_image'];

include('footer.php');
?>