<?php
    session_start();
	
    if(count($_POST)>0) 
	{
        $con = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$username = $_POST["username"];
		$password =$_POST["password"];
		
		
		if($username == 'admin' && $password == 'admin')
		{
			$_SESSION["AdminID"] = 'admin';
			header("Location:adminMenu.php");
		}
		else
		{
			$result = mysqli_query($con,"SELECT * FROM STAFF WHERE staff_username='" . $username . "' and staff_password = '".$password ."'");
        
			if ($result->num_rows > 0) 
			{
				while($row  = mysqli_fetch_array($result)) 
				{
					
					$_SESSION["StaffID"] = $row['staff_id'];
					if($row['staff_position'] == 'kitchen')
					{
						header("Location:staffMain.php");
					}
					else if($row['staff_position'] == 'delivery')
					{
						header("Location:staffMain2.php");
					}
				}
			}
			else 
			{
				echo "<script>alert('Sorry invalid username or password');document.location='staffLogin.php'</script>";
			}
		
		}
    }
	
?>