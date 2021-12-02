<?php
        session_start();
         $custID=$_SESSION["CustID"];
		 $foodID=$_GET["foodID"]; 
		 
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$sql = mysqli_query($conn,"INSERT INTO WISHLIST (food_id, cust_id) VALUES ( '" . $foodID . "', '" . $custID . "')" );
		
		//INSERT INTO `wishlist` (`wish_id`, `food_id`, `cust_id`) VALUES (NULL, '11', '1');
		
		if ($conn->query($sql) === TRUE) {
			echo "New records created successfully";
			
		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			header("Location:home.php");
		}


		//if ($conn->query($sql) === TRUE) {
        // echo "Record insert unsuccessfully";
		
        //} else {
        //  header("Location:home.php");
        //}

$conn->close();
        
		 
         


        ?> 