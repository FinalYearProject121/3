<?php
        session_start(); 
		 $cartID=$_GET["cartID"]; 
		 
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$sql = mysqli_query($conn,"DELETE FROM ADDTOCART WHERE cart_id = '" . $cartID . "'" );
		
		//INSERT INTO `wishlist` (`wish_id`, `food_id`, `cust_id`) VALUES (NULL, '11', '1');
		
		if ($conn->query($sql) === TRUE) {
			echo "DELETE records created successfully";
			
		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			header("Location:testadd.php");
		}


		//if ($conn->query($sql) === TRUE) {
        // echo "Record insert unsuccessfully";
		
        //} else {
        //  header("Location:home.php");
        //}

$conn->close();
        
		 
         


        ?> 