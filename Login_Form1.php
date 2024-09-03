<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
<form action="Connection4.php"  method="post">
  <img src="Images.jpg" width="100%" height="825px">
        <div class="card-section">
         
          <h1>Welcome to Restaurant website</h1><br><br>

          <label for="Username" class="wrapper">Username</label>
          <input type="text" id="username" placeholder="username" required  name="Username"><br><br><br>

          <label for="Password" class="wrapper">Password</label>
          <input type="Password" id="password" placeholder="Password" required name="Password"><br><br><br><br>

         <button onclick="myFunction1()" class="btn-btn">Login</button>
          
        </div>
</form>
</body>
</html>
<style>
*{
  margin: 0;
  padding: 0;
}
  h1{
    color: white;
    text-align: center;
    font-size: 37px;
    margin-top: -32rem;
    margin-left: 20px;
    color: #e76f51;
    text-decoration-line:;
    text-decoration-color: #e76f51;
  }
  .btn-btn{
    margin-left: 40.6rem;
    border: 1px solid black;
    border-radius: 5px;
    padding: 10px;
    width: 20%;
    background-color: #f39f5a;
    cursor: pointer;
    box-shadow:0 5px 0 #213222 ;
    transition: all 0.1s;
    margin-top: 2rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin-top: -10px
  }
  .btn-btn:hover{
    transform: translateY(5px);
     box-shadow: none;
  }
  #text{
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    margin-top: 50px;
    color: white;
  }
  #password{
    border: 1px solid black;
    border-radius: 5px;
    padding: 6px;
    margin-left: 5rem;
    font-family: Segoe UI;
    width: 16%;
    margin-left: 16px;
    margin-top: -30px;
  }
  #username{
    border: 1px solid black;
    border-radius: 5px;
    padding: 6px;
    margin-left: 6rem;
    font-family: Segoe UI;
    width: 16%;
    margin-left: 10px;
  }
  .wrapper{
    margin-left: 39rem;
    color: white;
    font-size: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin-top: 20px;
  }
  @media only screen and (max-width: 890px){
    img {
        width: 104%;
        height: 1010px;
        margin-top: -1rem;
    }
    h1{
        font-size: 35px;
        margin-top: -550px;
        color: white;
    }
    #password{
        width: 60%;
        margin-left: 18px; 
    }
    #username{
        width: 60%;
        margin-left: 10px;
    }
    .wrapper{
        margin-left: 20px;
        color: white;
        width: 45%;
    }
    .btn-btn{
        margin-left: 110px;
        width: 60%;
     }
  }
</style>