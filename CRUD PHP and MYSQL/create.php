<html>
    <body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "employee";  


        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "CREATE TABLE employee(EmpId INT, EName VARCHAR(40), DOB DATE, DOJ DATE, Designation VARCHAR(40), Department VARCHAR(40),Salary INT)";
        $conn->query($sql);

        $empid=$_POST["empid"];
        $ename=$_POST["empname"];
        $dob=date($_POST['dob']);
        $doj=date($_POST['doj']);
        $desg=$_POST["designation"];
        $dept=$_POST["dept"];
        $sal=$_POST["salary"];
        $sql="INSERT INTO employee(empid,ename,dob,doj,designation,department,salary) VALUES ('$empid','$ename','$dob','$doj','$desg','$dept','$sal')";

        if($conn->query($sql)==FALSE){
            echo "Unable to run the query";
        }
        else{
            echo "Table Created/Row inserted";
        }
        
        $tn="Employee";
        $sql1="SELECT * FROM $tn";
        $result = $conn->query($sql1);
        if($result->num_rows > 0){
            echo "<table border = '1'><th>Emp ID</th><th>Emp Name</th><th>DOB</th><th>DOJ</th><th>Designation</th><th>Department</th><th>Salary</th>";
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr><td>".$row["EmpId"]."</td><td>".$row["EName"]."</td><td>".$row["DOB"]."</td><td>".$row["DOJ"]."</td><td>".$row["Designation"]."</td><td>".$row["Department"]."</td><td>".$row["Salary"]."</td></tr>";

            }
            echo "</table>";
        }
        $conn->close();
        ?>    
    </body>
</html>