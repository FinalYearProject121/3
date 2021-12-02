<?php
        session_start();
		$staffID=$_SESSION["StaffID"];
		 $OrdID=$_POST["orderID"];  
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$sql = mysqli_query($conn,"UPDATE ORD SET ord_status='ReadyToPickup', staff_id='" . $staffID . "' WHERE ord_id = '" . $OrdID . "'" );
		
		
		if ($conn->query($sql) === TRUE) {
			echo "update records created unsuccessfully";
			
		} else {
			 
			//echo "<script>alert('Delete Succesfull');document.location='staffReadyToPickup.php?OrderID=".$OrdID."'</script>";
			header("Location:staffMain.php");  
		}



$conn->close();
        
		 
         


        ?> 