<?php include('../general/head.php'); ?>
    <?php session_start();  session_unset(); ?>
    <div class="container">
       <h2 class="text-danger mt-5">Sorry User Account Already Exist! Please Try Again.</h2> 
       <a href="index.php">Back to form</a>
       <br>
       <h4>Already has an Account?</h4>
       <a href="../templatesPage/index.php">Go to Templates</a>
    </div>
<?php include('../general/footer.php'); ?>
