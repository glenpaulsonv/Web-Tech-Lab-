<?php

$v = "";

$userRegex = "/^[\w\d\_]{5,20}$/";

if(isset($_POST['n']))
if(preg_match($userRegex, $_POST['n']))
    $v = "Valid username";

else
    $v = "Invalid username";

?>




<form action="" method="POST">
    <input type="text" name="n" placeholder="user name">
    <input type="submit" value="Verify">

</form>

<?php

echo $v;

?>