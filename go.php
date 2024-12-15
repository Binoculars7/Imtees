<?php

$error_msg = "error input";
$_SESSION['error'] = $error_msg;

if ($_SESSION['error'] != '') {
    $incoming_error = $_GET['error'];
    
}


?>