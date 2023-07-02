<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to radio button</h1>
    <form action="radio_btn.php" method="post">
        <input type="radio" name="sports" value="basketball">
        basketball <br>
        <input type="radio" name="sports" value="football">
        football <br>
        <input type="radio" name="sports" value="hockey">
        hockey <br>
        <input type="submit" name="confirm" value = "confirm">
    </form>
</body>
</html>
<?php
if(isset($_POST["confirm"])){
    $game= null;
    if(isset($_POST["sports"])){    
    $game = $_POST["sports"];
}
    switch($game){
        case "basketball":
            echo "You choose basketball";
            break;
        case "football":
            echo "you choose football";
            break;
        case "hockey":
            echo "you choose hockey";
            break;
        default:
            echo "please make a selection";
                 }
}
?>