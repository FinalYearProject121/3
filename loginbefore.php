<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
    $message="";
    if(count($_POST)>0) 
	{
        $con = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$username = $_POST["username"];
		$password =$_POST["password"];
		$result = mysqli_query($con,"SELECT * FROM CUSTOMER WHERE cust_username='" . $username . "' and cust_password = '".$password ."'");
        $row  = mysqli_fetch_array($result);
		
		
        if(is_array($row)) 
		{
			$_SESSION["CustID"] = $row['cust_id'];
				
				$result2 = mysqli_query($con,"SELECT * FROM ORD WHERE ord_status='process' AND cust_id='" . $row['cust_id'] ."'");
				$result4 = mysqli_query($con,"SELECT * FROM ORD WHERE ord_status='new' AND cust_id='" . $row['cust_id'] ."'");
			    if ($result2->num_rows > 0) 
				{
					while($row2  = mysqli_fetch_array($result2)) 
					{
						$_SESSION["OrderID"] = $row2['ord_id'];
					}
				}
				else if ($result4->num_rows > 0) 
				{
					while($row4  = mysqli_fetch_array($result4)) 
					{
						$_SESSION["OrderID"] = $row4['ord_id'];
					}
				}
				else
				{
					mysqli_query($con,"INSERT INTO ORD (ord_status, cust_id) VALUES ( 'new', '" . $row['cust_id'] . "')" );
					$result3 = mysqli_query($con,"SELECT * FROM ORD WHERE ord_status='new' AND cust_id='" . $row['cust_id'] ."'");
				
					if ($result3->num_rows > 0) 
					{
						while($row3  = mysqli_fetch_array($result3)) 
						{
							$_SESSION["OrderID"] = $row3['ord_id'];
						}
					}
				}
        } 
		else 
		{
         $message = "Invalid Username or Password!";
        }
    }
	//$expression = $_POST['ign'] || $_POST['email'] ;
    if(isset($_SESSION["CustID"],$_SESSION["OrderID"])) {
    header("Location:home.php");
    }
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A&Z Fast Food</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
<!--//create tasbar & icon   -->
<!-- header section starts -->

:root{
    --green:#27ae60;
    --black:#192a56;
    --light-color:#666;
    --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
}

*{
    font-family: 'Nunito', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none; border:none;
    text-transform: capitalize;
    transition: all .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 5.5rem;
    scroll-behavior: smooth;
}

section{
    padding:2rem 9%;
}

section:nth-child(even){
    background:#eee;
}

.sub-heading{
    text-align: center;
    color:#F39C12;
    font-size: 3rem;
    padding-top: 1rem;
}

.heading{
    text-align: center;
    color:maroon;
    font-size: 4rem;
    padding-bottom: 2rem;
    text-transform: uppercase;
}



header{
    position: fixed;
    top:0; left: 0; right:0;
    background: #F5B041;
    padding:.1rem 7%;
	padding-top:10px;
	padding-bottom:10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    box-shadow: var(--box-shadow);
}

header .logo
{
    color:black;
    font-size: 3rem;
    font-weight: bolder;
}

header .logo i
{
    color:maroon;
}

                    /*tulisan atas sekali*/
header .navbar a{
    font-size: 2rem;
    border-radius: .5rem;
    padding:.5rem 1.5rem;
    color:maroon;
	text-align: center;
}

header .navbar a.active,
header .navbar a:hover
{
    color:#fff;
    background: maroon;
}

header .icons i,
header .icons a{
    cursor: pointer;
    margin-left: .5rem;
    height:4.5rem;
    line-height: 4.5rem;
    width:4.5rem;
    text-align: center;
    font-size: 2rem;
    color:black;
    border-radius: 50%;
    background: #eee;
}

header .icons i:hover,
header .icons a:hover{
    color:#fff;
    background: maroon;
    transform: rotate(360deg);
}

header .icons #menu-bars{
    display: none;
}

#search-form{
    position: fixed;
    top:-110%; left:0; 
    height:100%; width:100%;
    z-index: 1004;
    background:rgba(0,0,0,.8);
    display: flex;
    align-items: center;
    justify-content: center;
    padding:0 1rem;
}

