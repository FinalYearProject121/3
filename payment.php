<?php
        session_start();
         $custID=$_SESSION["CustID"];  
		$ordID=$_SESSION["OrderID"];
		
		
		date_default_timezone_set("Asia/Kuala_Lumpur");
		$date = date("d/m/Y")." ".date("h:i:sa");
		
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$sql = mysqli_query($conn,"UPDATE ORD SET  ord_status='(Paid)Process', ord_datetime='" . $date . "' WHERE ord_id='" . $ordID."'" );
		
		if ($conn->query($sql) === TRUE) {
         echo "Record updated unsuccessfully";
		
        } else {
			
			mysqli_query($conn,"INSERT INTO ORD (ord_status, cust_id) VALUES ( 'new', '" . $custID . "')" );
					$result3 = mysqli_query($conn,"SELECT * FROM ORD WHERE ord_status='new' AND cust_id='" . $custID ."'");
				
					if ($result3->num_rows > 0) 
					{
						while($row3  = mysqli_fetch_array($result3)) 
						{
							$_SESSION["OrderID"] = $row3['ord_id'];
						}
					}
          header("Location:checkout.php");
        }

$conn->close();
        
		 
         


        ?> 