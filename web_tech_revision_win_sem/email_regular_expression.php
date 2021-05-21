<?php


$v = "";

$emailRegex = '/^[a-z\d\._-]+@([a-z\d-]+\.)+[a-z]{2,6}$/i';

if(isset($_POST['n']))
if(preg_match($emailRegex, $_POST['n']))
    $v = "Valid Email Id";

else
    $v = "This is an invalid Email Id";


?>

<form action="" method="POST">
    <input type="text" name="n" placeholder="Enter your email id">
    <input type="submit" value="Verify">

</form>

<?php

echo $v;

?>