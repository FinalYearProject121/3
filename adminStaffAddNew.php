<?php
        $phone=$_POST["phone"];
        $username=$_POST["username"];
		$email=$_POST["email"];
		$address=$_POST["address"];
		$position=$_POST["position"];
		$password=$_POST["password"]; 
		 
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$sql = mysqli_query($conn,"SELECT * FROM STAFF WHERE staff_username='" . $username . "'");
		
		if ($sql->num_rows > 0) 
		{
			echo "<script>alert('sorry the username is unavailable');document.location='adminStaffAdd.php'</script>";
		}
		else
		{
			$sql2 =  mysqli_query($conn,"INSERT INTO STAFF (staff_username, staff_phone, staff_email, staff_address, staff_password, staff_position ) VALUES ( '" . $username . "','" . $phone . "', '" . $email . "', '" . $address . "', '" . $password . "', '" . $position . "')" );
		
		if ($conn->query($sql2) === TRUE) {
			echo "New records created successfully";
			
		} else {
			
			echo "<script>alert('Insert Staff Succesfull');document.location='adminStaff.php'</script>";
			
		}
		}


$conn->close();
        
		 
         


        ?> 