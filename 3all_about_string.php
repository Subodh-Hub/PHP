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
        $phrase="My name is Subodh Rijal";
        echo $phrase;
        echo"<br>";

        //strtolower:change all the string to lowercase

        echo strtolower($phrase);
        echo"<br>";

        //strtoupper:change all the string to uppercase
        echo strtoupper($phrase);
        echo"<br>";

        //strlen:this will tell how many character are there in the variable
        echo strlen($phrase);
        echo"<br>";

        //to figure out any character we give index 
        //to figure out what the first character is there in string
        echo $phrase[0];
        echo"<br>";

        $name="paste";
        $name[0]="t";
        echo $name;
        echo"<br>";

        //lets change the name of phrase variable
        echo str_replace("Subodh Rijal", "Sahil Sheikh", $phrase);
        echo"<br>";

        //to get substring
        echo substr($phrase, 11,4)
    ?>
</body>
</html>