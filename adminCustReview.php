
<!DOCTYPE html>
<html lang="en"> 
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


</head>


 <body style="background-color:#FEF9E7;">
    
<!-- header section starts      -->

<header>

    <a href="#" class="logo"><i class="fas fa-hamburger"></i>A&Z Fast-Food<i class="fas fa-drumstick-bite"></i> (Admin)</a>

    <nav class="navbar">
        <a  href="adminMenu.php">Menu</a>
        <a href="adminMenuAdd.php">Add Menu</a>
        <a  href="adminStaff.php">Staff</a>
		<a  href="adminStaffAdd.php">Add Staff</a>
		<a style="color:#fff;background: maroon;" href="adminCustReview.php">Customer Review</a>
		<a href="adminLogout.php">Logout</a>
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

<form action="#" method="post" id="search-form">
    <input type="search" placeholder="search here..." name="cari" id="search-box">
	<button class="button2" type="submit"  ><i style="color:white; " class="fas fa-search fa-3x"></i> </button>
    <!-- <label for="search-box"  href="search.php" class="fas fa-search"></label> -->
    <i class="fas fa-times" id="close"></i>
</form>



<style>
*{
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}  
/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

p
{
font-size: 15px;
}

b
{
font-size: 15px;
}

center
{
font-size: 15px;
}



.contuu {
    border-radius: 5px;
    background-color: #ffcd98;
    padding: 20px;
	width:750px;
        align-content: center;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
    float: left;
    color: black;
    font-size: 17px;
}

.col-25 {
    float: left;
    width: 150px;
    margin-top: 6px;
}

.col-77 {
    float: left;
    width: 500px;
    margin-top: 6px;
}
/* Clear floats after the columns */
.rowo:after {
    content: "";
    display: table;
    clear: both;
}

table {
  border-spacing: 5px;
}
th, td {
  padding: 15px;
  font-size: 15px;
}

</style>



	   
 
 
    
    


  
 
   
		
<!-- dishes section ends -->


<style>
table {
  border-collapse: collapse;
  width: 90%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: maroon;
  color: white;
}
</style>
 
 
 <br><br><br><br>
 <br><br><br><br> 
 <br><br><br><br> 
<center>
<h1>Review History</h1><br><br>

<table>
  <tr>
    <th>Order Number</th>
    <th>Date & Time</th>
    <th>Menu</th>
    <th>Total (inc 6% tax)</th>
    <th>Status</th>
    <th style="text-align:center;" >Review</th>
    <th>Action (Delete nonsensical review)</th>
  </tr>
  
    <?php
		 $con = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
        
		$sqlz = mysqli_query($con,"SELECT * FROM ORD INNER JOIN RATING ON ORD.ord_id = RATING.ord_id WHERE NOT ord_status='process' AND NOT ord_status='new' ORDER BY ord_datetime ASC");
		
        if ($sqlz->num_rows > 0) 
		{
			 while($rowz  = mysqli_fetch_array($sqlz)) 
			{
				$OrdID=$rowz['ord_id'];
				$OrdTOTAL=$rowz['ord_total'];
				$OrdDate=$rowz['ord_datetime'];
				$OrdDis=$rowz['ord_discount'];
				$OrdSta=$rowz['ord_status'];
	?>
	
  <tr>
    <td><?php  echo $OrdID;  ?></td>
    <td><?php  echo $OrdDate;  ?></td>
	<td>
	
	<?php
		$sqlzz = mysqli_query($con,"SELECT * FROM ADDTOCART INNER JOIN FOOD ON ADDTOCART.food_id = FOOD.food_id WHERE ADDTOCART.order_id ='" . $OrdID . "'");
			while($rowzz  = mysqli_fetch_array($sqlzz)) 
			{
			   echo $rowzz['food_name']." ( RM".$rowzz['food_price']." X ".$rowzz['cart_quantity']." )"; ?> <br>   <?php 
			}
			?>
			Delivery Cost : RM 4.00 <br>
			<?php
			if ($OrdDis == 'yes')
			{
				?>
					Discount : -RM 5.00 <br>
				<?php
			}else
			{
				?>
					Discount : -RM 0.00 <br>
				<?php
			}
	?>
	 </td>
	 <td>RM<?php echo $OrdTOTAL;  ?></td>
	 <td><?php echo $OrdSta;  ?></td> 
	 <?php
		 
				$rateID=$rowz['rate_id'];
			    $star=$rowz['rate_star'];
			    $feed=$rowz['rate_feedback'];
			 
			
			if($star == "1")
			{
			?>	
			<td><center><span style="color:orange;font-size:20px;">★</span><br><span style="width:50px;"> <?php echo $feed;?> </center></td>
			<?php 
			}else if($star == "2")
			{
			?>
			<td><center><span style="color:orange;font-size:20px;">★★</span><br><span style="width:50px;"> <?php echo $feed;?></center></td>
			<?php 
			}else if($star == "3")
			{
			?>
			<td><center><span style="color:orange;font-size:20px;">★★★</span><br><span style="width:50px;"> <?php echo $feed;?></center></td>
			<?php 
			}else if($star == "4")
			{
			?>
			<td><center><span style="color:orange;font-size:20px;">★★★★</span><br><span style="width:50px;"> <?php echo $feed;?></center></td>
			<?php 
			}else if($star == "5")
			{
			?>
			<td><center><span style="color:orange;font-size:20px;">★★★★★</span><br><span style="width:50px;"> <?php echo $feed;?></center></td>
  
	<?php
			}
		
		 
	 ?>
	
	 <td><center><a style="background-color: red;" type="submit" href="adminCustReviewDelete.php?rateID=<?php echo $rateID;?>" class="btn">Delete Review</button></center></td>
  
		 
  </tr>     
	 <?php
			}
		}else
		{
    ?>
  
	<tr>
    <td> </td>
    <td> </td>
    <td> No Order Recorded </td>
	<td> </td>
    <td> </td>
    <td> </td>
  </tr>
  
  <?php
		}
  ?>
  
