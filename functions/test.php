<?php	
    session_start();
    $_SESSION['template'] = htmlentities($_POST['template']);

    $firstname = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : 'novalue';
    $lastname = isset($_SESSION['lastname']) ? $_SESSION['lastname'] : 'novalue';
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : 'novalue';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'novalue';
    $template_id = isset($_SESSION['template']) ? $_SESSION['template'] : 'novalue';

    print_r($_SESSION);
?>