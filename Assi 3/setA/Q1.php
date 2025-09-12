<?php
function domod($A,$B){
    $mod=$A%$B;
    echo "<br>mod value =".$mod;
}
function calpower($A,$B){
    $power=$A**$B;
    echo "<br>power is =".$power;
}
function calsum($A){
    $sum=0;
    for($i=0; $i<$A; $i++){
        $sum=$sum+$i;
    }
    echo "<br>sum is =".$sum;
}
function facto($B){
    $facto=1;
    for($i=$B; $i>0; $i--){
        $facto=$facto*$i;
    }
    echo "<br>factorial is= ".$facto;
}

$A=$_GET['A'];
$B=$_GET['B'];
domod($A,$B);
calpower($A,$B);
calsum($A);
facto($B);

?>

