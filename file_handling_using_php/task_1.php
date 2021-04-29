<?php
$myfiles = fopen("student_Details.txt", "w") or die("Unable to open file!");
$sNo = "18BCE7010\n";
fwrite($myfiles, $sNo);
$sName = "Glen Paulson\n";
fwrite($myfiles, $sName);
$dob = "05-08-1999\n";
fwrite($myfiles, $dob);
fclose($myfiles);
?>

<!-- Ref Link - W3Schools-->