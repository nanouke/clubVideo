<?php
/**
 * Created by PhpStorm.
 * User: Paul Rancourt
 * Date: 3/30/2017
 * Time: 9:01 AM
 */

    if(isset($_POST['logout'])){
        session_start();

        // Reinitialise le array de session
        $_SESSION = array();

        // Detruit la session
        session_destroy();
        echo 'Logged Out';
    }

?>