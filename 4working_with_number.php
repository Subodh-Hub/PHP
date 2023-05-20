<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //we can simply print any integer as well as floating number in php using echo
    echo 45;
    echo "<br>";
    
    //we can also operate any mathematical operation on directly on echo
    echo 25+10;
    echo "<br>";
    echo 25*10;
    echo "<br>";
    echo 25%10;
    echo "<br>";

    //we can also print number like this

    $num =50;
    echo $num;
    echo "<br>";

    //about increment and decrement operator
    //increment
    $number=30;
    $number++;
    echo $number;
    echo "<br>";

    //decrement
    $age=50;
    $age--;
    echo $age;
    echo"<br>";

    //here are some ternary operator
    $hello=50;
    //$hello=$hello+40;
    $hello+=30;
    echo $hello;
    echo"<br>";

    //php mathematical function
    echo abs(-200);
    echo"<br>";
    //This will perform 2 to the power 4
    echo pow(2,4);
    echo"<br>";
    //square root
    echo sqrt(64);
    echo"<br>";
    //comparing 2 number
    echo max(2,10);
    echo"<br>";
    echo min(2,10);
    echo"<br>";

    //rounding of the number
    echo round(3.2);
    echo"<br>";
    echo ceil(3.3);
    echo"<br>";
    echo floor (3.9);
    echo"<br>";
    ?>
</body>
</html>