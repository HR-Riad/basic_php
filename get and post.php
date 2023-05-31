<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <!--get 

    <form action="get and post.php" method="get" >
    -->
  
    <!-- Post
    <form action="get and post.php" method="post" >
    <label> Username: </label>
    <br>
    <input type="text" name="username">
    <br>
    <label>Password: </label>
    <br>
    <input type="password" name="password">
    <br>
    <input type="submit" value="Log in" >
    </form>

    -->

    <form action="get and post.php" method="post" >
    <label> Quantity: </label>  <br>
    <input type="text" name="quantity">
    <br>
    <input type="submit" value="total" >
</body>
</html>

<?php

// Line break way  $_Get[""]  . "<br>"    or {$_Get[""]} <br>
//get

//echo $_GET["username"] . "<br>";
//echo $_GET["password"] . "<br>";

//post

/*
echo $_POST["username"] . "<br>";
echo $_POST["password"] . "<br>";
*/

$item = "burger";
$price = 9.99;
$quantity = $_POST["quantity"];
 echo "You have orderd {$quantity}x {$item}/s . <br>";
 $total = null;
 $total = $quantity * $price;

 
 echo"Your Total price is {$total}";








?>