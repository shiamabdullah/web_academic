
        <center>
        Copyright Property 
        </center>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/bootstrap/js/sweetalert.min.js"></script>
        <?php 
        if (isset($_SESSION['stat']) && $_SESSION['stat']!=''){
        ?>
        <script>
        swal({
            title: "<?php echo $_SESSION['stat'] ;?>",
            //text: "You clicked the button!",
            icon: "<?php echo $_SESSION['stat_code'] ;?>",
            button: "Ok. Done",
            });
        </script>
        <?php
        
        unset($_SESSION['stat']);


    }

    ?>
    </body>
    </html>
