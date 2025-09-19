<?php
$nameST=$_GET['nameST'] ?? null;
$nameCL=$_GET['nameCL'] ?? null;
$msg=$_GET['msg'] ?? null;

function greet($nameST,$nameCL,$msg){
    echo "<br> Greeating msg <br>";
    echo "Hello $nameST from $nameCL $msg";
}

    greet($nameST ?:"Student",$nameCL ?:"Collage",$msg ?:"wellcome",);

?>