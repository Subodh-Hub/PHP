<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="5Getting_user_input.php" method="get">
        Name: <input type="text" name="Username">
        <br>
        Age: <input type="text" name="Age">
        <br>
        <input type="submit"> 
    </from>
    <br>
     
    <?php
    echo "Your name is ".$_GET["Username"]
    ?>
     
    <?php
    echo"Your age is ". $_GET["Age"]
    ?>
</body>
</html>