<?php
    $str=$_GET['str'];
function length($str){
    $count=0;
    $i=0;
    while(isset($str[$i])){
        $count++;
        $i++;
    }
    echo "<br>String length : ".$count;
}
function vovels($str){
    $count=0;
    $i=0;
    while(isset($str[$i])){
        if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u'||$str[$i]=='A'||$str[$i]=='E'||$str[$i]=='I'||$str[$i]=='O'||$str[$i]=='U'){
            $count++;
        }
        $i++;
    }
    echo "<br>Total vovels are =".$count;
}
$str2=strtolower($str);
echo"String = ".$str2;
$str2=str_pad($str,5,'*');
echo"<br>pad string = ".$str2;
$str2=ltrim($str);
echo "<br>Trimmed string =".$str2;
$str2=strrev($str);
echo "<br>reverse = ".$str2;

length($str);
vovels($str);
?>