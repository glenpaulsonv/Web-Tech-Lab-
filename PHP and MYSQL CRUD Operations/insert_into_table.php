<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "db"; 

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection is successful<br>";
}

// Variables to be inserted into the table

$r = "31";
$fn = "Glen";
$c = "NY";
$d = "USA";

// Sql query to be executed
$sql = "INSERT INTO student(regno,first_name,city,addr) VALUES ('$r', '$fn','$c', '$d')";



$result = mysqli_query($conn, $sql);


if($result){
    echo "The record has been inserted successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
?>
