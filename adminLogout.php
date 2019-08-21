<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["brand"]);
unset($_SESSION["type"]);
unset($_SESSION["price"]);
header("Location:adminLogin.php");
?>