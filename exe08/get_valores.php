<?php
$d = 1;
while($d <= 5){
    $v = "num".$d;
    $url = "n".$d;
    $$v = ($_GET[$url] != null) ?$_GET[$url] : 0;
    $d++;
};
echo "$num1 , $num2 , $num3 , $num4 , $num5";
?>