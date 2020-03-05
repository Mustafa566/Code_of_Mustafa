<?php

//home.php

/**
 * Start the session.
 */
session_start();


/**
 * Check if the user is logged in.
 */
if(!isset($_SESSION['user_id']) || !isset($_SESSION['logged_in'])){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: ../index.html');
    exit;
}

session_destroy();

/**
 * Print out something that only logged in users can see.
 */

header('Location: ../index.html');