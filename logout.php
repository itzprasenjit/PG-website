<?php
session_start();
session_destroy();
echo '<script>';
echo 'alert("Logout successful");';
echo 'window.location.href = "login.php";';
echo '</script>';
?>
