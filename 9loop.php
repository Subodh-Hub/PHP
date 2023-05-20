<?php
    //while loop
    echo"This is while loop<br>";
    $i=1;
    while($i<=10){
        echo"$i. ";
        echo"subodh<br>";
        $i++;
    }
    echo"<br>";
   
    
    //for loop
    echo"This is for loop<br>";
    for($m=0;$m<=10;$m+=2){
        echo"$m"."<br>";
    }
    echo"<br>";
   
    
    //do while loop
    echo"this is do while loop<br>";
    $x=0;
    do{
        echo"$x<br>";
        $x++;
    }
    while($x<10);

?>
<?php
    echo"welcome to for each loop<br>";

    $arr=array("banana","apple","grapes",'guava',"pomegramate","butter");

    // for ($i=0; $i < count($arr); $i++) { 
    //     echo $arr[$i];
    //     echo "<br>";
    // }
    //better way to do this

    //foreach($variable as $value)--This is used to iterate the value of array and object
    foreach($arr as $value){
        echo"$value <br>";
    }
?>