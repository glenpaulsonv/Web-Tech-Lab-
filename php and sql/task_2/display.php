<html>
<head>
<title>Student Details</title>
</head>
<body>
<?php

 $host = "localhost";
 $dbUsername = "root";
 $dbPassword = "";
 $dbname = "test4";

 //Create Connection
 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

 $p=$_GET["psd"];

 $query1 = "SELECT * FROM student2 where Password = $p";
 $result = $conn->query($query1);
 ?>
 
 
 <?php
 if($result)
 {
    if($result->num_rows>0)
    {?>
    <br>
    <table border="1">
    <caption>Student Details</caption>
    <tr><th>RNo</th><th>SName</th><th>Email</th><th>User Id</th><th>Mobile Number</th></tr>
    <?php

        //output data of each row
        while($row=$result->fetch_assoc()) {
            ?>
            <tr>
            <td><?php echo $row["RNo"];?></td>
            <td><?php echo $row["SName"];?></td>
            <td><?php echo $row["Email"];?></td>
            <td><?php echo $row["User Id"];?></td>
            <td><?php echo $row["Mobile Number"];?></td>
            </tr>
            <?php
            
   
        }
    }
    else
 {
     echo "<b>Invalid Credentials<b>";
 }
 }
 
 
 $conn->close();
 ?>
 </table>
 </body>
 </html>