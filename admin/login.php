<?php
include_once 'holder.php';
$authenticated = isset($_POST['auth']) ? holder() == $_POST['auth'] : FALSE;
if($authenticated){
    session_start();
    $_SESSION['authenticated'] = TRUE;
}   
print $authenticated;
?>