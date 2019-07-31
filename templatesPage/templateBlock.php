<?php
	echo '
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-3 template-block">
		<div class="card">
		  	<div class="view overlay">
		    	<img class="card-img-top img-fluid" src="' . $template->thumbnail_url . '" alt="Card image cap">
		    	<a href="' . $template->preview_url . '" data-template-id="' . $template->template_id . '">
		      		<div class="mask rgba-white-slight"></div>
		    	</a>
		  	</div>
		  	<div class="card-body">
		    	<h5 class="card-title">' . $template->template_name . '</h5>';?>
		    	<?php
		    		$firstname = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : 'novalue';
				    $lastname = isset($_SESSION['lastname']) ? $_SESSION['lastname'] : 'novalue';
				    $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'novalue';
				    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'novalue';
				    if ($firstname == 'novalue' && $lastname == 'novalue' && $username == 'novalue' && $email == 'novalue') {
				    	$action = 'templateForm.php';
				    }elseif ($firstname != 'novalue' && $lastname != 'novalue' && $username != 'novalue' && $email != 'novalue') {
				    	$action = '../registrationPage/processRegistration.php';
				    }
		    	?>
		    	<form method="post" action="<?php echo $action; ?>">
                    <input type="text" name="template" id="template" hidden="hidden" value="<?php echo $template->template_id; ?>">
                    <button type="submit" class="btn peach-gradient">Select</button>
                </form><?php echo '
		  	</div>
		</div>
	</div>';
?>
