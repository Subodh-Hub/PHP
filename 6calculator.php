<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="6calculator.php" method="get">
        <input type="number" name="input1">
        <br>
        <input type="number" name="input2">
        <br>
        <input type="submit">
    </form>
    Answer:
    <?php
    echo $_GET["input1"]+$_GET["input2"]
    ?>
</body>
</html>