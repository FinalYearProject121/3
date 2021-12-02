<?php
        session_start();
         $custID=$_SESSION["CustID"];
		 $foodID=$_POST["myFood"]; 
		 $quan=$_POST["quantity"]; 
		 
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
		
		$result2 = mysqli_query($conn,"SELECT * FROM ORD WHERE ord_status='process' AND cust_id='" . $custID ."'");
        
		
		
		 if ($result2->num_rows > 0) 
		{
			header("Location:checkout.php");
		}	
		else 
		{
			$sql = mysqli_query($conn,"INSERT INTO ADDTOCART (cart_quantity, cart_status, cust_id, food_id, order_id) 
								    VALUES ( '" . $quan . "', 'yes', '" . $custID . "','" . $foodID . "', NULL)" );
			
			if ($conn->query($sql) === TRUE) {
			echo "New records created unsuccessfully";
			
		} else {
			
			header("Location:wishlist.php");
		}
			
		}



$conn->close();
        
		 
         


        ?> 