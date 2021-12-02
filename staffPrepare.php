
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

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');

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

.btn{
    margin-top: 1rem;
    display: inline-block;
    font-size: 1.7rem;
    color:#fff;
    background:#641E16;
    border-radius: .5rem;
    cursor: pointer;
    padding:.8rem 3rem;
}

.btn:hover{
    background: #D98880;
    letter-spacing: .1rem;
}

header{
    position: fixed;
    top:0; left: 0; right:0;
    background: #F5B041;
    padding:1rem 7%;
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

.swiper-pagination-bullet-active{
    background:black;
}


#dishes .dishes
{
	background:#F5B041;
}

.dishes .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(28rem, 1fr));
    gap:1.5rem;
	
}

.dishes .box-container .box{
    padding:2.5rem;
    background:#F5B041;
    border-radius: .5rem;
    border:.1rem solid rgba(0,0,0,.2);
    box-shadow: #17202A;
    position: relative;
    overflow: hidden;
    text-align: center;
}

.dishes .box-container .box .fa-heart,
.dishes .box-container .box .fa-eye{
    position: absolute;
    top:1.5rem;
    background:#eee;
    border-radius: 50%;
    height: 5rem;
    width:5rem;
    line-height: 5rem;
    font-size: 2rem;
    color:black;
}

.dishes .box-container .box .fa-heart:hover,
.dishes .box-container .box .fa-eye:hover{
    background: maroon;
    color:#fff;
}

.dishes .box-container .box .fa-heart{
    right:-15rem;
}

.dishes .box-container .box .fa-eye{
    left:-15rem;
}

.dishes .box-container .box:hover .fa-heart{
    right:1.5rem;
}

.dishes .box-container .box:hover .fa-eye{
    left:1.5rem;
}

.dishes .box-container .box img{
    height:17rem;
    margin:1rem 0;
}

.dishes .box-container .box h3{
    color:maroon;
    font-size: 2.5rem;
}

.dishes .box-container .box .stars{
    padding:1rem 0;
}

.dishes .box-container .box .stars i{
    font-size: 1.7rem;
    color:white;
}

.dishes .box-container .box span{
    color:black;
    font-weight: bolder;
    margin-right: 1rem;
    font-size: 2.5rem;
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
    font-size: 2rem;
    color:black;
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

@media (max-width:450px){

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

</style>

<?php
        
		$staffID=$_SESSION["StaffID"];
		 $OrdID=$_POST["orderID"]; 
		 
		
        $conn = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		 mysqli_query($conn,"UPDATE ORD SET ord_status='prepare', staff_id='" . $staffID . "' WHERE ord_id = '" . $OrdID . "'" );
		
		  
        ?> 
</head>


 <body style="background-color:#FEF9E7;">
    
<!-- header section starts      -->

<header>

    <a href="#" class="logo"><i class="fas fa-hamburger"></i>A&Z Fast-Food<i class="fas fa-drumstick-bite"></i> </a>

    <nav class="navbar">
         
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="" id="search-icon"></i>
        <a href="#" class=""></a>
        <a href="#" class="t"></a>
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="#" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<style>
@import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');
 

.login {
  width: 700px;
  padding: 8% 0 0;
  margin: auto;
  font-family: 'Comfortaa', cursive;
}

.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  border-radius: 10px;
  max-width: 600px;
  margin: 0 auto 100px;
  padding: 25px;
  text-align: center;
}

.form input {
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  border-radius: 5px;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  font-family: 'Comfortaa', cursive;
}

.form input:focus {
  background: #dbdbdb;
}

.form button {
  font-family: 'Comfortaa', cursive;
  text-transform: uppercase;
  outline: 0;
  background: #4b6cb7;
  width: 100%;
  border: 0;
  border-radius: 5px;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}

.form button:active {
  background: #395591;
}

.form span {
  font-size: 75px;
  color: #4b6cb7;
}
</style>

<!-- dishes section starts  -->
<br><br><br><br><br> 
<section class="dishes"   style ="background: linear-gradient(90deg, #FCF3CF 0%, #FEF9E7 100%);">

 <?php
         $con = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
		
		$sql = mysqli_query($con,"SELECT * FROM STAFF WHERE staff_id='" . $staffID . "' ");
		
        if ($sql->num_rows > 0) 
		{
			 while($row  = mysqli_fetch_array($sql)) 
			{
				$username=$row['staff_username'];
			}
		}
	?>
	
 <h1 style="font-size:300%">Order Detail <span style="font-size:20px;">(Prepare by : <?php  echo $username;  ?> )</span></h1> 
 

<div style="  width:700px;" class="login">
  <div style="background-color: #f9cd86; width:700px; height:400px;" class="form">
    <form action="staffPrapareToReady.php" method="post">
      <!--letak dkt input format email == pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" -->
      <br><br><br>
	  <h1 style="color:maroon; font-size:40px;" >Prepare Order : <?php echo $OrdID ; ?></h1><br><br>
	    <h2 style="font-size:20px;" ><?php
		$sqlzz = mysqli_query($conn,"SELECT * FROM ADDTOCART INNER JOIN FOOD ON ADDTOCART.food_id = FOOD.food_id WHERE ADDTOCART.order_id ='" . $OrdID . "'");
			$count=1;
			while($rowzz  = mysqli_fetch_array($sqlzz)) 
			{
			   echo $count.".  ".$rowzz['food_name']." (  ".$rowzz['cart_quantity']." )"; ?> <br>   <?php 
			   $count++;
			}
	    ?></h2><br><br>
		<input type="hidden" name="orderID" value="<?php echo $OrdID; ?>" /><br><br>
      <button type="submit" style="background-color:green;color:white;" >Done Prepare, Ready To PickUp</button>
    </form>  
  </div>
</div>


<br><br> 
</section>

<!-- dishes section ends -->





 

<!-- loader part  -->
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>







<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.html"></script>

</body>
</html>