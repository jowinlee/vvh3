<?php include('../general/head.php'); session_start(); session_unset(); ?>
    <main style="min-height: 540px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-1 col-sm-3 col-md-3 col-lg-3"></div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 py-5">
                    <?php include('registration.php'); ?>
                </div>
                <div class="col-xs-1 col-sm-3 col-md-3 col-lg-3"></div>
            </div>      
        </div>
    </main>
<?php include('../general/footer.php'); ?>
