<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form action="mathrelated function.php" method="post">
<label >x:</label>
<input type="text" name="x">
<br>
<label >y:</label>
<input type="text" name="y">
<br>
<label >z:</label>
<input type="text" name="z">
<br>
<input type="submit" value="Total">

</form>
</body>
</html>

<?php

$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

//PHP abs() Function : Return the absolute value of different numbers:
//$total = abs($x);

//PHP round() Function: The round() function rounds a floating-point number.
//$total = round($x)

//PHP floor() Function:The floor() function rounds a number DOWN to the nearest integer, if necessary, and returns the result.
//$total = floor($x);

//PHP sqrt() Function
//$total = sqrt($x);

//PHP pow() Function:
//$total = pow($x,$y);


//PHP max() Function:Find highest value with the max() function
 //$total = max($x,$y,$z);

 //$total = pi();
 //$total = rand();   Random number
 //Random number condition

 //$total = rand(12,22);

 

    echo $total;
                

?>