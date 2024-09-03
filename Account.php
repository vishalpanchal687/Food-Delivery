<?php
   require('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerces</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="card">
        <div class="card-header" id="loginHeader">Sign-in</div>
        <div class="card-body" id="loginform">
            <form>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="Password" id="Password" name="Password">
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
</body>
</html>
<style>

body{
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0;
}
.card{
    width: 300px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}
.card-header{
    background-color: #007bff;
    color: white;
    padding: 10px;
    font-weight: bold;
    cursor: pointer;
    text-align: center;
}
.card-header:hover{
    background-color: #0056b3;
}
.card-body{
    padding: 20px;
}
.form-group{
    margin-bottom: 20px;
}
.form-group label{
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}
.form-group input{
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}
.form-group button{
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
.form-group button:hover{
    background-color: #0056b3;
}
</style>



width: 97%;
    padding: 1%;
    border-radius: 15px;
    padding: 15px;
    margin-bottom: -10px;
    margin-top: 3rem;



    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: Form1.php" );
    }else{
        echo"invalid username or password";
    }
}

mysqli_close($conn);