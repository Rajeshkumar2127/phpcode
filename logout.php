<?php 
session_start();
unset($_SESSION['users_name']);
header("Location: index.php");

?>