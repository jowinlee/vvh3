<?php
    include('../functions/functions.php');

    session_start();    
    $_SESSION['template'] = $_POST["template"];
    $firstname = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : 'novalue';
    $lastname = isset($_SESSION['lastname']) ? $_SESSION['lastname'] : 'novalue';
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'novalue';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'novalue';
    $template_id = isset($_SESSION['template']) ? $_SESSION['template'] : 'novalue';



    if ($firstname != 'novalue' && $lastname != 'novalue' && $username != 'novalue' && $email != 'novalue' && $template_id != 'novalue') {
        
        $siteName = createSite($template_id);

        $account = $username;

        createCustomerAccount($account,$firstname,$lastname,$email);

        grantAccountAccess($account,$siteName);

        getResetPass($account);

        session_unset();
        die();

    }else{
        echo "Saving is error!!!";
        print_r($_SESSION);
    }
?>