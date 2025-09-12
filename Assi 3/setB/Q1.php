<?php
$S1=$_GET['S1'];
$S2=$_GET['S2'];
$n=$_GET['n'];

    if(stripos($S1,$S2)==0){
        echo "$S2 appears at start of $S1 <br>";
    }else
        echo "$S2 not appears at Start of  $S1 <br>";
    $pos=stripos($S1,$S2);
    if($pos>=0)
        echo "position of $S2 is $pos in $S1 <br>";
    else
        echo "$S2 not found <br>";
    
    if(strncasecmp($S1,$S2,$n)===0){
        echo "first $n charectors are same <br>";
    }
    else{
        echo "first $n are not equal <br>";
    }
?>
