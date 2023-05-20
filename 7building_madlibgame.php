<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="7building_madlibgame.php" method="get">
        color: <input type="text" name="color">
        <br>
        noun: <input type="text" name="noun">
        <br>
        celebrity: <input type="text" name="celebrity">
        <br>
        <input type="submit">
    </form>
    <?php
    $Color=$_GET["color"];
    $Noun=$_GET["noun"];
    $Celebrity=$_GET["celebrity"];
    echo "Roses are $Color<br>";
    echo "$Noun are blue<br>";
    echo "i love $Celebrity<br>";
    ?>
</body>
</html>