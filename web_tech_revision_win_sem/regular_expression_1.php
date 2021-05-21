<?php

$rg = "/Nit/i";  /* i - is used to avoid case sensitivity
                    $rg = "/[NV]it/"  - takes either Nit or Vit
                    $rg = "/[a-zA-Z]it/"
                    $rg = "/[a-zA-Z0-9]it/"    or $rg = "/[a-zA-Z\d]it/"   or      $rg = "/[\w\d]it/"
                    
                    $rg = "/V[\w\d]+t/"      using '+'        $str = " am in Vi9fsghvt"  to account for any number of characters between V and t
                    $rg = "/V[\w\d]+\st/"      using '+'       using '\s' for space       $str = " am in Vi9fsghv t"
                    $rg = "/V[\w\d\%^&*]+\st/"      using '+'       using '\s' for space   using '\%^&*' for special characters     $str = " am in Vi9%%%fsghv t"
                    $rg = "/V[\w\d]+[\s]+t/"      using '+'       using '[\s]' for n spaces   $str = " am in Vi9%%%fsghv    t  
                    $rg = "/V[\w\d]+[\s]{4}t/"      using '+'       using '[\s]{4}' for 4 spaces   $str = " am in Vi9%%%fsghv    
                    
                    $rg = "/^V[ix]t/";    $str ="Vit am in dfsd"  comparing at the begining of the string ^                        
                    $rg = "/V[ix]t$/";    $str ="Vit am in dfsd"  comparing at the end of the string   */ 



$str = " am in Nit";

if( preg_match($rg, $str))
echo "Matched";
else
echo "No match";

?>