#search-form.active{
    top:0;
}

#search-form #search-box{
    width:50rem;
    border-bottom: .1rem solid #fff;
    padding:1rem 0;
    color:#fff;
    font-size: 3rem;
    text-transform: none;
    background:none;
}

#search-form #search-box::placeholder{
    color:#eee;
}

#search-form #search-box::-webkit-search-cancel-button{
    -webkit-appearance: none;
}

#search-form label{
    color:#fff;
    cursor:pointer;
    font-size: 3rem;
}

#search-form label:hover{
    color:var(--green);
}

#search-form #close{
    position: absolute;
    color:#fff;
    cursor: pointer;
    top: 2rem; right:3rem;
    font-size: 5rem;
}


.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap:1.5rem;
}

.footer .box-container .box h3{
    padding:.5rem 0;
    font-size: 2.5rem;
    color:var(--black);
}

.footer .box-container .box a{
    display: block;
    padding:.5rem 0;
    font-size: 1.5rem;
    color:var(--light-color);
}

.footer .box-container .box a:hover{
    color:var(--green);
    text-decoration: underline;
}

.footer .credit{
    text-align: center;
    border-top: .1rem solid rgba(0,0,0,.1);
    font-size: 3rem;
    color:marron;
    padding:.5rem;
    padding-top: 1.5rem;
    margin-top: 1.5rem;
	background: #F5B041;	
}

.footer .credit span{
    color:maroon;
}

.loader-container{
    position: fixed;
    top:0; left:0;
    height:100%; 
    width:100%;
    z-index: 10000;
    background:#fff;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.loader-container img{
    width:35rem;
}

.loader-container.fade-out{
    top:-110%;
    opacity:0;
}



/* media queries  */

@media (max-width:991px){

    html{
        font-size: 55%;
    }
    
    header{
        padding:1rem 2rem;
    }

    section{
        padding:2rem;
    }


}

@media (max-width:768px){

    header .icons #menu-bars{
        display: inline-block;
    }

    header .navbar{
        position: absolute;
        top:100%; left:0; right:0;
        background:#fff;
        border-top: .1rem solid rgba(0,0,0,.2);
        border-bottom: .1rem solid rgba(0,0,0,.2);
        padding:1rem;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    header .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }

    header .navbar a{
        display: block;
        padding:1.5rem;
        margin:1rem;
        font-size: 2rem;
        background:#eee;
		text-align: center;
    }

    #search-form #search-box{
        width:90%;
        margin:0 1rem;
    }

    .home .home-slider .slide .content h3{
        font-size: 5rem;
    }

}

@media (max-width:1000px){

    html{
        font-size: 50%;
    }

    .dishes .box-container .box img{
        height:auto;
        width: 100%;
		 
    }

    .order form .inputBox .input{
        width:100%;
    }

}





p {
  font-size: 16px;
}

h2 {
  font-size: 20px;
}

@media screen and (max-width: 650px) {
  .column {
    width:100 %;
    display: block;
  }
}
<!--//End create box & image  -->
</style>
</head>



 <body style="background-color:#FEF9E7">

<body>

<header>

    <a href="#" class="logo"><i class="fas fa-hamburger"></i>A&Z Fast-Food<i class="fas fa-drumstick-bite"></i></a>

    <nav class="navbar">
        <a  href="homebefore.php#home">home</a>
		 <a href="homebefore.php#dishes">Our special</a>
        <a href="homebefore.php#menu">Our menu</a>
        <a  href="aboutbefore.php">about Us</a>       
        <a href="homebefore.php#review">review</a>       
		<a  class="active" href="#">Login</a>
    </nav>

     <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i id="search-icon"></i>
       
    </div>
</header>
<!-- header section ends-->


<!-- search form, love add to cart  start -->
<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
<!-- search form, love add to cart  start -->

</head>


<style>
* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
	font-size: 30px;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

.forgot {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 3px solid #D35400;
	background-color: #641E16;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #D35400;
}

