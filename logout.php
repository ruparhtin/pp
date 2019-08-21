<?php
session_start();
unset($_SESSION["userName"]);
unset($_SESSION["password"]);
unset($_SESSION["email"]);
header("Location:login.php");
?>