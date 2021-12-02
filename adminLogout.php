<?php
session_start();
unset($_SESSION["AdminID"]);
session_destroy();
header("Location:staffLogin.php");
?>