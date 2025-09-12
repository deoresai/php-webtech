 <?php
 $str=$_GET["str"];
 $sep=$_GET["sep"];
 $newsep=$_GET["newsep"];

$newstr=explode($sep, $str);
    print_r($newstr); 
    echo "<br>";
$newrep=str_replace($sep, $newsep, $str);
    print_r($newrep);
    echo "<br>";

$last=end($newstr);
    echo "the last word of string is : $last";

?>