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
    echo "Connection was successful<br>";
}

$name=$_GET['n'];

$sql = "SELECT * FROM student where first_name='$name'";

$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);

echo $num;
echo " records found in the contact TABLE <br>";
// Display the rows returned by the sql query
if($num> 0){
    // We can fetch in a better way using the while loop
    while($num!=0){
       $row = mysqli_fetch_assoc($result);
       echo "<hr><b>Reg.No:</b>".$row['regno'] .  ".<br><b>First Name</b> ". $row['first_name'] ."<br><b>City:</b> ". $row['city']. ".<br> <b>Address </b>". $row['addr'];
        echo "<br><hr>";
        $num--;
       
    }


}
else
echo " No Record found for the query.<br>";

?>
