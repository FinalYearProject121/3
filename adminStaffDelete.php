<?php
        
		 $staffID=$_GET["staffID"]; 
		 
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$sql = mysqli_query($conn,"DELETE FROM STAFF WHERE staff_id = '" . $staffID . "'" );
		
		
		if ($conn->query($sql) === TRUE) {
			echo "DELETE records created unsuccessfully";
			
		} else {
			echo "<script>alert('Delete Succesfull');document.location='adminStaff.php'</script>";
			 
		}



$conn->close();
        
		 
         


        ?> 