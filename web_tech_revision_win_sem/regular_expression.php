<?php

$v = "";

if(isset($_POST['n']))
{
    $v = htmlentities($_POST['n']);
    
}


?>

<!--HTML Entities are used so that html tags in the form entry are displayed as it is-->

<form action="" method="POST">
    <input type="text" name="n">
    <input type="submit">

</form>

<!--<script>alert('u r hacked')</script>-->


<?php

echo $v;

?>