<?php
        
		 $rateID=$_GET["rateID"]; 
		 
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$sql = mysqli_query($conn,"DELETE FROM RATING WHERE rate_id = '" . $rateID . "'" );
		
		
		if ($conn->query($sql) === TRUE) {
			echo "DELETE records created unsuccessfully";
			
		} else {
			echo "<script>alert('Delete Succesfull');document.location='adminCustReview.php'</script>";
			 
		}



$conn->close();
        
		 
         


        ?> 