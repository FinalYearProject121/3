<!DOCTYPE html>
<html lang = "en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--we have added this view port tag and set initial scale to 1 so that our side shoudl be adjustable according to different devices especially for mobile devices-->
        <title>Add to Cart</title>
        <link rel="stylesheet" href="CSS/style.css"> 
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"><!--poppins font from google fonts website then select popping select some types and then embed-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--link to connect to font awesome 4 to use different icons, just type font awesome 4 cdn and click on first link and copy the url and past it here with rel="stylesheet"-->
    </head>
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
    color:#555;
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
    color: #555;
    display: block;
    margin-left:25px;
}



/*designing quote section*/
.fa.fa-quote-left{
    font-size: 34px;
    color: #ff523b;/*color of quote icon*/
}





.copyright{
    display: block;
    text-align: center;
    color: #fff;
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
}
table{
    width: 100%;/*takes full width of the web page*/
    border-collapse: collapse;
}
.cart-info{
    display: flex;
    flex-wrap: wrap;
}
th{
    text-align: left;
    padding: 5px;
    color: white;
    background: #ff523b;
    font-weight: normal;
}
td{
    padding: 10px 5px;
}
td input{
    width: 40px;
    height: 30px;
    padding: 5px;
}
td a{
    color: #ff523b;
    ffont-size: 12px;
}
td img{
    width: 80px;
    height: 80px;
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
    border-top: 3px solid #ff523b;
    width: 100%;
    max-width: 480px;
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


    <body>

        
    <!--------------Cart Item Detail----------->

    <div class="small container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/menu-1.jpg">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>Price: $50.00</small>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/menu-2.jpg">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>Price: $60.00</small>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$60.00</td>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/menu-3.jpg">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>Price: $75.00</small>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$75.00</td>
            </tr>
        </table>

        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>$200.00</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$30.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>$230.00</td>
                </tr>

            </table>
        </div>
    </div>

 
          

    <!-----------------JS----------------------->
    <script>
        //declare variable MenuItems which take ul having id "MenuItems"
        
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px";//by default, we have set menu or dropdown menu height to 0px, means it is close by default
        
        function menutoggle()//this is the function which we have called above in nav which works on small devices and users click on it
        {
            if (MenuItems.style.maxHeight =="0px")//when user click on it and if it is closed or its height is 0px, then it will open or it should have heigt of 200px upon clicking
            {
                MenuItems.style.maxHeight = "200px"
            }
            else//if user not clicked or it has already opened, then it will upon clicking again closed
            {
                MenuItems.style.maxHeight = "0px" 
            }
        
        }
    </script>    

    </body>

</html>