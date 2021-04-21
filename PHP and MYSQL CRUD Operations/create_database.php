<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection is successful<br>";
}

// Create a db
$sql = "CREATE DATABASE db";

$result = mysqli_query($conn, $sql);

// Check for the database creation success
if($result){
    echo "The db has been  successfully created!<br>";
}
else{
    echo "The db creation failed because of this error ---> ". mysqli_error($conn);
}
  
?>
