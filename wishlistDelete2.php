<?php
        session_start(); 
		 $foodID=$_GET["foodID"]; 
		 
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$sql = mysqli_query($conn,"DELETE FROM WISHLIST WHERE food_id = '" . $foodID . "'" );
		
		//INSERT INTO `wishlist` (`wish_id`, `food_id`, `cust_id`) VALUES (NULL, '11', '1');
		
		if ($conn->query($sql) === TRUE) {
			echo "DELETE records created successfully";
			
		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			header("Location:wishlist.php");
		}


		//if ($conn->query($sql) === TRUE) {
        // echo "Record insert unsuccessfully";
		
        //} else {
        //  header("Location:home.php");
        //}

$conn->close();
        
		 
         


        ?> 