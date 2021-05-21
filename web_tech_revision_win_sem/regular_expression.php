<?php

$v = "";

if(isset($_POST['n']))
{
    $v = $_POST['n'];
    
}


?>

<form action="" method="POST">
    <input type="text" name="n">
    <input type="submit">

</form>

<?php

echo $v;

?>