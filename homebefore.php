
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
        <a class="active" href="#home">home</a>
		<a href="#dishes">Our Special</a>
        <a  href="#menu">Our menu</a>
		<a  href="#about">about Us</a>
        <a  href="#review">review</a>
	    <a  href="loginbefore.php#">Login</a>
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

<form action="" id="home">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special dish</span>
                    <h3>spicy noodles</h3>
                    <p style ="color:black;">Italian drunken noodles are a delicious Italian and Thai fusion dish with spicy sausage, peppers, onions and basil, lightly kissed with beef stock!</p>
                    <a href="loginbefore.php#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/home-img-1.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special dish</span>
                    <h3>Garlic herb butter fried chicken</h3>
                    <p style ="color:black;">The minced garlic over the chicken and under skin with pinch of salt, pepper and parsley fried it till golden bad boy.</p>
                    <a href="loginbefore.php#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/home-img-2.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special dish</span>
                    <h3>Meat Mania </h3>
                    <p style ="color:black;">Meat lovers, get ready to meet your match! Loaded with beef pepperoni, beef sausages, ground beef, chicken potpourri sausages and ripe olives </p>
                    <a href="loginbefore.php#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/home-img-3.png" alt="">
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->


<!-- dishes section starts  -->

<section class="dishes" id="dishes" style ="background-color: #FCF3CF;">
<br><br>
    <h3 class="sub-heading"> our Special </h3>
    <h1 class="heading"> Special for Christmas </h1>

    <div class="box-container">

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <img src="images/dish-1.png" alt="">
            <h3>Famous star with cheese</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>RM10.00</span><br>
            <a href="loginbefore.php#" class="btn">add to cart</a>
        </div>

        

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
           
            <img src="images/dish-3.png" alt="">
            <h3>Garlic herb butter Fried chicken</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>RM25.00</span><br>
            <a href="loginbefore.php#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            
            <img src="images/dish-4.png" alt="">
            <h3>Meat Mania</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div><br><br>
            <span>RM20.00</span><br>
            <a href="loginbefore.php#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
           
            <img src="images/dish-5.png" alt="">
            <h3>Crunchy Speculoos Waffle</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>RM8.00</span><br>
            <a href="loginbefore.php#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            
            <img src="images/dish-6.png" alt="">
            <h3>Seasoning Fried Chicken</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <span>RM14.00</span><br>
            <a href="loginbefore.php#" class="btn">add to cart</a>
        </div>

    </div>

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

    <h3 class="sub-heading"> our special menu </h3>
    <h1 class="heading" style ="color :#F39C12"> TODAY'S MENU </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/menu-1.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Meat Mania</h3>
                <p style ="color :black">Meat lovers, get ready to meet your match! Loaded with beef pepperoni, beef sausages, ground beef, 
				chicken potpourri sausages and ripe olives.<br><b> 550 cals</b></p>
                <a href="loginbefore.php#" class="btn">add to cart</a>
                <span class="price">RM20.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-2.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Famous star with cheese</h3>
                <p style ="color :black">Charbroiled all-beef patty, melted American cheese, lettuce, tomato, sliced onions, 
				dill pickles, Special Sauce, and mayonnaise on a seeded bun.<br><b> 670 cals</b></p>
                <a href="loginbefore.php#" class="btn">add to cart</a>
                <span class="price">RM10.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-3.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Dipndip Crepe</h3>
                <p style ="color :black">Crepe, served with a selection of fresh seasonal fruits, vanilla bean whipped cream 
				and your choice of chocolate topping<br> <b>49 cals</b></p>
                <a href="loginbefore.php#" class="btn">add to cart</a>
                <span class="price">RM14.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-4.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Crunchy Speculoos Waffle</h3>
                <p style ="color :black">Waffle, with speculoos spread and white chocolate, topped with caramelized biscuit crunch, 
				served with your choice of ice cream <br><b> 120 cals</b></p>
                <a href="loginbefore.php#" class="btn">add to cart</a>
                <span class="price">RM8.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-5.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Exotic Fruit Cake</h3>
                <p style ="color :black">Light vanilla chiffon adorned with fresh cream, topped and layered with refreshing fruits.
				<br><b> 200 cals</b></p>
                <a href="loginbefore.php#" class="btn">add to cart</a>
                <span class="price">RM15.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-6.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Cheesy Red Velvet</h3>
                <p style ="color :black">Red velvet cake filled with cheese topped with blue colour of cheese cream frosting.
				<br><b> 49 cals</b></p><br><br>
                <a href="loginbefore.php#" class="btn">add to cart</a>
                <span class="price">RM5.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-7.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Butterfly Pea Sweet Tea</h3>
                <p style ="color :black">Our Butterfly Pea Cold Brew Tea gets a dash of lemony syrup. Beautifully refreshing.
				<br><b> 10 cals</b></p>
                <a href="loginbefore.php#" class="btn">add to cart</a>
                <span class="price">RM5.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-8.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Healthy Yogurt Bowl</h3>
                <p style ="color :black">Greek Yogurt with strawberry, blueberry, cornflakes and honey.
				<br><b> 45 cals</b></p><br><br>
                <a href="loginbefore.php#" class="btn">add to cart</a>
                <span class="price">RM10.00</span>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/menu-9.jpg" alt="">
                <a href="#" class="fas fa-heart"></a>
            </div>
            <div class="content">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Lemonade Cold Brew Tea</h3>
                <p style ="color :black">Our Butterfly Pea Cold Brew Tea gets a dash of lemony syrup. Beautifully refreshing.
				<br><b> 10 cals</b></p>
                <a href="loginbefore.php#" class="btn">add to cart</a>
                <span class="price">RM3.00</span>
            </div>
        </div>

    </div>

</section>

