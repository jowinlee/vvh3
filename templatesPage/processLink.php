<?php include('../general/head.php'); ?>
<?php include('../functions/functions.php'); ?>
    <div class="container">
	    <?php 
	    	session_start();

	    	$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'novalue';
	    	$template_id = isset($_SESSION['template']) ? $_SESSION['template'] : 'novalue';

	    	$accountData = json_decode(getEmail($username));

	    	$email = $accountData->email;

	    	if (!empty($username && $template_id && $email)) {

		    	$siteName = createSite($template_id);

	            $account = $username;

	            grantAccountAccess($account,$siteName);

	            $link = getSSOLink($account,$siteName,'EDITOR');
	            $subject = 'Your Website Link.';
	            $headers ="From: denzdesu@gmail.com" . "\r\n" . "CC: denzdesu@gmail.com";


	            if ( mail($email, $subject, $link, $headers)) {
				    echo 'Email successfully sent to' .$email;
				} else {
				    echo("Email sending failed...");
				    print_r($link);
				    session_unset();
				}

	            die();
	            session_unset();
	    	}else{
	    		echo '
				    <h2 class="text-danger">Email Error!</h2>
				    <a href="index.php">Back to Templates</a>
	    		';
	    	}
	    		 
	    ?>    
    </div>
<?php include('../general/footer.php'); ?>
