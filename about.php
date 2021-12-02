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



<!--//Start create box & image  -->
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column 
{
  float: left;
  width: 20%;
  margin-bottom: 16px;
  padding: 0 8px;
  
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background-color: #FCF3CF;
}

.about-section {
  padding: 52.1px;
  text-align: left ;
  background-color: #800000;
  color: white;
  
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
  
}

.title 
{
  color: grey;
}

img
{
  border-radius: 50%;
}


.bwh
{
margin-left:300px;
margin-right:-300px;
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



 <body style="background-color:#FEF9E7;">

<body>

<header>

     <a href="#" class="logo"><i class="fas fa-hamburger"></i>A&Z Fast-Food<i class="fas fa-drumstick-bite"></i></a>

    <nav class="navbar">
        <a  href="home.php">home</a>
        <a href="home.php#dishes">Our Special</a>
        <a href="home.php#menu">Our menu</a>
		<a class="active"href="#about.php">about Us</a>
        <a href="home.php#review">review</a>
		<a href="logout.php">Logout</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
		<a  href="profile.php" class="fas fa-user" id="user"></a>
        <a class="fas fa-search" id="search-icon"></a>
        <a href="testadd.php" class="fas fa-heart"></a>
        <a href="testadd.php" class="fas fa-shopping-cart"></a>
    </div>
</header>
<!-- header section ends-->


<!-- search form, love add to cart  start -->
<form action="search.php" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
<!-- search form, love add to cart  start -->
<style>



</style>
</head>





<div class="about-section" >
 
    
  <br><br><br><br>
  <h1 align="center" style="font-size:350%;"><em>About Us</em></h1>
<br> <h2 align="center" style="color:#F39C12"> <p style="font-size:110%">We are the owner of A&Z Fast- Food Restaurant.</p></h2>

<br>  <p  align="center" style="font-size:200%">A&Z Fast-Food system will help to bring  a lot of convenience for the customer and also the owner.<br> 
As we know,"In the food industry, it is important for an organization to leverage their customer's satisfaction<br> 
and this can be achieved through superior customer service." (AgnesKanyan,2016) So, this fast food ordering <br>
system will significantly improve the ordering process for both the customer and the restaurant owner/staff.</p>



<br><br><br> <h2 align="center"> <p>|  Introduce to you Our Beloved Owners |</p></h2>

</div>
<br>




<div class="row" >

  <div class="column" align="center">
    <div class="card">
      <center><img src="images/luq1.1.jpeg" alt="luq" style="width:90%" height="300" ></center>
      <div class="container"><br><br>
        <h2>Luqman Hakim Bin Mohamad Zaki</h2>
        
        
      </div>
    </div>
  </div>


  <div class="column" align="center">
    <div class="card">
      <center><img src="images/myra.jpeg" alt="myra" style="width:90%" height="300" ></center>
      <div class="container">
        <br><br><h2>Myra Ophelia Iman Bt Maurice Feizal</h2>
  
      </div>
    </div>
  </div>
  
  
  
   <div class="column" align="center">
    <div class="card">
      <center><img src="images/zul.jpg" alt="zul" style="width:90%" height="300" ></center>
      <div class="container">
       <br><br> <h2>Muhammad Zulkifle Bin Mohd Afandi</h2>
       
     
      </div>
    </div>
  </div>
  
  
  
  
   <div class="column" align="center">
    <div class="card">
      <center><img src="images/fiq.jpeg" alt="azeeb" style="width:90%" height="300" ></center>
      <div class="container"><br><br>
        <br><br><h2>Fiqret Emir Bin Nasarudin</h2>
     
      </div>
    </div>
  </div>
  
   <div class="column" align="center">
    <div class="card">
      <center><img src="images/zeeb.jfif" alt="fiq" style="width:90%" height="300" ></center>
      <div class="container"><br><br>
        <h2>Muhammad Azeeb Bin Jamaluddin</h2>

      </div>
    </div>
  </div>

</div><br>
<!--end create box & image  -->
<style>



</style>



<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3 style="color:maroon;">locations</h3>
            <a href="#">malaysia</a>
            
        </div>

        <div class="box">
            <h3 style="color:maroon;">quick links</h3>
            <a href="#home">home</a>
            <a href="#dishes">Our special</a>
            <a href="#menu">our menu</a>
            <a href="about.php">about us </a>
            <a href="#review">reivew</a>
            <a href="logout.php">logout</a>
        </div>

        <div class="box">
            <h3 style="color:maroon;">contact info</h3>
            <a href="#">+1126652120</a>
            <a href="#">+096574328</a>
            <a href="#">muhammadzulkifle22@gmail.com</a>
            <a href="#">AZfast-food@gmail.com</a>
            
        </div>

        

    </div>

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
