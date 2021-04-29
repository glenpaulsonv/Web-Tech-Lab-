<?php
$myfiles = fopen("student_Details.txt", "w") or die("Unable to open file!");
$sNo = "18BME0000\n";
fwrite($myfiles, $sNo);
$sName = "Glen Paulson\n";
fwrite($myfiles, $sName);
$dob = "05-05-2005\n";
fwrite($myfiles, $dob);
fclose($myfiles);
?>

<!-- Ref Link - W3Schools-->