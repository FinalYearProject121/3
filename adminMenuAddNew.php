<?php
        $name=$_POST["name"];
		$image=$_POST["image"];
		$description=$_POST["description"];
		$price=$_POST["price"];
		$calories=$_POST["calories"];
		$status=$_POST["status"];
		$type=$_POST["type"]; 
		 
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$sql = mysqli_query($conn,"INSERT INTO FOOD (food_name, food_price, food_image, food_description, food_status, food_cals, food_type ) VALUES ( '" . $name . "', '" . $price . "', 'images/" . $image . "', '" . $description . "', '" . $status . "', '" . $calories . "', '" . $type . "')" );
		
		//INSERT INTO `wishlist` (`wish_id`, `food_id`, `cust_id`) VALUES (NULL, '11', '1');
		
		if ($conn->query($sql) === TRUE) {
			echo "New records created successfully";
			
		} else {
			
			echo "<script>alert('Insert Menu Succesfull');document.location='adminMenu.php'</script>";
			
		}


		//if ($conn->query($sql) === TRUE) {
        // echo "Record insert unsuccessfully";
		
        //} else {
        //  header("Location:home.php");
        //}

$conn->close();
        
		 
         


        ?> 