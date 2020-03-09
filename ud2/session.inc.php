<?php
function check_login() {
    if (!isset ($_SESSION['uid']) || !$_SESSION['uid']) {
        echo "not loggedin";
    /* Si no hay UID en la cookie, redirigimos al Login*/
    header('Location: /ax/ex791-login.php');
    }
    else{
        echo "loggedin";
    }
} 
ini_set ('session.use_cookies', 1);
ini_set ('session.use_only_cookies', 1);
session_start ();
echo "session started";
//echo PHP_SESSION_DISABLED;
?>