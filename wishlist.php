
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

.home .home-slider .slide{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:2rem; 
    padding-top: 9rem;
}

.home .home-slider .slide .content{
    flex:1 1 45rem;
}

.home .home-slider .slide .image{
    flex:1 1 45rem;
}

.home .home-slider .slide .image img{
    width: 100%;
}

.home .home-slider .slide .content span{
    color:#F39C12;
    font-size: 2.5rem;
}

.home .home-slider .slide .content h3{
    color:maroon;
    font-size: 7rem;
}

.home .home-slider .slide .content p{
    color:var(--light-color);
    font-size: 2.2rem;
    padding:.5rem 0;
    line-height: 1.5;
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





.order form{
    max-width:70rem;
    border-radius: .5rem;
    box-shadow: black);
    border:.1rem solid rgba(0,0,0,.5);
    background:#FCF3CF;
    padding:1.5rem;
    margin:0 auto;
	float: center;
}

.order form .inputBox{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.order form .inputBox .input{
    width:49%;
}

.order form .inputBox .input span{
    display:block;
    padding:.5rem 0;
    font-size: 1.5rem;
    color:var(--light-color);
}

.order form .inputBox .input input,
.order form .inputBox .input textarea{
    background:#eee;
    border-radius: .5rem;
    padding:1rem;
    font-size: 1.6rem;
    color:var(--black);
    text-transform: none;
    margin-bottom: 1rem;
    width:100%;
}

.order form .inputBox .input input:focus,
.order form .inputBox .input textarea:focus{
    border:.2rem solid black;
}

.order form .inputBox .input textarea{
    height:20rem;
    resize: none;
}

.order form .btn{
    margin-top: 0;
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


</head>


 <body style="background-color:#FEF9E7;">
    
<!-- header section starts      -->

<header>

    <a href="#" class="logo"><i class="fas fa-hamburger"></i>A&Z Fast-Food<i class="fas fa-drumstick-bite"></i></a>

    <nav class="navbar">
         <a href="home.php">Home</a>
        <a href="home.php#dishes">Our Special</a>
        <a href="home.php#menu">Our Menu</a>
		<a href="home.php#about">About Us</a>
        <a href="home.php#review">Review</a>
		<a href="checkout.php">My Order</a>
		<a href="logout.php">Logout</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
		<a  href="profile.php" class="fas fa-user" id="user"></a>
        <a   class="fas fa-search" id="search-icon"></a>
        <a style="color:#fff;background: maroon;" href="wishlist.php" class="fas fa-heart"></a>
        <a href="testadd.php" class="fas fa-shopping-cart"></a>
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->
<style>
 .button2 {
    border: none;
    background-color: transparent;
    outline: none;
	width:60px;
	height:40px;
	
}
.button2:focus {
    border: none;
}
 </style>
<form action="search.php" method="post" id="search-form">
    <input type="search" placeholder="search here..." name="cari" id="search-box">
	<button class="button2" type="submit"  ><i style="color:white; " class="fas fa-search fa-3x"></i> </button>
    <!-- <label for="search-box"  href="search.php" class="fas fa-search"></label> -->
    <i class="fas fa-times" id="close"></i>
</form>

 
<!-- dishes section starts  -->
<br><br><br><br><br><br><br>
<section class="dishes" id="dishes" style ="background-color: #FCF3CF;">

<br><br>

<h2 class="sub-heading" style="text-align:left;"> <span style="color:black;">MY Wishlist</span> </h2>

<br><br>
    <h3 class="sub-heading"> our Special </h3>
    <h1 class="heading"> Special for Christmas </h1>

    <div class="box-container">

<?php
		   

        $custID=$_SESSION["CustID"];

        $con = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
		 
		$result = mysqli_query($con,"SELECT * FROM FOOD INNER JOIN WISHLIST ON FOOD.food_id = WISHLIST.food_id WHERE FOOD.food_type='special' AND FOOD.food_status='yes' AND WISHLIST.cust_id = '" . $custID . "'");
        
		if ($result->num_rows > 0) {
        while($row  = mysqli_fetch_array($result)) 
		{
           
         
 ?>

        <div class="box">
            <a style="color:#fff;background: maroon;" href="wishlistDelete2.php?foodID=<?php echo $row['food_id'];  ?>" class="fas fa-heart"></a>
            
            <img src=" <?php echo $row['food_image'];  ?> " alt="">
            <h3><?php echo $row['food_name'];   ?></h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>RM<?php echo $row['food_price'];  ?></span><br>
            <button  type="submit" onclick="openForm('<?php echo $row['food_id'];?>','<?php echo $row['food_name'];?>','<?php echo $row['food_description'];?>','<?php echo $row['food_image'];?>','<?php echo $row['food_price'];?>','<?php echo $row['food_cals'];?>')" class="btn">add to cart</button>
            
        </div>

<?php  
        } }
		 else
		 {
?>
   <span style="text-align:center; font-size:20px;">sorry no Wishlist Menu </span>
<?php
			
		 }
 ?>

          

    </div>
<br><br><br><br>
</section>

<!-- dishes section ends -->


<style>

.menu .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.7rem;
}

.menu .box-container .box{
    background: #FCF3CF;
    border:.5rem solid rgba(0,0,0,.2);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    width: 100%;    
}

.menu .box-container .box .image{
    height: 25rem;
    width: 100%;
    padding:1.5rem;
    overflow: hidden;
    position: relative;
}

.menu .box-container .box .image img{
    height: 100%;
    width: 100%;
    border-radius: .5rem;
    object-fit: cover;
}

.menu .box-container .box .image .fa-heart{
    position: absolute;
    top:2.5rem; right: 2.5rem;
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    text-align: center;
    font-size: 2rem;
    background: #fff;
    border-radius: 50%;
    color:black;
}

.menu .box-container .box .image .fa-heart:hover{
    background-color: maroon;
    color:#fff;
}

.menu .box-container .box .content{
    padding:2rem;
    padding-top: 0;
}

.menu .box-container .box .content .stars{
    padding-bottom: 1rem;
}

.menu .box-container .box .content .stars i{
   font-size: 1.7rem;
   color:#F39C12;
}

.menu .box-container .box .content h3{
    color:black;
    font-size: 2.5rem;
}

.menu .box-container .box .content p{
    color:var(--light-color);
    font-size: 1.6rem;
    padding:.5rem 0;
    line-height: 1.5;
}

.menu .box-container .box .content .price{
    color:black;
    margin-left: 1rem;
    font-size: 2.3rem;
}

</style>
<!-- menu section starts  -->

<section class="menu" id="menu" style ="background-color:#800000;">

    <h3 class="sub-heading"> our menu </h3>
    <h1 class="heading" style ="color :#F39C12"> today's menu</h1>

    <div class="box-container">

<?php
		 
		$result = mysqli_query($con,"SELECT * FROM FOOD INNER JOIN WISHLIST ON FOOD.food_id = WISHLIST.food_id WHERE FOOD.food_type='main' AND FOOD.food_status='yes' AND WISHLIST.cust_id = '" . $custID . "'");
        
		if ($result->num_rows > 0) {
        while($row  = mysqli_fetch_array($result)) 
		{
         

 ?>

        <div class="box">
            <div class="image">
                <img src="<?php echo $row['food_image'];  ?>" alt="">
                <a style="color:#fff;background: maroon;" href="wishlistDelete2.php?foodID=<?php echo $row['food_id'];  ?>" class="fas fa-heart"></a>
            
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3><?php echo $row['food_name'];  ?></h3>
                <p style ="color :black"><?php echo $row['food_description'];  ?><br><b> <?php echo $row['food_cals'];  ?></b></p>
                <button  type="submit" onclick="openForm('<?php echo $row['food_id'];?>','<?php echo $row['food_name'];?>','<?php echo $row['food_description'];?>','<?php echo $row['food_image'];?>','<?php echo $row['food_price'];?>','<?php echo $row['food_cals'];?>')" class="btn">add to cart</button>
                <span class="price">RM<?php echo $row['food_price'];  ?></span>
            </div>
        </div>

<?php  
        } }
		 else
		 {
?>
   <span style="text-align:center; font-size:20px; color:white;">sorry no data found </span>
<?php
			
		 }
 ?> 

    </div>

</section>

<!-- menu section ends -->

 <style>

  .loginPopup {
        position: relative;
        text-align: center;
        width: 200px;
      }
      .formPopup {
        display: none;
        position: fixed;
        left: 45%;
        top: 5%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 9;
      }
      .formContainer {
        max-width: 600px;
        padding: 20px;
        background-color: #fff;
      }
      .formContainer input[type=text],
      .formContainer input[type=number] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 20px 0;
        border: none;
        background: #eee;
      }
      .formContainer input[type=text]:focus,
      .formContainer input[type=number]:focus {
        background-color: #ddd;
        outline: none;
      }
      .formContainer .btn {
        padding: 12px 20px;
        border: none;
        background-color: #8ebf42;
        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
      }
      .formContainer .cancel {
        background-color: #cc0000;
      }
      .formContainer .btn:hover,
      .openButton:hover {
        opacity: 1;
      } 
    </style>
	
	
	
	<script type="text/javascript">
	
      function openForm(foodID,foodNam,foodDes,foodIm,foodPri,foodCal) {
		  var abc1 = foodID ;  
		  var abc2 = foodNam ;  
		  var abc3 = foodDes ;  
		  var abc4 = foodIm ;  
		  var abc5 = foodPri ;  
		  var abc6 = foodCal ;  
		  document.getElementById("myFoodID").value = abc1;
		  document.getElementById("myFoodNam").innerHTML = abc2;
		  document.getElementById("myFoodDes").innerHTML = abc3;
		  document.getElementById("myFoodIm").src = abc4;
		  document.getElementById("myFoodPri").innerHTML = abc5;
		  document.getElementById("myFoodCal").innerHTML = abc6; 
		   //alert("Hello! I am an alert box!"+abc1); 
        document.getElementById("popupForm").style.display = "block"; 
      }
	  
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }
    </script> 
	    
	  
	<div  class="loginPopup">
      <div class="formPopup" id="popupForm">
        <form action="cartInsert2.php" method="post" class="formContainer">
         
		   <img id="myFoodIm" width="220px" alt="" > 
		   <h1 id="myFoodNam" ></h1><br><br>
		   <h2 style="color:grey; text-align:left;" id="myFoodDes" ></h2><br>
		   <h2 style="color:grey; text-align:left;" id="myFoodCal" ></h2> <br><br>
		   <h2 style="color:black; text-align:left;" id="myFoodPri" ></h2> 
		    
           <br><br><br>
          <label for="psw">
            <h2>Quantity</h2>
          </label>
		  
		  <input type="hidden" id="myFoodID" name="myFood"  >
          <input type="number" id="psw" value="1" min="1" max="10" name="quantity" required>
		  <button type="submit" class="btn">ADD TO CART</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
        </form>
      </div>
    </div>  


<!-- footer section starts  -->
<br><br><br><br><br><br>
<section class="footer">

    <div class="credit"> Copyright by <span>A&Z Fast-Food </span> </div>

</section>

<!-- footer section ends -->

<!-- loader part  -->
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>







<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.html"></script>

</body>
</html>