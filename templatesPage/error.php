<?php include('../general/head.php'); ?>
    <?php session_start();  session_unset(); ?>
    <div class="container">
       <h2 class="text-danger mt-5">Sorry your user account name doesn't Exist! Please Try Again.</h2> 
       <a href="index.php">Back to Templates</a>
       <br>
       <h4>Dont have an Account?</h4>
       <a href="../registrationPage/index.php">Create Account</a>
    </div>
<?php include('../general/footer.php'); ?>
