<?php
session_start();
unset($_SESSION["StaffID"]);
session_destroy();
header("Location:staffLogin.php");
?>