<?php
session_start();
unset($_SESSION['varname']);
session_destroy();
header("location:purchase1.php");
?>
