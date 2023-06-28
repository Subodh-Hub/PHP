<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My_Site</title>
</head>
<body>
    <form action="index.php" method="get">
    <label for="quantity">Quantity: </label><br>
    <input type="text" name="quantity"><br>
    <input type="submit" value="total">
    </form>
</body>
</html>
<?php
$item = "pizza";
$rate = 4.99;
$quantity = $_GET["quantity"];
$total = $quantity*$rate;
echo "You've ordered {$quantity}X {$item} <br>";
echo "Total price = \${$total}"

?>