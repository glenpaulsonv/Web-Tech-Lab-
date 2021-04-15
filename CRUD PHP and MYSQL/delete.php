<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$tname=$_POST["tname"];
$sql1 = "DELETE FROM $tname WHERE ABS(TIMESTAMPDIFF(YEAR,sysdate(),dob))>=65";
$stmt = $conn->prepare($sql1);
$stmt->execute();
$sql1="SELECT EmpId,EName,ABS(TIMESTAMPDIFF(YEAR,sysdate(),dob)) AS Age FROM $tname";
$result = mysqli_query($conn, $sql1);
$result = $conn->query($sql1);
echo "Record(s) Deleted";
    if(mysqli_num_rows($result) > 0){
        echo "<table border = '1'><th>Emp ID</th><th>Emp Name</th><th>Age</th>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr><td>".$row["EmpId"]."</td><td>".$row["EName"]."</td><td>".$row["Age"]."</td></tr>";

        }
        echo "</table>";
    }
$conn->close();
?>