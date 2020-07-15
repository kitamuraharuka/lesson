<?php
//1//
$name = "kitamura";
if ($name = "kitamura"){
    echo "私はあなたの名前です";
}else{
    echo "あなたの名前ではありません";
}
echo "\n";

//2//
$total = 0;

for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

//3//
$fruits = array("apple","banana","orange","lemon","painapple");

foreach( $fruits as $fruit){
    echo "要素は" .$fruit;
    echo "\n";
}

//4//
$start = 1;
$end = 100;
for($i = $start; $i < $end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}

//test//
for ($i = 1; $i < 100; $i++){
    if($i % 5 == 0){
        var_dump($i);
        echo "\n";
    }
}

echo 5%5;
