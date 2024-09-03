<?php

$servername="localhost";
$username="root";
$password="";
$dbname="restaurants";


$conn= mysqli_connect("localhost", "root","","restaurants");


if(mysqli_connect_error()){
    echo"
    <script>
    alert('cannot connect to database');
    </script>
    ";
    exit();
}

?>