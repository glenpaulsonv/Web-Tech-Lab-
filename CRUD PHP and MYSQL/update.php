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
$sql1 = "UPDATE $tname SET Salary=Salary+20000,Designation='Professor' WHERE Designation='Associate Professor' AND ABS(TIMESTAMPDIFF(YEAR,sysdate(),doj))>=5";
$stmt = $conn->prepare($sql1);
$stmt->execute();
$sql = "UPDATE $tname SET Salary=Salary+50000,Designation='Associate Professor' WHERE Designation='Assistant Professor' AND ABS(TIMESTAMPDIFF(YEAR,sysdate(),doj))>=5";
$stmt = $conn->prepare($sql);
$stmt->execute();

$sql1="SELECT * FROM $tname";
$result = mysqli_query($conn, $sql1);
$result = $conn->query($sql1);
echo "Table Updated";
    if(mysqli_num_rows($result) > 0){
        echo "<table border = '1'><th>Emp ID</th><th>Emp Name</th><th>DOB</th><th>DOJ</th><th>Designation</th><th>Department</th><th>Salary</th>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr><td>".$row["EmpId"]."</td><td>".$row["EName"]."</td><td>".$row["DOB"]."</td><td>".$row["DOJ"]."</td><td>".$row["Designation"]."</td><td>".$row["Department"]."</td><td>".$row["Salary"]."</td></tr>";

        }
        echo "</table>";
    }
$conn->close();
?>