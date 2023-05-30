<?php
//arithmetic operators + - * / % 

$x = 10;
$y = 20;
$z = null;

$z = $x * $y;

echo $z;
echo "<br>";
// increment and decrement operators ++ --

$counter = 0;

$counter -=3;
echo $counter;

$hi = 0;

$hi += 3;

echo "<br>";

echo $hi;

$hello = 0;
$hello ++ ;

echo "<br>";

echo $hello;

echo "<br>";

//operator Precedence () ** * / % + -

$total_amount = (2*9+8)-2/3;
echo  $total_amount;

?>