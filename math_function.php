<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math_function.php" method="get">
        <label for="x">x</label>
        <input type="text" name="x">
        <br>
        <label for="y">y</label>
        <input type="text" name="y">
        <br>
        <label for="z">z</label>
        <input type="text" name="z">
        <br>
        <input type="submit" value="Total">
    </form>
</body>
</html>
<?php

use function PHPSTORM_META\map;

    $x=$_GET["x"];
    $y =$_GET["y"];
    $z = $_GET["z"];
    // for absolute value
    // $total=abs($x);
    // for rounding the value
    // $total=round($x);
    // round down
    // $total=floor($x);
    // rounding up
    // $total= ceil($x);
    // power function
    // $total=pow($x,$y);
    // square root function 
    // $total = sqrt($x);
    // maximum between any 3 numbers
    // $total = max($x,$y,$z);
    // minimum between any 3 numbers
    // $total = min($x,$y,$z);
    // pie function
    // $total = pi();
    //To generate random number from 1 to 6
    $total = rand(1,6);
    echo $total;
    ?>