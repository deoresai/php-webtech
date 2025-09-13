<?php
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
$str=$_GET['str'];
$case=$_GET['case'];
switch($case){
    case "a":
            length($str);
            break;
    case "b":
            vovels($str);
            break;
    case "c":
            $str2=strtolower($str);
            $titleCase = ucwords($str2);
            echo $titleCase; 
            break;
    case "d":
            $str2=str_pad($str,5,'*');
            echo"<br>pad string = ".$str2;
            break;
    case "e":
            $str2=ltrim($str);
            echo "<br>Trimmed string =".$str2;
            break;
    case "f":
            $str2=strrev($str);
            echo "<br>reverse = ".$str2;            
            break;
}
?>
