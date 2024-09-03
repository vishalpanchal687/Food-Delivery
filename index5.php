<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant WebSite</title>
</head>
<body>
    <form action="" method="post">
    <div class="logo">
        <img src="restaurants.jpg" width="150px">
    </div>
    <div class="menu">
        <ul>
            <li><a href="Home">Home</a></li>
            <li><a href="Categories">Categories</a></li>
            <li><a href="Foods.php">Foods</a></li>
            <li><a href="Contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="search-container">
        <input type="text" placeholder="Search For Food..." name="Search For Food..." id="searchBar">
        <button type="Search"  onclick="search()" id="searchButton" class="btn">Search</button>
        <div id="searchResults"></div>
    </div>
    <div class="text">
        <h2>Explore Foods</h2>
    </div>
    <div class="container">
        <div class="images">
            <img src="Gujarati.jpg" alt="" width="300px" height="250px" class="img">
            <h3 class="float-text">Gujarati Dish</h3>
        </div>
        <div class="images">
            <img src="Punjabi.jpg" alt="" width="300px" height="250px" class="img">  
            <h3 class="float-text">Punjabi Dish</h3> 
        </div>
        <div class="images">
            <img src="Rajeshthan.jpg" alt="" width="300px" height="250px" class="img">
            <h3 class="float-text">Rajeshthani Dish</h3>
        </div>
    </div>
    <div class="card-section">
        <h3 class="title">Food Menu</h3>
        <div class="card">
            <div class="box">
            <img src="Rajeshthan.jpg" alt="" class="left-side" width="100px"  height="80px">
            <div class="right-side">
                <h3 class="food-name">Rajeshthani Dish</h3>
                <h4 class="food-dollar">₹200</h4>
                <p>
                    Rajeshthani Dish are the most famous of the india. Dal Baati churma is a Rajeshthani dish.
                    Baati is made from coarse wheat flour and churma is a sweet flour mixture. it is also made<br>  
                </p>
                <a href="Order Form.php" class="btn-btn">Order Now</a>
            </div> 
          </div>
          <div class="box">
            <img src="Punjabi.jpg" alt="" class="left-side" width="100px" height="80px">
            <div class="right-side">
                <h3 class="food-name">Punjabi Dish</h3>
                <h4 class="food-dollar">₹220</h4>
                <p>
                    One of the most popular and a favorite Indian paneer recipe is Paneer Butter Masala. A smooth, 
                    velvety, creamy tomato based gravy with soft and succulent paneer cubes. <br>  
                </p>
                <a href="Order Form.php" class="btn-btn">Order Now</a>
            </div>
            </div>
        </div>
        <div class="card">
            <div class="box1">
            <img src="Gujarati.jpg" alt="" class="left-side" width="100px" height="80px">
            <div class="right-side">
                <h3 class="food-name">Gujarati Dish</h3>
                <h4 class="food-dollar">₹180</h4>
                <p>
                    Gujarati cuisine is the cuisine of the Indian state of Gujarat. The typical Gujarati 
                    thali consists of rotli, dal or curry, rice, and shaaka dish made up of several 
                    different combinations  <br>
                </p>
                <a href="Order Form.php" class="btn-btn">Order Now</a>
            </div>
          </div>
          <div class="box1">
            <img src="idali.jpg" alt="" class="left-side" width="100px" height="80px">
            <div class="right-side">
                <h3 class="food-name">idli Vada</h3>
                <h4 class="food-dollar">₹80</h4>
                <p>
                    Idlis are a popular, sort-of-staple food in the South Indian states. Vada is a savoury, 
                    fried snack. To many, it may look like a fried version of doughnuts <br>
                </p>
                <a href="Order Form.php" class="btn-btn">Order Now</a>
            </div>
          </div>
        </div>
        <div class="card">
            <div class="box1">
            <img src="puv-bhaji.jpg" alt="" class="left-side" width="100px" height="80px">
            <div class="right-side">
                <h3 class="food-name">Pau-bhaji</h3>
                <h4 class="food-dollar">₹120</h4>
                <p>
                    Pav bhaji is a street food dish from Mumbai, India consisting of a thick spicy vegetable 
                    curry (bhaji) served with a soft buttered bread roll (pav). It originated in the city of 
                    Mumbai, Maharashtra. <br>
                </p>
                <a href="Order Form.php" class="btn-btn">Order Now</a>
            </div>
          </div>
          <div class="box1">
            <img src="Butter Pav-bhaji.jpg" alt="" class="left-side" width="100px" height="80px">
            <div class="right-side">
                <h3 class="food-name">Butter Pav-bhaji</h3>
                <h4 class="food-dollar">₹150</h4>
                <p>
                    Pav Bhaji is a delicious street food from Mumbai.street food dish from Mumbai, India consisting 
                    of a thick spicy vegetable curry (bhaji) served with a soft buttered bread roll<br>
                </p>
                <a href="Order Form.php" class="btn-btn">Order Now</a>
            </div>
          </div>
        </div>
        <a href="Foods.php" class="food-text">See all Foods</a>
       </div>
    </div>
    <div class="logo1">
        <a href=""><img src="instagram.jpg" alt="" class="food-Logo" width="40px"></a>
        <a href="https://twitter.com/home?lang=en"><img src="twitter.jpg" class="food-Logo"width="45px"></a>
        <a href="https://github.com/vishalpanchal687/Personal-Web-Site"><img src="Github.jpg" class="food-Logo" width="50px">
    </div>
    </form>
    <p>All Right reserved. Designed By</p><br>
    <h6>Code_With_Vishal</h6>
    
