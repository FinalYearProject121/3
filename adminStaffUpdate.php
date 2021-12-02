<?php
        
		$phone=$_POST["phone"];
		$email=$_POST["email"];
		$address=$_POST["address"];
		$position=$_POST["position"];
		$password=$_POST["password"]; 
		$id=$_POST["id"]; 
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		 
			$sql = mysqli_query($conn,"UPDATE STAFF SET  staff_phone='" . $phone . "', staff_email='" . $email . "',staff_address='" . $address . "', staff_position='" . $position . "', staff_password='" . $password . "' WHERE staff_id=" . $id );
		 
		
		if ($conn->query($sql) === TRUE) {
         echo "Record updated unsuccessfully";
		
        } else {
          header("Location:adminStaff.php");
        }

$conn->close();
        
		 
         


        ?> 