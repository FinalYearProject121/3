
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
        <a href="testadd.php" class="fas fa-heart"></a>
        <a style="color:#fff;background: maroon;" href="testadd.php" class="fas fa-shopping-cart"></a>
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="search.php" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>


<style>
*{                              /* "*" is used for all elements in your website*/
    margin:0;               
    padding:0;
    box-sizing: border-box;     /*box sizing: border-box is used to add padding and border in both width and heghts.*/ 

}
body{
    font-family: 'Poppins', sans-serif;
}



/*for menu links*/
a
{
    text-decoration: none;
    color:#555;
}
p{
    color:black;
}
.container{
    max-width: 1300px;/*width of the header section will not be more than 1300px*/
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}





/*for featured categories are*/


/*featured products*/
/*small container edit whole section consist of rows*/
.small container{
    max-width: 1080px;
    margin:auto;/*make images in center*/
    padding-left: 25px;
    padding-right: 25px;
}


small{
    color: black;
    display: block;
    margin-left:25px;
	font-size: 15px;
}



/*All prodcuts page*/

input:focus{
    outline: none;
}

.small-img-row{
    display:flex;/*make all 4 images flexible*/
    justify-content: space-between;/*this will make all 4 images to take equal available space in single line without any gap, mean 25% each col, and to place gap between each col, we call col below and made 24% so to have a gap*/
}

/*Cart Items*/
.cart-page{
    margin: 80px auto;
	font-size: 15px;
	background: #F9E79F;
	
}
table{
    width: 100%;/*takes full width of the web page*/
    border: 4px solid #7B241C;
}
.cart-info{
    display: flex;
    flex-wrap: wrap;
}
th{
    text-align: left;
    padding: 10px;
    color: maroon;
    background: #F5B041;    
	font-size: 20px;
	font-size: 2rem;
	border: 4px solid #7B241C;
}
td{
    padding: 10px 5px;
	color: black;
	border: 4px solid #7B241C;
	

}
td input{
    width: 40px;
    height: 30px;
    padding: 5px;
}
td a{
    color: #A93226;
    font-size: 15px;
	font-size: 2rem;
	
}
td img{
    width: 300px;
    height: 200px;
    margin-right: 10px;
}
td small{
    padding-left: 0px;
    margin-left: 0px;
	
}

.total-price{
    display: flex;
    justify-content: flex-end;/*put content with max width at the end, if flex start, then put content at start with max width as we mentioned max width below*/
}
.total-price table{
    border-top: 5px solid #D35400;
    width: 100%;
    max-width: 480px;
	color: #FCF3CF;
}
td:last-child{
    text-align: right;/*align all last column values to right, in our case, these are prices*/
}
th:last-child{
    text-align: right;
}




/*----------media query for each and every item display on mobile or screen size less than 600px---------------*/

@media only screen and (max-width: 600px){

    
   
    /*for cart page*/
    .cart-info p{
        display:none;/*hide product name in smaller screen*/
    }

}


</style>

<?php
		 $custID=$_SESSION["CustID"];  
		$ordID=$_SESSION["OrderID"];
        
        $con = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
		
		$sqls = mysqli_query($con,"SELECT * FROM ADDTOCART WHERE  cart_status='yes' AND cust_id='" . $custID ."'");
		
        if ($sqls->num_rows > 0) 
		{
			
		?>



<!--------------Cart Item Detail----------->
<br><br>
    <div class="small container cart-page">
        <table>
            <tr>
               <b> <th>Product</th> </b>
               <b>  <th>Quantity</th> </b>
                <b> <th>Subtotal</th> </b>
            </tr>
			
		<?php
		   

        
		$subtotal=0.0;
		$total=0.0;
		$tax=0.0;
		$pay=0.0;

		
		 
		$result = mysqli_query($con,"SELECT * FROM ADDTOCART INNER JOIN FOOD ON ADDTOCART.food_id = FOOD.food_id WHERE ADDTOCART.order_id is NULL AND ADDTOCART.cust_id='" . $custID . "'");
        
		if ($result->num_rows > 0) {
        while($row  = mysqli_fetch_array($result)) 
		{
          $subtotal=$row['cart_quantity'] * $row['food_price'];
         
		?>
			
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="<?php echo $row['food_image'];  ?>">
                        <div>
                            <b><h1><?php echo $row['food_name'];  ?></h1></b>
                           <b><br> <small>Price: <?php echo $row['food_price'];  ?></small></b>
                            <a style="color:red" href="DeleteCart.php?cartID=<?php echo $row['cart_id'];  ?>">Remove</a>
                        </div>
                    </div>
                </td>
                <td style="text-align: center"><?php echo $row['cart_quantity'];  ?></td>
                <b><td><?php echo $subtotal;  ?>.00</td></b>
            </tr>

<?php

 $total=$total+$subtotal;
 
		}}
		
	$tax=0.06*$total;
	$pay=$total+$tax+4.00;
	 
?>

			
			
        </table>
<form action="insertOrder.php" method="POST">
        <div class="total-price">
            <table>
			
                <tr>
                    <td>Total</td>
                    <td>RM<?php echo $total;  ?>.00</td>
                </tr>
                <tr>
                    <td>Tax (6%)</td>
                    <td>RM<?php echo $tax;  ?></td>
                </tr>
				<tr>
                    <td>Delivery Cost</td>
                    <td>RM4.00</td>
                </tr>
                <tr>
                    <td>Total To Pay</td>
                    <td>RM<?php echo $pay;  ?></td>
                </tr>
				
				 <tr>
                    <td>Discount Voucher (if available)</td>
                    <td><input style="margin-left:-40px;width:130px;" type="text" placeholder="Enter Voucher Code" name="discount" value="" /></td>
                </tr>

            </table>
        </div>
		
		
		
    <center> <br><br>
         <input name="total" type="hidden" value="<?php echo $pay; ?>" /> 
            <button style="background-color: #228c22;" class="btn btn-primary" type="submit">CHECKOUT</button> 
        </center>
    </form>
	<br><br><br><br>
    </div>
 <?php
 
		}else
		{
 ?>
 <div class="small container cart-page">
   <br><br><br><br><br><br><br>
   <br><br><br><br>
   <center><h1> "No Menu was Selected" </h1></center>
   <br><br><br>
   <br><br><br><br><br><br><br>
   <center><a href="home.php" style="background-color: #228c22;" class="btn btn-primary" type="submit">ORDER NOW</a> </center><br><br><br><br><br>
   </div>
   
		<?php 
		}
		?>
 <!-----------------JS----------------------->
     



<!-- footer section starts  -->

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