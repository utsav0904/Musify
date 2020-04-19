<?
session_start();
session_unset();
session_destroy();
ob_start();
header("location:register.php");
ob_end_flush(); 
include 'register.php';
exit();
?>