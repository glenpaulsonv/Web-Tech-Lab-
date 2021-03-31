<?php

//$u = $_GET['uid'];


if(isset($_GET['uid']))
{
    $name = $_GET['uid'];
    $p = $_GET['pwd'];
    $cp = $_GET['cpwd'];

    if($name=='')
    echo 'User Id is blank.';
    else if(($p=='')&&($cp==''))
    echo 'Password fields cannot be empty,';

    else if($p == $cp)
  
    {
        echo "<div id='b1'>Welcome ".$name."</div>";
    }
    else
    {
        echo "<div id='error'>Password and Confirm password are not equal</div>";
    }

}

?>
