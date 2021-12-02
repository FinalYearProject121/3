<?php
session_start();
unset($_SESSION["CustID"]);
session_destroy();
header("Location:homebefore.php");
?>