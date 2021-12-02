<?php
        
		 $FoodID=$_GET["FoodID"]; 
		 
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$sql = mysqli_query($conn,"DELETE FROM FOOD WHERE food_id = '" . $FoodID . "'" );
		
		
		if ($conn->query($sql) === TRUE) {
			echo "DELETE records created unsuccessfully";
			
		} else {
			echo "<script>alert('Delete Succesfull');document.location='adminMenu.php'</script>";
			 
		}



$conn->close();
        
		 
         


        ?> 