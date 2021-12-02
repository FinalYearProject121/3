
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

    <a href="#" class="logo"><i class="fas fa-hamburger"></i>A&Z Fast-Food<i class="fas fa-drumstick-bite"></i>(staff)</a>

    <nav class="navbar">
        <a  href="home.php">Home</a>
        <a href="home.php#dishes">Our Special</a>
         <a href="home.php#menu">Our menu</a>
		 <a href="home.php#about">about Us</a>
        <a href="home.php#review">review</a>
		<a href="logout.php">Logout</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
		<a  href="profile.php" class="fas fa-user" id="user"></a>
        <a   class="fas fa-search" id="search-icon"></a>
        <a href="testadd.php" class="fas fa-heart"></a>
        <a href="testadd.php" class="fas fa-shopping-cart"></a>
    </div>

</header>

<!-- header section ends-->

<!-- search form  -->

<form action="search.php" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>


<<style>
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

<!-- dishes section starts  -->

<section class="dishes" id="dishes" style ="background-color: #FCF3CF;">


<!-- 
    <sql:query var="result" dataSource="${myDatasource}">
        SELECT * FROM ICECREAM where ICEID='${param.menuid}'
        
    </sql:query>
        
     -->
    
    
    
	<!-- Featured Products -->
	<br><br><br><br><br><br><br><br>
        <div  class="container">
            
            
            <h1 style="font-size:300%">Order Detail</h1>
    
 
   
        
        <!-- 
            <c:set var="USERID" value="<%=request.getParameter("userid")%>" /> 
    
    <c:set var="RE_ID" value="<%=request.getParameter("receiptid")%>"/>

        
               
        <sql:query var="resu" dataSource="${myDatasource}">
        SELECT * FROM PURCHASE INNER JOIN RECEIPT ON PURCHASE.RECEIPT_ID = RECEIPT.RECEIPT_ID 
        INNER JOIN ICECREAM ON PURCHASE.ICEID=ICECREAM.ICEID
        where PURCHASE.RECEIPT_ID=${RE_ID} 
    </sql:query>
        
        <sql:query var="resul" dataSource="${myDatasource}">
        SELECT * FROM CUSTOMER WHERE USERID='${USERID}'
    </sql:query>
        -->
            
          <center>
<div style="color: black;" class="contuu">
   
    
           <center>

               <b>KRABBY PATTY</b><br><br>
               
            
         
               <!--  
               <c:forEach var="row" items="${resu.rows}">
                   <c:set var="DATE" value="${row.RECEIPT_DATE}"/>
                   <c:set var="TIME" value="${row.RECEIPT_TIME}"/>
                   <c:set var="tootal" value="${row.RECEIPT_TOTAL}"/>
                   <c:set var="status" value="${row.RECEIPT_STATUS}"/> 
               </c:forEach> -->
               <center>date: 22/10/2020</center>
            <center>time: 9:00 p.m</center>
    <p>-------------------------------------------------------------------------</p>
            
   <table>
       <tr>
           <th>ITEM</th>
           <th>PRICE/ITEM</th>
           <th>QUANTITY</th>
           <th>PRICE(RM)</th>
       </tr>
      <!-- <c:forEach var="row" items="${resu.rows}"> -->
          <tr>
              <td>chicken rice chop</td>
              <td><center>20.00</center></td>
              <td><center>x 1</center></td>
              <td><center>20.00</center></td>
          </tr>
          
     <!--  </c:forEach> -->
   </table><br>
   <p><b>TOTAL</b></p><br>
   <b>:::::RM20.00 </b>

            <br><br>
            <p> ORDER NUMBER:</p>
            <p><font size="10px">100</font></p>
                
    <p>-------------------------------------------------------------------------</p> 
                
              
	
    <br>
		

		
                <!-- <c:forEach var="row" items="${resul.rows}"> -->
                    <p>ID :1023</p>
                    <p>NAME :nur zunairah mohd afandi</p>
                    <p>PHONE :014-5376579</p>
                    <p>EMAIL :nurzunairahmohdafandi@gmail.com</p>
                <!--  </c:forEach> -->
                    <b><p>STATUS :prepare</p></b>
                    <!--  
<c:if test="${status  eq 'UNPAID'}">
                   
    <form action="prepareupdate.jsp" method="post">
    <center> <br><br>
        <input type='hidden' name='idd' value="<c:out value="${RE_ID} "/>"/>
        <input type='hidden' name='userid' value="<c:out value="${USERID} "/>"/>
            <button style="background-color: #228c22;" class="btn btn-primary" type="submit">
                       PAYMENT SUCCESS
            </button>
        </center>
    </form>
    
</c:if>
                    
<c:if test="${status  eq 'PREPARE'}">
                   
    <form action="pickupupdate.jsp" method="post">
    <center> <br><br>
        <input type='hidden' name='idd' value="<c:out value="${RE_ID} "/>"/>
        <input type='hidden' name='userid' value="<c:out value="${USERID} "/>"/>
            <button style="background-color: #228c22;" class="btn btn-primary" type="submit">
                       ORDER READY TO PICKUP
            </button>
        </center>
    </form>
   
</c:if>
                
<c:if test="${status  eq 'PICKUP'}"> -->
                   
    <form action="finishupdate.jsp" method="post">
    <center> <br><br>
         <!-- <input type='hidden' name='idd' value="<c:out value="${RE_ID} "/>"/>
        <input type='hidden' name='userid' value="<c:out value="${USERID} "/>"/> -->
            <button style="background-color: #228c22;" class="btn btn-primary" type="submit">
                       THE CUSTOMER PICKUP THE ORDER
            </button>
        </center>
    </form>
    <!-- 
</c:if>  
                    <c:if test="${status  eq 'FINISH'}">
                   
    <form action="stafffinish.jsp" method="post">
    <center> <br><br>
        
            <button style="background-color: #228c22;" class="btn btn-primary" type="submit">
                       OK
            </button>
        </center>
    </form>
    
</c:if>  -->
            </center> 

       </center>
	
       </div>        
      </div>




</section>

<!-- dishes section ends -->





<!-- footer section starts  -->
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