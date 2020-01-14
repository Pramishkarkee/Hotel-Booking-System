<?php
session_start();
unset($_SESSION['email']);
echo"logout successfully";
header('location:index.php');
?>