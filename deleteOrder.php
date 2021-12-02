<?php
         session_start();
         $custID=$_SESSION["CustID"];
		 $ordID=$_SESSION["OrderID"];
		 
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$sql = mysqli_query($conn,"DELETE FROM ORD WHERE ord_id = '" . $ordID . "'" ); 
		
		if ($conn->query($sql) === TRUE) 
		{
			echo "DELETE records created unsuccessfully";
			
		} else 
		{
				mysqli_query($conn,"DELETE FROM ADDTOCART WHERE order_id = '" . $ordID . "'" ); 
				mysqli_query($conn,"INSERT INTO ORD (ord_status, cust_id) VALUES ( 'new', '" . $custID . "')" );
					$result3 = mysqli_query($conn,"SELECT * FROM ORD WHERE ord_status='new' AND cust_id='" . $custID ."'");
				
					if ($result3->num_rows > 0) 
					{
						while($row3  = mysqli_fetch_array($result3)) 
						{
							$_SESSION["OrderID"] = $row3['ord_id'];
						}
					}
				header("Location:home.php");
		}
$conn->close();
        
		 
         


        ?> 