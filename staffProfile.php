
<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
	?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A&Z Fast Food</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" >

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
<style>

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

<!--//End create box & image  -->
</style>




 

<body>

<header>

    <a href="#" class="logo"><i class="fas fa-hamburger"></i>A&Z Fast-Food<i class="fas fa-drumstick-bite"></i>(staff - kitchen)</a>

    <nav class="navbar">
        <a  href="staffMain.php">New Order to Prepare</a>
         <a href="staffReadyOrder.php">Order ready to Delivery</a>
		<a href="stafflogout.php">Logout</a>
    </nav>

	<div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
		<a style="color:#fff;background: maroon;" href="staffProfile.php" class="fas fa-user" id="user"></a>
        <i class="" id="search-icon"></i>
        <a href="#" class=""></a>
        <a href="#" class="t"></a>
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->
 
<form action="search.php" method="post" id="search-form">
    <input type="search" placeholder="search here..." name="cari" id="search-box">
	<button class="button2" type="submit"  ><i style="color:white; " class="fas fa-search fa-3x"></i> </button>
    <!-- <label for="search-box"  href="search.php" class="fas fa-search"></label> -->
    <i class="fas fa-times" id="close"></i>
</form>
<!-- search form, love add to cart  start -->



<style>


html, body 
      {
      min-height: 100%;
      }
	  
      body, div, form, input, select, p 
	  { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: black;
      }
	  
      body 
	  {
      background: url("images/login.jpg") no-repeat center;
      background-size: cover;
      }
	  
      h1, h2 
	  {
      text-transform: uppercase;
      font-weight: 400;
      }
	  
      h2 
	  {
      margin: 0 0 0 8px;
      }
	  
      .main-block 
	  {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 350px;
      background: rgba(0, 0, 0, 0.5); 
      }
	  
      .left-part, form 
	  {
      padding: 25px;
      }
	  
      .left-part 
	  {
      text-align: center;
      }
	  
      .fa-user-circle
	  {
      font-size: 420px;
	    color: #F8C471;
      }
	  
      form 
	  {
      background: #FCF3CF; 
	  width: 60%
	    
      }
	  
      
      .info 
	  {
      display: flex;
      flex-direction: column;
	  color: black;
	  
	    
      }
	  
	  
      input, select 
	  {
      padding: 10px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid black;
      }
	  
	  
      input::placeholder 
	  {
      color: black;
      }
  
	  
      .btn-item, button 
	  {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #641E16; 
      text-decoration: none;
      font-size: 17px;
      font-weight: 400;
      color: #F5B041;
	  
      }
	  

      button 
	  {
      width: 40%;
	 
      }
	  
      button:hover, .btn-item:hover 
	  {
      background: #F1948A;
      }
	  
  @media (min-width: 568px) 
   {
      html, body 
	  {
      height: 100%;
      }
      .main-block 
	  {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form 
	  {
      flex: 1;
      height: auto;
      }
    }
</style>

<?php
     
    $staffID=$_SESSION["StaffID"];
    
	$con = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
       
        $result = mysqli_query($con,"SELECT * FROM STAFF WHERE staff_id='" . $staffID . "'");
        
        while($row  = mysqli_fetch_array($result)) 
		{
        $username = $row['staff_username'];
        $phone = $row['staff_phone'];
		$email = $row['staff_email'];
        $address = $row['staff_address'];
		$password = $row['staff_password']; 
        } 
		  
?>
 
		
<br><br><br>
 <div class="main-block">
      <div class="left-part">
        <i class="fas fa-user-circle"></i>
        <p style="font-size:40px;"><b> <?php echo $username ; ?> </b> </p>
        
      </div>
      <form action="staffProfileUpdate.php" method="post">
       
        <div style="width:400px;" class="info" >
          
          <b>Email</b> <input type="text" name="email" value="<?php echo $email ; ?>"> 
          <b>Phone Number</b><input type="text" name="phone" value="<?php echo $phone ; ?>">
          <b>Address</b><input type="text" name="address" value="<?php echo $address ; ?>">
          <b>Password</b><input type="password" name="password" value="<?php echo $password ; ?>" id="pass">
		  <input style="margin-left:10px;" type="checkbox" onclick="myPassword()"><span style="margin-top:-45px; margin-left:30px;" >Show Password </span>
		</div>
       
        <button type="submit" >Update profile</button>
      </form>
    </div>




</head>
<!-- loader part  -->
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>

<script>

function myPassword() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
   
}
</script>
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


</body>
</html>