<!-- menu section ends -->



<style>

.about .row{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    align-items: center;
}

.about .row .image{
    flex:1 1 45rem;
}

.about .row .image img{ 
    width: 100%;
}

.about .row .content{
    flex:1 1 45rem;
}

.about .row .content h3{
    color:var(--black);
    font-size: 4rem;
    padding:.5rem 0;
}

.about .row .content p{
    color:var(--light-color);
    font-size: 1.5rem;
    padding:.5rem 0;
    line-height: 2;
}

.about .row .content .icons-container{
    display: flex;
    gap:1rem;
    flex-wrap: wrap;
    padding:1rem 0;
    margin-top: .5rem;
}

.about .row .content .icons-container .icons{
    background:#F5B041;
    border-radius: .5rem;
    border:.1rem solid rgba(0,0,0,.2);
    display: flex;
    align-items: center;
    justify-content: center;
    gap:1rem;
    flex:1 1 17rem;
    padding:1.5rem 1rem;
}

.about .row .content .icons-container .icons i{
    font-size: 2.5rem;
    color:black;
}

.about .row .content .icons-container .icons span{
    font-size: 1.5rem;
    color:black;
}

</style>


<!-- about section starts  -->

<section class="about" id="about" style = "background-color:#BDC8CF;">

    <h3 class="sub-heading"> about us </h3>
    <h1 class="heading"> why choose us? </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.png" alt="">
        </div>

        <div class="content">
            <h3 style ="color :black">best food in the country</h3>
            <p  style ="color :black">We introduce to you the best dumplings in the country. WHY? Dumplings are visible, tasty signs that illustrate essential parts of Chinese culture.
			The crescent-shaped dumplings served during Lunar New Year symbolize the brightness of the moon and the promise of a bright and prosperous year. 
			The filling stuffed with chicken rendang originally Malay dish cooks with Indian spices, herbs and coconut milk for hours over fires to elicit tender, flavourful.</p>
            
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>free delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="aboutbefore.php" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<style>


.review .slide{
    padding:2rem;
    box-shadow:var(--box-shadow);
    border:.1rem solid rgba(0,0,0,.2);
    border-radius: .5rem;
    position: relative;  
	background-color:#2C3E50;
    
}

.review .slide .fa-quote-right{
    position: absolute;
    top:2rem; right:2rem;
    font-size: 6rem;
    color:#ccc;
}

.review .slide .user{
    display: flex;
    gap:1.5rem;
    align-items: center;
    padding-bottom: 1.5rem;
}

.review .slide .user img{
    height: 7rem;
    width: 7rem;
    border-radius: 50%;
    object-fit: cover;
}

.review .slide .user h3{
    color:white;
    font-size: 2rem;
    padding-bottom: .5rem;
}

.review .slide .user i{
    font-size: 1.3rem;
    color:#F5B041;
}

.review .slide p{
    font-size: 1.5rem;
    line-height: 1.8;
    color:#F9E79F;
}

</style>

<?php
		//session_start(); 

        //$custID=$_SESSION["CustID"];

        $con = mysqli_connect('localhost','root','','fastfood') or die('Unable To connect');
       
		

 ?>


<!-- review section starts  -->

<section class="review" id="review" style ="background-color:#FCF3CF;">

    <h3 class="sub-heading"> customer's review </h3>
    <h1 class="heading"> what they say </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">



		<?php
		 
		$resultt = mysqli_query($con,"SELECT * FROM RATING ");
        
        while($roww  = mysqli_fetch_array($resultt)) 
		{
         $ORDID = $roww['ord_id'];
         $star = $roww['rate_star'];
         $feed = $roww['rate_feedback'];
		 
			$resulttt = mysqli_query($con,"SELECT * FROM ORD INNER JOIN CUSTOMER ON ORD.cust_id = CUSTOMER.cust_id WHERE ORD.ord_id='" . $ORDID . "'");
			while($rowww  = mysqli_fetch_array($resulttt)) 
			{
				$name = $rowww['cust_username'];
			}

		?>

            <div class="swiper-slide slide">
               
                <div class="user">
                    <i class="fas fa-user-circle fa-3x"></i>
                    <div class="user-info">
                        <h3><?php echo $name;?></h3>
						
						<?php
						
						if($star == "1")
						{
						?>	
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            
                        </div>
						<?php 
						}else if($star == "2")
						{
						?>
						<div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            
                        </div>
						<?php 
						}else if($star == "3")
						{
						?>
						<div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                           
                        </div>
						<?php 
						}else if($star == "4")
						{
						?>
						<div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          
                        </div>
						<?php 
						}else if($star == "5")
						{
						?>
						<div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
						<?php
						}
						?>
						
                    </div>
                </div>
                <p> <?php echo $feed;?></p>
            </div>

		<?php }
		?>



           



        </div>

    </div>
    
</section>


<!-- review section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3 style="color:maroon;">locations</h3>
            <a href="#">Malaysia</a>
            
        </div>

        <div class="box">
            <h3 style="color:maroon;">quick links</h3>
            <a href="#home">home</a>
			<a href="#dishes">Our special</a>
            <a href="#menu">Our Menu</a>
            <a href="about#">about us</a>          
            <a href="#review">review</a>
            <a href="login.php">login </a>
        </div>

        <div class="box">
            <h3 style="color:maroon;">contact info</h3>
            <a href="#">+01126652120</a>
            <a href="#">+096574328</a>
            <a href="#">muhammadzulkifle22@gmail.com</a>
            <a href="#">AZfast-food@gmail.com</a>
            
        </div>


        

    </div>

    <div class="credit"> Copyright by <span>A&Z Fast-Food </span> </div>

</section>

<!-- footer section ends -->








<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.html"></script>

</body>
</html>