</table>
</center>

 

 <style>

  .loginPopup {
        position: fixed;
        text-align: center;
        width: 200px;
		top:130px;
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
	

<style>
.txt-center {
  text-align: center;
}
.hide {
  display: none;
}

.clear {
  float: none;
  clear: both;
}

.rating {
    width: 300px;
    unicode-bidi: bidi-override;
    direction: rtl;
    text-align: center;
    position: relative;
}

.rating > label {
    float: right;
    display: inline;
    padding: 0;
    margin: 0;
    position: relative;
    width: 1.1em;
    cursor: pointer;
    color: #000;
}

.rating > label:hover,
.rating > label:hover ~ label,
.rating > input.radio-btn:checked ~ label {
    color: transparent;
}

.rating > label:hover:before,
.rating > label:hover ~ label:before,
.rating > input.radio-btn:checked ~ label:before,
.rating > input.radio-btn:checked ~ label:before {
    content: "\2605";
    position: absolute;
    left: 0;
    color: #FFD700;
}
</style>

<script type="text/javascript">
	
      function openForm(OrderID) {
		  var abc1 = OrderID ;  
		  document.getElementById("myOrderID").value = abc1;
        document.getElementById("popupForm").style.display = "block"; 
      }
	  
      function closeForm() {
        document.getElementById("popupForm").style.display = "none";
      }
    </script> 
	    
	  
	<div  class="loginPopup">
      <div class="formPopup" id="popupForm">
        <form action="rateInsert.php" method="post" class="formContainer">
         
		  
		   <h1 style="color:maroon;"><b>THANK YOU FOR YOUR REVIEW</b></h1><br><br>
  
  <center>
        <div class="rating">
            <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
            <label style="font-size:50px;" for="star5" >★</label>
            <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
            <label style="font-size:50px;" for="star4" >★</label>
            <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
            <label style="font-size:50px;" for="star3" >★</label>
            <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
            <label style="font-size:50px;" for="star2" >★</label>
            <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
            <label style="font-size:50px;" for="star1" >★</label>
            <div class="clear"></div>
        </div> 
		 
</center>

           <br><br><br>
          <label for="psw">
            <p><b>FEEDBACK</b></p>
          </label>
		  
		  <input type="hidden" id="myOrderID" name="myOrder"  >
          <input type="text" id="psw"  name="feedback" required>
		  <button type="submit" class="btn">SUBMIT REVIEW</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
        </form>
      </div>
    </div>   
	
	
		
<!-- footer section starts  -->
<br><br>
<br><br>
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