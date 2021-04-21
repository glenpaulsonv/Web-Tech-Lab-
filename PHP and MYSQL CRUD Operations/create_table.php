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
    die("Sorry failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}


// Create a table in the db
$sql = "CREATE TABLE student 
( 
    regno VARCHAR(12) NOT NULL,
    first_name VARCHAR(30) NOT NULL, 
    city VARCHAR(20),
    addr VARCHAR(30),
    PRIMARY KEY (regno)
)";


$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table student got  created successfully!<br>";
}
else{
    echo "The table was not created successfully due to this error ---> ". mysqli_error($conn);
}
  
?>
