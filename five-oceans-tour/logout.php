<?php
session_start();
unset($_SESSION["loggedin"]);
unset($_SESSION["name"]);
header("Location:index.php");
?>