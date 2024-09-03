<!DOCTYPE html>
<form="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form </title>
</head>
<body>
<div>
    <form action="" method="post">
    <img src="classy-restaurant.jpg" width="100%" height="1000px">
    <div class= "logo">
        <img src="restaurants.jpg" width="150px">
    </div>
    
    <div class="menu">
        <ul>
            <li><a href="index5.php">Home</a></li>
            <li><a href="Categories">Categories</a></li>
            <li><a href="Foods.php">Foods</a></li>
            <li><a href="Contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="ex-card">
            <h4 class="text-section">Fill this form to confirm your order.</h4>
            <img src="Punjabi.jpg" alt="छिपी हुई इमेज" width="300px" height="250px" class="hidden-images"><br><br>
            <img src="Gujarati.jpg" alt="छिपी हुई इमेज" width="300px" height="250px" class="hidden-images"><br><br>
            <img src="idali.jpg" alt="छिपी हुई इमेज" width="300px" height="250px" class="hidden-images"><br><br>
            <img src="Butter Pav-bhaji.jpg" alt="छिपी हुई इमेज" width="300px" height="250px" class="hidden-images"><br><br>
            <img src="pizza.jpg" alt="छिपी हुई इमेज" width="300px" height="250px" class="hidden-images">
            <img src="gulab.jpg" alt="छिपी हुई इमेज" width="300px" height="250px" class="hidden-images">
            <img src="Bombay Halwa.jpg" alt="छिपी हुई इमेज" width="300px" height="250px" class="hidden-images">
            <img src="burger.jpg" alt="छिपी हुई इमेज" width="300px" height="250px" class="hidden-images">
            <img src="Rajeshthan.jpg" alt="छिपी हुई इमेज" width="300px" height="250px" class="hidden-images">
            <img src="momos.jpg" alt="छिपी हुई इमेज" width="300px" height="250px" class="hidden-images">

                <label for="Full Name" class="food-bar">Full Name</label><br>
                <input type="text" name="Full name" required class="input" placeholder= "E.g. Vishal Panchal"> <br>

                <label for="Phone number" class="food-bar">Phone number</label><br>
                <input type="tel" name="contact" required class="input"placeholder= "E.g. 69385xxxxx" id="mobileNumberinput"> <br>

                <label for="Email" class="food-bar">Email</label><br>
                <input type="Email" name="Email" required class="input" placeholder= "E.g. vishal@gmail.com"> <br>

                <label for="Address" class="food-bar">Address</label><br>
                <input type="Address" row="10" name="Address" required class="input" placeholder= "E.g. khedbrama, Poshina"> <br><br>

                <div class="food-bar">Quantity</div>
                <input type="tel" name="qty" value="1" class="input">
    
                <button type="Order Now" onclick="Myfunction()" class="card-back">Order Now</button>
                <button type="Payment Form" onclick="OpenSecoundPage()" class="card-front">Payment Form</button> 

    </div>       
    <div class="logo1">
        <a href=""><img src="instagram.jpg" alt="" class="food-Logo" width="40px"></a>
        <a href="https://twitter.com/home?lang=en"><img src="twitter.jpg" class="food-Logo"width="45px"></a>
        <a href="https://github.com/vishalpanchal687/Personal-Web-Site"><img src="Github.jpg" class="food-Logo" width="50px"></a></div>
    <p>All Right reserved. Designed By</p><br>
    <h6>Code_With_Vishal</h6>
    </form>
</body>
</html>
<script src="vishal.js"></script>
<style>
    *{margin: 0;
    padding: 0;}
    #Image1{
        display: none;
        
    }
    .logo{
        margin-left: 8rem;
        margin-top: -62rem;
        mix-blend-mode: color-burn;
    }
    .menu{ 
        margin-left: 70rem;
        margin-top: -6rem;
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
        color: white;
        margin-left: 15px;
    }
    .menu ul li a:hover{
        color: #ff0384;
    }
    @media(max-width: 768px){
        .logo{
            margin-left: -10px;
            display: flex;
            align-items: center;
            justify-content: center;
            mix-blend-mode: color-burn;
        }
        .menu{
            display: flex;
            margin-left: 30px;
            margin-top: 1rem;
        }   
    }
    .ex-card{
    border: 1px solid white;
    margin: 30%;
    padding: 3%;
    border-radius: 5px;
    margin-top: 10px;
    color: black;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .card{
    border: 1px solid white;
    margin: 30%;
    padding: 3%;
    border-radius: 5px;
    margin-top: 10px;
    color: black;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    position: absolute;
    
    }
    
    .text-section{
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px;
        color: #ff0384;
        font-size: 25px;
        margin-top: -3rem;
    }
    .input{
        width: 96%;
        padding: 1%;
        margin-bottom: 3%;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
    }
    .input1{
        width: 96%;
        padding: 1%;
        margin-bottom: 3%;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
    }
    #Menu{
        border: 1px solid black;
        border-radius: 5px;
        padding: 5px;
        background-color: #ff0384;
    }
    @media only screen and (max-width:768px){
        .text-section{
            margin-left: 1px;
            font-size: 20px;
            text-align: center;
        }
        .ex-card{
            margin-top: 1.5rem;
            height: 42rem;
            margin-left: 20px;
            margin-right: 1rem;
            color: black;
        }
        .card{
            margin-top: 1.5rem;
            height: 42rem;
            margin-left: 20px;
            margin-right: 1rem;
            color: black;
        }
    }
     p{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1rem;
            color: white;
            font-size: 18px;
        }
    h6{
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            margin-top: 10px;
            color: #ff0384;
            margin-bottom: -10px;
        }
        .logo1{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: -1rem;
            margin-top: -35rem;
            mix-blend-mode: color-burn;
            
        }
        @media only screen and (max-width:768px){
            p{
                margin-top: 1rem;
                font-size: 18px;
            } 
            h6{
                margin-top: -6px;
                font-size: 18px;
            }
            .logo1{
                margin-top: -14rem;
            }
        }
        .food-bar{
            margin-top: -15px;
        }
        .card-front{
            width: 92%;
            margin-top: 1rem;
            order: 1px solid black;
            border-radius: 5px;
            padding: 10px;
            margin-left: 1rem;
            font-size: 18px;
            box-shadow:0 5px 0 #213222 ;
            transition: all 0.1s;
            cursor: pointer;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ff0384;
        }
        .card-front:hover{
            transform: translateY(5px);
            box-shadow: none;
            background-color: #ff0384;
        }
        .card-back{
            width: 92%;
            margin-top: 1rem;
            order: 1px solid black;
            border-radius: 5px;
            padding: 10px;
            margin-left: 1rem;
            font-size: 18px;
            box-shadow:0 5px 0 #213222 ;
            transition: all 0.1s;
            cursor: pointer;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ff0384;
        }
        .card-back:hover{
            transform: translateY(5px);
            box-shadow: none;
            background-color: #ff0384;
        }
        a{
            margin-top: 65px;
            text-decoration: none;
            color: white;
            font-size: 18px;
        }
        .hidden-images{
            width: 25%;
            height: 100px;
            border-radius: 15px;
            border: none;
            padding: 5px;
            display: none;
        }
</style>