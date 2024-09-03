<?php  

$Username = $_POST['Username'];
$Password = $_POST['Password'];


//Database connection


$conn = new mysqli('localhost', 'root', '', 'Login');
if($conn->connect_error){
    die('connection Failed:' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into Loginform(Username, Password) values(?,?)");
    $stmt->bind_param("ss",$Username, $Password);
    $stmt->execute();
    require('index5.php');
    $stmt->close();
    $conn->close();
}
?>