<?php
//1//
function sum($max) {
    $result = 2 * $max;
return $result;}
echo sum(4);
echo "\n";

//2//
function f($a, $b) {
     $result = $a + $b;
     return $result;
    }
echo f (3,5);
echo "\n";

 //3//
 
function outputMultiplication($arr){
    $result = 1;
    foreach ($arr as $a){
        $result *= $a;
    }
    echo $result;
}
outputMultiplication(array (1, 3, 5, 7, 9));
echo "\n";

function multiply($arr){
   return  array_product($arr);
}
echo multiply(array(1,3,5,7,9));
echo "\n";

//4//
function max_array($arr){
    $result = 0;
    foreach ($arr as $a){
        if($result < $a){
            $result = $a;
        }
    }
    return $result;
}
echo max_array(array(1,3,5,7,9));

//5//
$text = '<p>Test paragraph.</p><!-- Comment -->';
echo strip_tags($text);
echo "\n";

$stack = array("orange","banana");
array_push($stack, "apple", "raspberry");
print_r($stack);
echo "\n";

$array1 = array();
$array2 = array(1 => "data");
$result =array_merge($array1, $array2);
print_r($result);
echo "\n";

$nextweek = time() + (7 * 24 * 60 * 60);
echo 'Now:  '.date('Y-m-d',$nextweek). "\n";
$timestamp = mktime(9, 12, 30);
echo $timestamp."\n";

date_default_timezone_set('UTC');
echo date("l");





