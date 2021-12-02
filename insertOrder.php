<?php
        session_start();
         $custID=$_SESSION["CustID"];
		 $ordID=$_SESSION["OrderID"];
		 $total=$_POST["total"]; 
		 $dis=$_POST["discount"];
		 $pay=0.0;
		 $disco="";
		 
		$free = "FREEMEALS";
			if ($dis == $free)
			{
				$pay=$total-5.00;
				$disco="yes";
			}else{
				$pay=$total;
				$disco="no";
			}
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
		
		
		
		
		
        
		$sql = mysqli_query($conn,"UPDATE ADDTOCART SET order_id = '" . $ordID . "' WHERE cart_status = 'yes' AND cust_id ='" . $custID . "' " );
		
		//INSERT INTO `wishlist` (`wish_id`, `food_id`, `cust_id`) VALUES (NULL, '11', '1');
		
		if ($conn->query($sql) === TRUE) {
			echo "New records created successfully";
			
		} else {
			//echo "Error: " . $sql . "<br>" . $conn->error;
			mysqli_query($conn,"UPDATE ADDTOCART SET cart_status = 'no' WHERE order_id = '" . $ordID . "'  " );
			mysqli_query($conn,"UPDATE ORD SET ord_status = 'process', ord_discount='" . $disco . "', ord_total='" . $pay . "' WHERE ord_id = '" . $ordID . "'  " );
			header("Location:checkout.php");
		}


		//if ($conn->query($sql) === TRUE) {
        // echo "Record insert unsuccessfully";
		
        //} else {
        //  header("Location:home.php");
        //}

$conn->close();
        
		 
         


        ?> 