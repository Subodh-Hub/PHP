<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome</h1>
    <h2>Enter weather you want to find the area, circumference of circle</h2>
    <form action="circle.php" method="get">
        <label for="radius">Radius: </label>
        <input type="text" name="x">
        <br>
        <input type="submit" value="click here">
    </form>
</body>
</html>
<?php
$radius = $_GET["x"];
$A= null;
$C=null;
$C = 2*pi()*$radius;
$C= round($C,2);
$A = pi()*pow($radius,2);
echo "The Circumference of the circle is: {$C}<br>";
echo "The Area of the circle is: {$A}";
?>