form {
	background-color: #F9E79F;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.kotak {
	background-color: #641E16;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 900px;
	max-width: 100%;
	min-height: 600px;
}

.form-kotak {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-kotak {
	left: 0;
	width: 50%;
	z-index: 2;
}

.kotak.right-panel-active .sign-in-kotak {
	transform: translateX(100%);
}

.sign-up-kotak {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.kotak.right-panel-active .sign-up-kotak {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
	
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-kotak {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
	background-color: #2C3E50;
}

.kotak.right-panel-active .overlay-kotak{
	transform: translateX(-100%);
}

.overlay {
	background: #2C3E50;
	background: -webkit-linear-gradient(to right, #FF4B2B, #641E16);
	background: linear-gradient(to right, #641E16, #641E16);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.kotak.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
	background-color: #2C3E50;
}

.overlay-left {
	transform: translateX(-20%);
}

.kotak.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.kotak.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-kotak {
	margin: 20px 0;
}

.social-kotak a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}



</style>




<style> 
 

.demoInputBox
{
	padding:7px; 
	border:#F0F0F0 1px solid; 
	border-radius:4px;
}

.status-available
{
color:#2FC332;
}
.status-not-available
{
	color:#D60202;
}
</style>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function checkAvailability() {
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check_availability.php",
	data:'username='+$("#username").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status").html(data);
		$("#loaderIcon").hide();
	},
	error:function (){}
	});
}
</script>

 <script>
function checkAvailability2() {
	$("#loaderIcon").show();
	jQuery.ajax({
	url: "check_availability.php",
	data:'email='+$("#email").val(),
	type: "POST",
	success:function(data){
		$("#user-availability-status2").html(data);
		$("#loaderIcon").hide();
	},
	error:function (){}
	});
}
</script>



<!------login page---->
<br><br><br><br><br><br>
<h1>Welcome to A&Z fast food</h1>
<div class="kotak" id="kotak">
	<div class="form-kotak sign-up-kotak" id="register">
	

	
	
		<form action="register.php" method="post">
			<h1>Create Account</h1>
			<div class="social-kotak"></div>
			
			<span>please fill in the form</span> 
			<input type="text" name="username" placeholder="Username *" id="username" class="demoInputBox" onBlur="checkAvailability()" required /> <span id="user-availability-status"></span>
			<input type="text" name="email" placeholder="Email *" id="email" class="demoInputBox" onBlur="checkAvailability2()" required /> <span id="user-availability-status2"></span>
			<input type="password" name="password" placeholder="Password *" id="pass1" required />
			<input type="password" name="confirmpassword"  placeholder="Confirm Password *" id="pass2" required />
			<input style="margin-left:-100px;" type="checkbox" onclick="myPassword()"><span style="margin-top:-21px; margin-left:10px;" >Show Password </span>
			<input type="text" name="phone" placeholder="phone no *" required />
			<input type="text" name="address" placeholder="address *" required />
			<button>Sign Up</button>
		</form>
		
		
		
	</div>
	<div class="form-kotak sign-in-kotak">
	
	
	
		<form action="" method="post">
			<h1>Sign in</h1>
			<div class="social-kotak"></div>
			
			<span>please fill in the form</span>
			<input name="username" type="text" placeholder="Username" required />
			<input name="password" type="password" placeholder="Password" id="pass" required />
			<input style="margin-left:-100px;" type="checkbox" onclick="myPassword()"><span style="margin-top:-21px; margin-left:10px;" >Show Password </span>
			<div class= "forgot" href="#">Forgot your password?</div>
			<button>Sign In</button>
		</form>
		
		
		
	</div>
	<div class="overlay-kotak">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>




<!-- loader part  -->
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>


<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const kotak = document.getElementById('kotak');

signUpButton.addEventListener('click', () => {
	kotak.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	kotak.classList.remove("right-panel-active");
});
</script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.html"></script>

<script>

function myPassword() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  
   var x = document.getElementById("pass1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  
   var x = document.getElementById("pass2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
</html>
