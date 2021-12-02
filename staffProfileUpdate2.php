<?php
        session_start();
         $staffID=(int)$_SESSION["StaffID"];
		
		$email=$_POST["email"];
		$phone=$_POST["phone"];
		$address=$_POST["address"];
		$password=$_POST["password"];
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$sql = mysqli_query($conn,"UPDATE STAFF SET  staff_email='" . $email . "', staff_phone='" . $phone . "',staff_address='" . $address . "', staff_password='" . $password . "' WHERE staff_id=" . $staffID );
		
		if ($conn->query($sql) === TRUE) {
         echo "Record updated unsuccessfully";
		
        } else {
          header("Location:staffProfile2.php");
        }

$conn->close();
        
		 
         


        ?> 