<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
</head>
<body>
    <form action="" metod="post">
     <img src="classy-restaurant.jpg" width="100%" height="950px">
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
    <div class="title">
    <h1>Payment form</h1>
    </div>

            <div class="details">
                <div class="card-section">
                <label for="Name on Card" class="text">Name on Card:-</label>
                <input type="text" name="Name on Card" placeholder="Panchal Vishal" class="input-bar" required /><br>
                </div>

                <div class="card-section">
                <label for="Credit card number" class="text">Credit card number:-</label>
                <input type="num" name="Credit card number" placeholder="1111-2222-3333-4444" class="input-bar" required /><br>
                </div>

                <div class="card-section">
                <label for="Exp Month" class="text">Exp Month:-</label>
                <input type="Exp Month" name="Exp Month" placeholder="August" class="input-bar" required /><br>
                </div>

                <div class="card-section">
                <label for="CVV" class="text">CVV:-</label>
                <input type="text" name="CVV" placeholder="037" class="input-bar" required /><br>
                </div>

                <div class="card-section">
                <label for="Exp year" class="text">Exp Year:-</label>
                <input type="text" name="Exp year" placeholder="2025"class="input-bar" required /><br>

                <button onclick="myFunction()" class="btn-btn">Confirm Payment</button>
                </div>
        </div>
    </form>
</body>
</html>
<script src="vishal.js"></script>
<style>

    *{
        margin: 0;
        padding: 0;
    }

    .logo{
        margin-left: 8rem;
        margin-top: -59rem;
        
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
    .title{
        text-align: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        margin-top: 5rem;
        color: black;
        padding: 2rem;
        color: #ff0384;
    }
    .card{
        margin-top: 4rem;
        width: 99%;
        height: 96%;
        border: 1px solid black;
        border-radius: 10px;
        padding: 10px;
    }
    .details{
        
        width: 40%;
        background-origin: 1px solid black;
        border-radius: 10px;
        padding: 20px;
        margin-left: 30rem;
    }
    .input-bar{
        width: 95%;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 20px;
    }
    .text{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 18px;
    }
    .btn-btn{
            width: 92%;
            margin-top: 1rem;
            order: 1px solid black;
            border-radius: 5px;
            padding: 10px;
            margin-left: 1.5rem;
            font-size: 18px;
            box-shadow:0 5px 0 #213222 ;
            transition: all 0.1s;
            cursor: pointer;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ff0384;
        }
    .btn-btn:hover{
            transform: translateY(5px);
            box-shadow: none;
            background-color: #ff0384;
        }
    @media only screen and (max-width: 768px){
        .details{
            margin-left: 1px;
            width:85%;
        }
        .card{
            width:95%;
        }
    }
</style>