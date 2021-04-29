<?php
$myfile = fopen("student_Details.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("student_Details.txt"));
fclose($myfile);
?>

<!-- Ref Link - W3Schools-->