</body>
</html>
<script src="vishal.js"></script>
<style>
    .logo{
        margin-left: 8rem;
    }
    .menu{ 
        margin-left: 35.6rem;
        margin-top: -5rem;
        font-size: 18px;
        font-family:  'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .menu ul{
        list-style: none;
    }
    .menu ul li{
        text-decoration: none;
        display: inline-block;
    }
    .menu ul li a{
        text-decoration: none;
        color: black;
        margin-left: 15px;
    }
    .menu ul li a:hover{
        color: blue;
    }
    @media(max-width: 768px){
        .logo{
            margin-left: -10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .menu{
            display: flex;
            margin-left: -28.9px;
            margin-top: 1rem;
        }   
    }
    .search-container{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 10rem;
    }
    #searchBar{
        width: 20%;
    }
    .search-container input[type="text"]{
        padding: 5px;
    }
    .text{
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        margin-top: 3rem;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color: #ff0384;
    }
    .btn{
        margin-left: 8px;
        padding: 5px;
        border-radius: 5px;
        background-color: darkred;
        color: white;
        cursor: pointer;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    @media only screen and (max-width:768px){
    .search-container{
        margin-top: 50px;
        margin-left: -20px;
    }
    #searchBar{
        width: 65%;
        margin-left: 18px;
    }
    .text{
            font-size: 15px;
            margin-left: -20px;
}
    }
    .container{
        display: grid;
        grid-template-columns:  repeat(auto-fit, minmax(270px, 1fr));
        margin-left: 9rem;
        margin-top: 5rem;
        border-radius: 10px;
        position: relative;
        bottom: 50px;
    }
    .img{
        display: flex;
        border-radius: 30px;
    }
    .float-text{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: -2rem;
        bottom: 90px;
        margin-left: -10rem;
        color: white;
        font-size: 18px;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    @media only screen and (max-width:768px){
        .container{
            margin-left: 1px;
            margin-top: 2rem;
            
        }
        .img{
            margin-top: 2rem;
            margin-left: 35px;
        }
        .float-text{
            display: flex;
            bottom: 100px;
            margin-left: -1rem;
        }
    }
    .card-section{
        background-color: lightgrey;
    }
    .title{
         display: flex;
         align-items: center;
         justify-content: center;
         font-family: Verdana, Geneva, Tahoma, sans-serif;
         border: none;
         border-radius: 10px;
         padding: 40px;
    }
    .card{
        display: grid;
        grid-template-columns:  repeat(auto-fit, minmax(270px, 1fr));
    }
    .box{
        width: 83%;
        margin: 1%;
        padding: 2%;
        float: left;
        background-color: white;
        border-radius: 15px;
        margin-left: 3rem;
    }
    .left-side{
        border-radius: 15px;
    }
    .right-side{
        margin-left: 10rem;
        margin-top: -5.8rem;
    }
    .food-name{
        font-size: 15px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .food-dollar{
        margin-top: -10px;
        font-size: 18px;
    }
    a{
        border: none;
        border-radius: 10px;
        padding: 5px;
        text-decoration: none;
    }
    .btn-btn{
        background-color:#ff0384;
        color: white;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    @media only screen and (max-width:768px){
        .food-name{
            margin-left: 1px;
            margin-top: 25px;
        }
        .food-dollar{
            margin-left: 1px;
        }
        .right-side{
            margin-left: 6rem;
        }
        .box{
            width: 75%;
            padding: 5%;
            margin-bottom: 5%;
            margin-left: 2rem;
        }
        .left-side{
            width: 80px;
        }
    }
    .box1{
        width: 83%;
        margin: 1%;
        padding: 2%;
        float: left;
        background-color: white;
        border-radius: 15px;
        margin-left: 3rem;
    }
    @media only screen and (max-width:768px){
        .box1{
            width: 75%;
            padding: 5%;
            margin-bottom: 5%;
            margin-left: 2rem;
        }
    }
    .food-text{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 2rem;
        font-size: 17px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: #ff0384;
        margin-bottom: 1rem;
        border: none;
        border-radius: 10px;
        padding: 10px;
    }
    .logo1{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 1rem;
    }
    p{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    h6{
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        margin-top: -1.4rem;
        color: #ff0384;
    }
</style>