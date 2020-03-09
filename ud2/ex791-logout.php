<?php
session_start();
$_SESSION = array();
session_destroy();
header('Location: /ax/ex791-login.php');
?>