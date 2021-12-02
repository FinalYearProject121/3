<?php
require_once("DBController.php");
$db_handle = new DBController();
//$con = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
//$result = mysqli_query($con,"SELECT * FROM CUSTOMER WHERE cust_username='" . $username . "' and cust_password = '".$password ."'");
        
		
		
		//$query = mysqli_query($con,"SELECT * FROM customer WHERE cust_username='" . $_POST["username"] . "'");

if(!empty($_POST["username"])) {
  $query = "SELECT * FROM customer WHERE cust_username='" . $_POST["username"] . "'";
  $user_count = $db_handle->numRows($query);
  if($user_count>0) {
      echo "<span class='status-not-available'> Username Not Available.</span>";
  }else{
      echo "<span class='status-available'> Username Available.</span>";
  }
}

if(!empty($_POST["email"])) {
  $query = "SELECT * FROM customer WHERE cust_email='" . $_POST["email"] . "'";
  $user_count = $db_handle->numRows($query);
  if($user_count>0) {
      echo "<span class='status-not-available'> Email Not Available.</span>";
  }else{
      echo "<span class='status-available'> Email Available.</span>";
  }
}
?>