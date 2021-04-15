<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee"; 

$conn = new mysqli($servername, $username, $password, $dbname);

$table=$_GET['tname'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
else{
    $sql = "SELECT * FROM $table WHERE Salary IN (SELECT max(Salary) AS Salary From $table GROUP BY Department)";
    $result=$conn->query($sql);
    
  if(mysqli_num_rows($result) > 0){

?>
<table border='1'>
<tr>
<th>EmpNum</th>
<th>EmpName</th>
<th>DOB</th>
<th>DOJ</th>
<th>Designation</th>
<th>Department</th>
<th>Salary</th>
</tr>
<?php

    while($rows=$result->fetch_assoc()){ 
             ?> 
            <tr> 
                <td><?php echo $rows['EmpId'];?></td> 
                <td><?php echo $rows['EName'];?></td> 
                <td><?php echo $rows['DOB'];?></td> 
                <td><?php echo $rows['DOJ'];?></td> 
                <td><?php echo $rows['Designation'];?></td> 
                <td><?php echo $rows['Department'];?></td> 
                <td><?php echo $rows['Salary'];?></td> 
            </tr> 
<?php
         }
        }
    }
    ?>
