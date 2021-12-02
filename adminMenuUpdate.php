<?php
        
		$name=$_POST["name"];
		$image=$_POST["image"];
		$description=$_POST["description"];
		$price=$_POST["price"];
		$calories=$_POST["calories"];
		$available=$_POST["available"];
		$id=$_POST["id"];
		$type=$_POST["type"];
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		if (empty($image))
		{
			$sql = mysqli_query($conn,"UPDATE FOOD SET  food_name='" . $name . "', food_price='" . $price . "',food_description='" . $description . "', food_cals='" . $calories . "', food_status='" . $available . "', food_type='" . $type . "' WHERE food_id=" . $id );
		
		}else
		{
			$sql = mysqli_query($conn,"UPDATE FOOD SET  food_name='" . $name . "', food_price='" . $price . "',food_description='" . $description . "', food_cals='" . $calories . "', food_status='" . $available . "', food_type='" . $type . "', food_image='" . $image . "' WHERE food_id=" . $id );
		}
		
		if ($conn->query($sql) === TRUE) {
         echo "Record updated unsuccessfully";
		
        } else {
          header("Location:adminMenu.php");
        }

$conn->close();
        
		 
         


        ?> 