<?php

//$u = $_GET['uid'];


if(isset($_POST['rno']))
{
    $rno = $_POST['rno'];
    $sname = $_POST['sname'];
    $mark1 = $_POST['mk1'];
    $mark2 = $_POST['mk2'];
    $mark3 = $_POST['mk3'];

    $total = $mark1 + $mark2 + $mark3;
    $percentage = $total/3;

    if($percentage>90)
    {
        $class='First Class';
    }
    else if($percentage>80)
    {
        $class='Second Class';
    }
    else if($percentage>70)
    {
        $class='Third Class';
    }
    else if($percentage>60)
    {
        $class='Distinction';
    }
    else
    {
        $class='Fail';
    }


    echo "<table border='1'>
    <tr>
    <th>RNo</th>
    <th>SName</th>
    <th>Total</th>
    <th>Percentage</th>
    <th>Result</th>
    </tr>";

  echo "<tr>";
  echo "<td>" . $rno . "</td>";
  echo "<td>" . $sname . "</td>";
  echo "<td>" . $total . "</td>";
  echo "<td>" . $percentage . "</td>";
  echo "<td>" . $class . "</td>";
  echo "</tr>";

}

?>